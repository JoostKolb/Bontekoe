<?php require_once VIEW_DIR . '/includes/header.php'; ?>
<?php require_once VIEW_DIR . '/includes/nav.php'; ?>

<div class="push"></div>
<form onsubmit="filmToevoegen(event)">
    <div class="row">
        <div class="large-12 columns text-justify">
            <label><h6>Titel</h6>
                <input type="text" id="filmtitel" placeholder="Enemy at the Gates" required>
            </label>
            <label><h6>Genre</h6>
                <input type="text" id="filmgenre" placeholder="Action, Drama" required>
            </label>
            <label><h6>Speelduur(minuten)</h6>
                <input type="number" id="filmspeelduur" placeholder="131" required>
            </label>
            <label><h6>Regisseur(s)</h6>
                <input type="text" id="filmregisseur" placeholder="Jean-Jacquese Annaud" required>
            </label>
            <label><h6>Taalversie</h6>
                <input type="text" id="filmtaalversie" placeholder="Engels" required>
            </label>
            <label><h6>3d</h6>
                <select id="filmdried" required>
                    <option value="0">Nee</option>
                    <option value="1">Ja</option>
                </select>
            </label>
            <label><h6>Omschrijving</h6>
                <textarea id="filmomschrijving" placeholder="A Russian sniper and a German sniper play a game of cat-and-mouse during the Battle of Stalingrad." required></textarea>
            </label>
            <label><h6>Filmposter(url)</h6>
                <input type="text" id="filmposter" placeholder="http://www.incine.fr/media/affiches_film/big/stalingrad-1373363066-57.jpg" required>
            </label>
            <label><h6>Trailer(youtube na watch?v=)</h6>
                <input type="text" id="filmtrailer" placeholder="DJbDEXQD0gE" required>
            </label>
            <label><h6>IMDB Link</h6>
                <input type="text" id="filmimdb" placeholder="http://www.imdb.com/title/tt0215750/?ref_=nv_sr_1" required>
            </label>

            <input type="submit" class="button expand" value="Film Toevoegen">
            
            <div class="response"></div>
        </div>
    </div>
</form>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php'; ?>
