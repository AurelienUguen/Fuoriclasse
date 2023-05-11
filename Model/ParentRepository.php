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

    public function findAll()
    {
        $stmt = $this->pdo->query('SELECT * FROM ' . $this->tableName);
        $stmt->setFetchMode(PDO::FETCH_CLASS, $this->tableClass);

        return $stmt->fetchAll();
    }

}