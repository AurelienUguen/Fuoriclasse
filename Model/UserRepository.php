<?php

class UserRepository
{
    public static function findAll(): array
    {
        return Database::getInstance()
            ->select('SELECT * FROM user', User::class);
    }
}