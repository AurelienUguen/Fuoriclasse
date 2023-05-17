<?php

class UserController
{
  
    public static function getUsers()
    {
        $pdo = Database::getInstance();
        
        $users = new UserRepository($pdo);
        $users->usersList();
        return $users;

        /* $users = [];
        $users = UserRepository::findAll();
        return $users; */
    }

}