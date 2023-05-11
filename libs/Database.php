<?php

require_once 'Connec.php';

class Database 
{
    private static ?Database $instance = null;

    private PDO $pdo;

    public function __construct()
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
}