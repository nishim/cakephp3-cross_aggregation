<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\Table;
use DateTimeImmutable;
use Cake\ORM\RulesChecker;
use Cake\Validation\Validator;
use Cake\Database\Expression\QueryExpression;
use Cake\Database\Expression\IdentifierExpression;
use DateTimeInterface;

/**
 * Accounts Model
 *
 * @property \App\Model\Table\CategoriesTable&\Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Account get($primaryKey, $options = [])
 * @method \App\Model\Entity\Account newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Account[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Account|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Account patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Account[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Account findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AccountsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('accounts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->date('record_date')
            ->requirePresence('record_date', 'create')
            ->notEmptyDate('record_date');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('amount')
            ->requirePresence('amount', 'create')
            ->notEmptyString('amount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }

    /**
     * 2つの日付間の月の、月初の日付を配列にして返す。
     *
     * @param DateTimeInterface $from
     * @param DateTimeInterface $to
     * @return DateTimeInterface[]
     */
    public function getTargetMonths(DateTimeInterface $from, DateTimeInterface $to): array
    {
        $r = [];
        for ($m = $from; $m->format('Y-m-01') <= $to->format('Y-m-01'); $m = $m->modify("+1 months")) {
            $r[] = $m;
        }
        return $r;
    }

    /**
     * クロス集計するカスタムファインダー
     *
     * @param Query $query
     * @param array $options
     * @return Query
     */
    public function findCrossAggregate(Query $query, array $options): Query
    {
        $select = [
            'Categories.name',
        ];
        /** @var DateTimeInterface[] $months */
        $months = $options['months'];
        foreach ($months as $m) {
            $q = $this->find();
            $case = $q->newExpr()->addCase(
                [
                    $q->newExpr()->between('Accounts.record_date', $m->format('Y-m-01'), $m->format('Y-m-t')),
                ],
                [new IdentifierExpression('Accounts.amount'), 0],
                ['integer', 'integer']
            );
            $select[$m->format('Y/m')] = $q->func()->sum($case);
        }

        return $query
            ->select($select)
            ->contain(['Categories'])
            ->group(['Categories.name']);
    }
}
