<?php

class Role
{
    private int $id;
    private string $name;

    public function getId()
    {
        return $this->id;
    }

    public function getRoleName()
    {
        return $this->name;
    }

    public function setRoleName(string $name)
    {
        $this->name = $name;
    }
}
