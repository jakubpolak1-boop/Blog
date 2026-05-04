<?php

require_once __DIR__ . '/config.php';
require_once KOREN . '/app/modely/Clanok.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

$model_clanku = new Clanok();
$clanok = $model_clanku->dajJedenPodlaId($id);

$nadpis_stranky = $clanok ? $clanok['nazov'] : 'Clanok';
require_once KOREN . '/public/templates/detail-clanku.php';