<?php require_once KOREN . '/public/templates/partials/hlavicka.php'; ?>

<div class="karta">
    <h2>Vitaj na blogu</h2>
    <p>Toto je jednoducha verzia blogu, kde sa clanky nacitavaju z databazy.</p>
</div>

<?php if (empty($clanky)): ?>
    <div class="karta">
        <h3>Zatial tu nie su ziadne clanky</h3>
    </div>
<?php else: ?>
    <?php foreach ($clanky as $jeden_clanok): ?>
        <div class="karta">
            <h3><?= htmlspecialchars($jeden_clanok['nazov']) ?></h3>

            <p class="meta">
                Autor: <?= htmlspecialchars($jeden_clanok['autor']) ?> |
                Datum: <?= date('d.m.Y', strtotime($jeden_clanok['vytvorene'])) ?>
            </p>

            <p><?= htmlspecialchars($jeden_clanok['perex']) ?></p>

            <a class="tlacidlo" href="<?= WEB ?>/clanok.php?id=<?= $jeden_clanok['id'] ?>">
                Otvorit clanok
            </a>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<?php require_once KOREN . '/public/templates/partials/paticka.php'; ?>