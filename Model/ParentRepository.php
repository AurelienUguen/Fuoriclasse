<?php

class ParentRepository
{
    protected $pdo;
    protected $tableName;
    protected $tableClass;

    public function __construct($pdo, $tableName, $tableClass)
    {
        $this->pdo = $pdo;
        $this->tableName = $tableName;
        $this->tableClass = $tableClass;
    }
}