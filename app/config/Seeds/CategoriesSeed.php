<?php
use Migrations\AbstractSeed;

/**
 * Categories seed.
 */
class CategoriesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => '住居費', 'created' => '2019-12-01 00:00:00'],
            ['id' => 2, 'name' => '水道・光熱費', 'created' => '2019-12-01 00:00:00'],
            ['id' => 3, 'name' => '通信費', 'created' => '2019-12-01 00:00:00'],
            ['id' => 4, 'name' => '食費', 'created' => '2019-12-01 00:00:00'],
        ];

        $table = $this->table('categories');
        $table->insert($data)->save();
    }
}
