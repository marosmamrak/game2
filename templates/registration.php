<form action="/registration.php" method="post">
    <label>Meno: <input type="text" name="meno" value="<?= $meno ?>" /></label>
    <label>Priezvisko: <input type="text" name="priezvisko" value="<?= $priezvisko ?>" /></label>
    <label>Adresa: <textarea name="adresa"><?= $adresa ?></textarea></label>
    <input type="submit" value="Odosli" name="odoslal" />
</form>