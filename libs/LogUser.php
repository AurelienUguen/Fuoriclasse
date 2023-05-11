<?php

/* class LogUser
{
    public static function logUser()
    {
        // $users = UserRepository::getUsers();

        if (!empty($_POST)) {
            foreach ($users as $user) {
                if  ($_POST['email'] === $user->email && $_POST['password'] === $user->password) {
                    $logUser = CheckLogin::checkLogin($_POST['email'], $_POST['password']);
                    $_SESSION = [
                        'id' => $logUser['0']->id,
                        'name' => $logUser['0']->name,
                        'email' => $logUser['0']->email,
                        'password' => $logUser['0']->password,
                        'role' => $logUser['0']->role
                    ];
                header('location: home');
                return $_SESSION;
                } 
            } 
        }
    }
            
}   */  
    



?>
