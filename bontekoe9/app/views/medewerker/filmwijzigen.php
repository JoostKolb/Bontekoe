<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<form action="/bontekoe9/medewerker/filmwijzigen" method="post">
    <div class="row">
        <div class="large-12 columns text-justify">
            <input type="hidden" value="<?php echo $film->id ?>" name="filmid">
            <label><h6>Titel</h6>
                <input type="text" name="filmtitel" value="<?php echo $film->titel ?>" required>
            </label>
            <label><h6>Genre</h6>
                <input type="text" name="filmgenre" value="<?php echo $film->genre ?>" required>
            </label>
            <label><h6>Speelduur(minuten)</h6>
                <input type="number" name="filmspeelduur" value="<?php echo $film->speelduur ?>" required>
            </label>
            <label><h6>Regisseur(s)</h6>
                <input type="text" name="filmregisseur" value="<?php echo $film->regisseur ?>" required>
            </label>
            <label><h6>Taalversie</h6>
                <input type="text" name="filmtaalversie" value="<?php echo $film->taalversie ?>" required>
            </label>
            <label><h6>3d</h6>
                <select name="filmdried" required>
                    <option value="0">Nee</option>
                    <option value="1">Ja</option>
                </select>
            </label>
            <label><h6>Omschrijving</h6>
                <textarea name="filmomschrijving" required><?php echo $film->omschrijving ?></textarea>
            </label>
            <label><h6>Filmposter(url)</h6>
                <input type="text" name="filmposter" value="<?php echo $film->filmposter ?>" required>
            </label>
            <label><h6>Trailer(youtube na watch?v=)</h6>
                <input type="text" name="filmtrailer" value="<?php echo $film->trailer ?>" required>
            </label>
            <label><h6>IMDB Link</h6>
                <input type="text" name="filmimdb" value="<?php echo $film->imdb ?>" required>
            </label>

            <input type="submit" class="button expand" value="Film Wijzigen">
        </div>
    </div>
</form>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
