<?php

require_once KOREN . '/app/jadro/Databaza.php';

class Pouzivatel
{
    private PDO $db;

    public function __construct()
    {
        $databaza = new Databaza();
        $this->db = $databaza->dajSpojenie();
    }

    public function dajPodlaMena(string $meno): array|false
    {
        $sql = "SELECT * FROM pouzivatelia WHERE meno = :meno LIMIT 1";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['meno' => $meno]);

        return $stmt->fetch();
    }
}