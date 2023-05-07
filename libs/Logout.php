<?php

class Logout
{
    public static function logout()
    {
       session_unset();
       header('location: home');
       
    }

}