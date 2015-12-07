<?php require_once VIEW_DIR . '/includes/header.php'; ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
    <div class="large-12 columns text-center">
        <h1>Hallo, <?php echo $_SESSION['voornaam'] ?>.</h1>
    </div>
    <div class="large-6 columns">
        <h4>Film Toevoegen</h4>
        <p>Voeg <a href="/bontekoe9/medewerker/filmtoevoegen">hier</a> films toe.</p>
    </div>
    <div class="large-6 columns">
        <h4>Film Overzicht</h4>
        <p>Bekijk en wijzig hier <a href="/bontekoe9/medewerker/filmoverzicht">hier</a> films.</p>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php'; ?>
