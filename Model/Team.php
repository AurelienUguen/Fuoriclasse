<?php

class Team
{
    protected int $id;
    protected string $name;
    protected string $nationality;
    protected int $ranking;

    public function getId()
    {
        return $this->id;
    }

    public function getTeamName()
    {
        return $this->name;
    }

    public function setTeamName($name)
    {
        $this->name = $name;
    }

    public function getTeamNationality()
    {
        return $this->nationality;
    }

    public function setTeamNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function getTeamRanking()
    {
        return $this->ranking;
    }

    public function setTeamRanking($ranking)
    {
        $this->ranking = $ranking;
    }
}