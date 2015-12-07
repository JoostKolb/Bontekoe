<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<form action="/bontekoe9/inloggen/inloggen" method="post">
    <div class="row">
        <div class="large-12 columns text-center">
            <label><h6>Email</h6>
                <input type="email" name="email" placeholder="Email" required>
            </label>
            <label><h6>Wachtwoord</h6>
                <input type="password" name="password" placeholder="Wachtwoord" required>
            </label>
            <input type="submit" value="inloggen" class="button expand radius">
        </div>
    </div>
</form>
<div class="row">
    <div class="large-12 columns text-center">
        Nog geen account? Ga <a href="/bontekoe9/registreren">hier</a> heen om te registreren!
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
