<?php

require_once KOREN . '/app/jadro/Databaza.php';

class Clanok
{
    private PDO $db;

    public function __construct()
    {
        $databaza = new Databaza();
        $this->db = $databaza->dajSpojenie();
    }

    public function dajVsetkyPublikovane(): array
    {
        $sql = "SELECT c.*, p.meno AS autor
                FROM clanky c
                LEFT JOIN pouzivatelia p ON c.pouzivatel_id = p.id
                WHERE c.publikovany = 1
                ORDER BY c.id DESC";

        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function dajJedenPodlaId(int $id): array|false
    {
        $sql = "SELECT c.*, p.meno AS autor
                FROM clanky c
                LEFT JOIN pouzivatelia p ON c.pouzivatel_id = p.id
                WHERE c.id = :id AND c.publikovany = 1";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }
}