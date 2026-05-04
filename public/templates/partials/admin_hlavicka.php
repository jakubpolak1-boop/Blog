<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nadpis_stranky ?? 'Admin' ?></title>
    <link rel="stylesheet" href="<?= WEB ?>/public/assets/css/style.css">
</head>
<body>

<div class="admin_obal">
    <aside class="admin_menu">
        <h2>Admin</h2>
        <a href="<?= WEB ?>/admin/index.php">Prehlad</a>
        <a href="<?= WEB ?>/admin/pridat.php">Pridat clanok</a>
        <a href="<?= WEB ?>/index.php">Pozriet web</a>
        <a href="<?= WEB ?>/admin/odhlasit.php">Odhlasit sa</a>
    </aside>

    <section class="admin_obsah">