<?php

class RiderRepository {

    public static function findAll(): array
    {
        return Database::getInstance()
            ->select('SELECT * FROM rider', Rider::class);
    }
}