<?php
use Migrations\AbstractMigration;

class Categories extends AbstractMigration
{
    public function change()
    {
        $this->table('categories')
        ->addColumn('name', 'string')
        ->addColumn('created', 'datetime')
        ->create();
    }
}
