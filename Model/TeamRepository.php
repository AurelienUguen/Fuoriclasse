<?php

class TeamRepository {

    public static function findAll(): array
    {
        return Database::getInstance()
            ->select('SELECT * FROM team', Team::class);
    }
}