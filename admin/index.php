<?php

require_once __DIR__ . '/../config.php';

if (!isset($_SESSION['admin_id'])) {
    header('Location: ' . WEB . '/admin/login.php');
    exit;
}

$nadpis_stranky = 'Admin';
require_once KOREN . '/public/templates/admin-prehlad.php';