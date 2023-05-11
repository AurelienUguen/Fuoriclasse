<?php

class UserListController
{
  
    public static function getUsers()
    {
        $users = [];
        $users = UserRepository::findAll();
        return $users;
    }
}