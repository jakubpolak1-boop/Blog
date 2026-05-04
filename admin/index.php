<?php

require_once __DIR__ . '/../config.php';
require_once KOREN . '/app/modely/Clanok.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: ' . WEB . '/admin/login.php');
    exit;
}

$model_clanku = new Clanok();
$clanky = $model_clanku->dajVsetkyAdmin();

$nadpis_stranky = 'Admin';
require_once KOREN . '/public/templates/admin-prehlad.php';