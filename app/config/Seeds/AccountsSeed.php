<?php
use Migrations\AbstractSeed;

/**
 * Accounts seed.
 */
class AccountsSeed extends AbstractSeed
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
            // 住居費
            ['record_date' => '2019-09-25', 'category_id' => 1, 'name' => '家賃', 'amount' => 50000, 'created' => '2019-09-25'],
            ['record_date' => '2019-10-25', 'category_id' => 1, 'name' => '家賃', 'amount' => 50000, 'created' => '2019-10-25'],
            ['record_date' => '2019-11-25', 'category_id' => 1, 'name' => '家賃', 'amount' => 50000, 'created' => '2019-11-25'],
            ['record_date' => '2019-12-25', 'category_id' => 1, 'name' => '家賃', 'amount' => 50000, 'created' => '2019-12-25'],
            // 水道・光熱費
            ['record_date' => '2019-09-25', 'category_id' => 2, 'name' => '水道代', 'amount' => 1414, 'created' => '2019-09-25'],
            ['record_date' => '2019-09-25', 'category_id' => 2, 'name' => '電気代', 'amount' => 2134, 'created' => '2019-09-25'],
            ['record_date' => '2019-09-30', 'category_id' => 2, 'name' => 'ガス代', 'amount' => 2142, 'created' => '2019-09-30'],
            ['record_date' => '2019-10-25', 'category_id' => 2, 'name' => '水道代', 'amount' => 1821, 'created' => '2019-10-25'],
            ['record_date' => '2019-10-25', 'category_id' => 2, 'name' => '電気代', 'amount' => 2714, 'created' => '2019-10-25'],
            ['record_date' => '2019-10-31', 'category_id' => 2, 'name' => 'ガス代', 'amount' => 2589, 'created' => '2019-10-25'],
            ['record_date' => '2019-11-25', 'category_id' => 2, 'name' => '水道代', 'amount' => 2121, 'created' => '2019-11-25'],
            ['record_date' => '2019-11-25', 'category_id' => 2, 'name' => '電気代', 'amount' => 2881, 'created' => '2019-11-25'],
            ['record_date' => '2019-11-30', 'category_id' => 2, 'name' => 'ガス代', 'amount' => 2918, 'created' => '2019-11-25'],
            ['record_date' => '2019-12-25', 'category_id' => 2, 'name' => '水道代', 'amount' => 2383, 'created' => '2019-12-25'],
            ['record_date' => '2019-12-25', 'category_id' => 2, 'name' => '電気代', 'amount' => 3912, 'created' => '2019-12-25'],
            ['record_date' => '2019-12-31', 'category_id' => 2, 'name' => 'ガス代', 'amount' => 3148, 'created' => '2019-12-25'],
            // 通信費
            ['record_date' => '2019-09-25', 'category_id' => 3, 'name' => '光', 'amount' => 4500, 'created' => '2019-09-25'],
            ['record_date' => '2019-09-25', 'category_id' => 3, 'name' => '携帯', 'amount' => 1980, 'created' => '2019-09-25'],
            ['record_date' => '2019-10-25', 'category_id' => 3, 'name' => '光', 'amount' => 4500, 'created' => '2019-10-25'],
            ['record_date' => '2019-10-25', 'category_id' => 3, 'name' => '携帯', 'amount' => 1980, 'created' => '2019-10-25'],
            ['record_date' => '2019-11-25', 'category_id' => 3, 'name' => '光', 'amount' => 4500, 'created' => '2019-11-25'],
            ['record_date' => '2019-11-25', 'category_id' => 3, 'name' => '携帯', 'amount' => 1980, 'created' => '2019-11-25'],
            ['record_date' => '2019-12-25', 'category_id' => 3, 'name' => '光', 'amount' => 4500, 'created' => '2019-12-25'],
            ['record_date' => '2019-12-25', 'category_id' => 3, 'name' => '携帯', 'amount' => 1980, 'created' => '2019-12-25'],
            // 食費
            ['record_date' => '2019-09-07', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4219, 'created' => '2019-09-07'],
            ['record_date' => '2019-09-14', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 5312, 'created' => '2019-09-14'],
            ['record_date' => '2019-09-17', 'category_id' => 4, 'name' => '外食', 'amount' => 1200, 'created' => '2019-09-14'],
            ['record_date' => '2019-09-19', 'category_id' => 4, 'name' => '外食', 'amount' => 900, 'created' => '2019-09-14'],
            ['record_date' => '2019-09-21', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 3155, 'created' => '2019-09-21'],
            ['record_date' => '2019-09-28', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 3912, 'created' => '2019-09-28'],
            ['record_date' => '2019-10-05', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4517, 'created' => '2019-10-05'],
            ['record_date' => '2019-10-12', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 5187, 'created' => '2019-10-12'],
            ['record_date' => '2019-10-19', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 3941, 'created' => '2019-10-19'],
            ['record_date' => '2019-10-26', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4126, 'created' => '2019-10-26'],
            ['record_date' => '2019-11-02', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 3854, 'created' => '2019-11-02'],
            ['record_date' => '2019-11-09', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4194, 'created' => '2019-11-09'],
            ['record_date' => '2019-11-16', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 3343, 'created' => '2019-11-16'],
            ['record_date' => '2019-11-23', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4786, 'created' => '2019-11-23'],
            ['record_date' => '2019-11-24', 'category_id' => 4, 'name' => '外食', 'amount' => 800, 'created' => '2019-11-24'],
            ['record_date' => '2019-11-30', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 5120, 'created' => '2019-11-30'],
            ['record_date' => '2019-12-07', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4258, 'created' => '2019-12-07'],
            ['record_date' => '2019-12-09', 'category_id' => 4, 'name' => '外食', 'amount' => 800, 'created' => '2019-12-09'],
            ['record_date' => '2019-12-14', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 3513, 'created' => '2019-12-14'],
            ['record_date' => '2019-12-21', 'category_id' => 4, 'name' => 'スーパー', 'amount' => 4529, 'created' => '2019-12-21'],

        ];

        $table = $this->table('accounts');
        $table->insert($data)->save();
    }
}
