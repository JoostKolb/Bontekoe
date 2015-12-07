<?php require_once VIEW_DIR . '/includes/header.php' ?>
<div class="logo text-center" id="restaurant">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
    <div class="large-12 columns">
        <?php if (@$_SESSION['login']): ?>
        <form action="/bontekoe9/restaurant/reservering" method="post">
            <label><h5>Volledige naam</h5>
                <input type="text" name="naam" value="<?php echo $_SESSION['volledigenaam'] ?>" readonly required>
            </label>
            <label><h5>Email</h5>
                <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" readonly required>
            </label>
            <label><h5>Aantal personen</h5>
                <input type="number" name="aantalpersonen" min="1" max="20" required>
            </label>
            <label><h5>Datum</h5>
                <input type="text" id="datm" name="datum" required>
            </label>
            <label><h5>Tijd</h5>
                <input type="time" name="tijd" min="16:00" max="22:00" required>
            </label>
            <label><h5>Overige opmerkingen <small>(Wensen of vragen over allergieën)</small></h5>
                <textarea name="opmerkingen">Geen opmerkingen.</textarea>
            </label>
            <div class="push"></div>
            <input type="submit" value="Bestellen" class="button expand">
        </form>
        <?php else: ?>
            <h4 class="text-center">U moet inloggen om te reserveren! Klik <a href="/bontekoe9/inloggen">hier</a> om in te loggen.</h4>
        <?php endif; ?>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
