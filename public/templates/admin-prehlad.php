<?php require_once KOREN . '/public/templates/partials/admin_hlavicka.php'; ?>

<div class="karta">
    <h2>Admin rozhranie</h2>
    <p>Prihlaseny pouzivatel: <strong><?= htmlspecialchars($_SESSION['admin_meno'] ?? '') ?></strong></p>
</div>

<div class="karta">
    <h3>Moje clanky</h3>
    <p>Zoznam clankov sem doplnime v dalsom kroku.</p>
</div>

<?php require_once KOREN . '/public/templates/partials/admin_paticka.php'; ?>