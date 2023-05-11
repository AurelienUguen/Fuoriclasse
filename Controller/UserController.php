<?php

class UserController
{
    private UserRepository $userRepository;

    public function __construct($pdo) 
    {
        $this->userRepository = new UserRepository($pdo);
    }

    public function getUserList()
    {
       $users = $this->userRepository->getUsers();

    }

   
}