<?php

class CheckLogin
{
    public static function checkLogin($email, $password){
 
        return Database::getInstance()
            ->select("SELECT * FROM user WHERE email = '$email' AND password = '$password'", User::class);
    }
}

?>