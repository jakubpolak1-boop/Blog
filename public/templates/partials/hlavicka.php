<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $nadpis_stranky ?? NAZOV_WEBU ?></title>
    <link rel="stylesheet" href="<?= WEB ?>/public/assets/css/style.css">
</head>
<body>

<header class="horna_cast">
    <div class="obal">
        <h1><a href="<?= WEB ?>/index.php"><?= NAZOV_WEBU ?></a></h1>

        <nav>
            <a href="<?= WEB ?>/index.php">Domov</a>
            <a href="<?= WEB ?>/admin/login.php">Admin</a>
        </nav>
    </div>
</header>

<main class="obal">