<?php

class RoleRepository extends ParentRepository
{
    public function __construct($pdo)
    {
        parent::__construct($pdo, DB_TABLE_ROLE, Role::class);

    }

    public function getRoleById(int $id)
    {
        $roleSql = 'SELECT * FROM ' . DB_TABLE_ROLE . ' WHERE id = ' . $id;
        $roleStmt = $this->pdo->query($roleSql);
        
        $roleStmt->setFetchMode(PDO::FETCH_CLASS, Role::class);

        return $roleStmt->fetch();
    }
}