<?php

class User
{
    private int $id;
    private string $name;
    private string $email;
    private string $password;
    private int $role_id;
    private Role $role;

    public function getId()
    {
        return $this->id;
    }

    public function getUserName()
    {
        return $this->name;
    }

    public function setUserName(string $name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getRoleId()
    {
        return $this->role_id;
    }
    
    public function getRole()
    {
        return $this->role;
    }

    public function setRole(string $role)
    {
        $this->role = $role;
    }
}