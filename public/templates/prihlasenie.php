<?php require_once KOREN . '/public/templates/partials/hlavicka.php'; ?>

<div class="karta prihlasenie">
    <h2>Prihlasenie do admina</h2>

    <form method="post" action="">
        <label for="meno">Meno</label>
        <input type="text" name="meno" id="meno">

        <label for="heslo">Heslo</label>
        <input type="password" name="heslo" id="heslo">

        <button type="submit">Prihlasit sa</button>
    </form>
</div>

<?php require_once KOREN . '/public/templates/partials/paticka.php'; ?>