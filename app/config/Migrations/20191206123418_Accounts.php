<?php
use Migrations\AbstractMigration;

class Accounts extends AbstractMigration
{
    public function change()
    {
        $this->table('accounts')
        ->addColumn('record_date', 'date')
        ->addColumn('category_id', 'integer')
        ->addColumn('name', 'string')
        ->addColumn('amount', 'integer')
        ->addColumn('created', 'datetime')
        ->addForeignKey('category_id', 'categories')
        ->create();
    }
}
