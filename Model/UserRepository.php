<?php

class UserRepository
{
    public static function findAll(): array
    {
        return Database::getInstance()
            ->select('SELECT * FROM user', User::class);
    }

    public static function findOneUser()
    {
        $users = UserRepository::findAll();
        foreach ($users as $user) {
            if (isset($_POST['username']) === $user->username && (isset($_POST['password']) === $user->password)) {

                Database::getInstance()
                    ->select("SELECT * FROM user WHERE username = " . $_POST['username'], User::class);
                    echo "connecté";       
            } else {
                echo "erreur";
            }
        }
    }
}