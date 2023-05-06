<?php

class UserListController
{
    public static function getOneUser()
    {
        $user = [];
        $user = UserRepository::findOneUser();
        return $user;
    }

    public static function getUsers()
    {
        $users = [];
        $users = UserRepository::findAll();
        return $users;
    }
}