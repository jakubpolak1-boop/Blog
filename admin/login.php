<?php

require_once __DIR__ . '/../config.php';
require_once KOREN . '/app/modely/Pouzivatel.php';

if (isset($_SESSION['admin_id'])) {
    header('Location: ' . WEB . '/admin/index.php');
    exit;
}

$chyba = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $meno = trim($_POST['meno'] ?? '');
    $heslo = trim($_POST['heslo'] ?? '');

    $model_pouzivatela = new Pouzivatel();
    $pouzivatel = $model_pouzivatela->dajPodlaMena($meno);

    if ($pouzivatel && password_verify($heslo, $pouzivatel['heslo'])) {
        $_SESSION['admin_id'] = $pouzivatel['id'];
        $_SESSION['admin_meno'] = $pouzivatel['meno'];

        header('Location: ' . WEB . '/admin/index.php');
        exit;
    } else {
        $chyba = 'Nespravne meno alebo heslo.';
    }
}

$nadpis_stranky = 'Prihlasenie';
require_once KOREN . '/public/templates/prihlasenie.php';