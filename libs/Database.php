<?php

require_once 'Connec.php';

class Database 
{
    private static ?Database $instance = null;

    private PDO $pdo;

    private function __construct()
    {
        $this->pdo = new PDO(DSN, USER, PASS);
    }

    public static function getInstance(): Database
    {
        if(self::$instance) {
            return self::$instance;
        }

        return self::$instance = new self();
    }

    public function select(string $sql, string $className): array
    {
        $sth = $this->pdo->prepare($sql);
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_CLASS, $className);
    }
}