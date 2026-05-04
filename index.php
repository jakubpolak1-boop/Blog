<?php

require_once __DIR__ . '/config.php';
require_once KOREN . '/app/modely/Clanok.php';

$model_clanku = new Clanok();
$clanky = $model_clanku->dajVsetkyPublikovane();

$nadpis_stranky = 'Domov';
require_once KOREN . '/public/templates/domov.php';