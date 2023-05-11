<?php

class UserRepository extends ParentRepository
{
    private RoleRepository $roleRepository;

    public function __construct($pdo)
    {
        parent::__construct($pdo, DB_TABLE_USER, User::class);

        $this->roleRepository = new RoleRepository($pdo);
    }

    public function getUsers()
    {
        $userSql = 'SELECT * FROM ' . DB_TABLE_USER . ' u ';
        $userStmt = $this->pdo->prepare($userSql);

        $userStmt->execute();
        $userStmt->setFetchMode(PDO::FETCH_CLASS, User::class);

        $users = $userStmt->fetchAll();

        foreach ($users as $user) {
            $role = $this->roleRepository->getRoleById($user->getRoleId());

            $user->setRole($role);
        }

        return $users;
    }
}