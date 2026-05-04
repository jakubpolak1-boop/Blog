<?php

require_once KOREN . '/config.php';

class Databaza
{
    private PDO $spojenie;

    public function __construct()
    {
        $this->spojenie = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET,
            DB_USER,
            DB_PASS
        );

        $this->spojenie->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->spojenie->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function dajSpojenie(): PDO
    {
        return $this->spojenie;
    }
}