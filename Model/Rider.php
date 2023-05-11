<?php

class Rider {

    protected int $id;
    protected string $name;
    protected string $birthday;
    protected string $nationality;
    protected mixed $prosince;
    protected int $team_id;
    protected Team $team;
    protected string $profile;
    protected int $ranking;

    public function getid()
    {
        return $this->id;
    }

    public function getRiderName()
    {
        return $this->name;
    }

    public function setRiderName($name)
    {
        $this->name = $name;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function getRiderNationality()
    {
        return $this->nationality;
    }

    public function setRiderNationality($nationality)
    {
        $this->nationality = $nationality;
    }

    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam(Team $team)
    {
        $this->team = $team;
    }

    public function getProSince()
    {
        return $this->prosince;
    }

    public function setProSince($prosince)
    {
        $this->prosince = $prosince;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    public function getRiderRanking()
    {
        return $this->ranking;
    }

    public function setRiderRanking($ranking)
    {
        $this->ranking = $ranking;
    }
}