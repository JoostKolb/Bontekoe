<?php require_once VIEW_DIR . '/includes/header.php'; ?>

<div class="kiezen-inloggen">
    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
        <a href="/bontekoe9/gebruiker">Hallo, <?php echo $_SESSION['voornaam'] ?></a>
        <?php if (!$_SESSION['level'] == 0): ?>
            <a href="/bontekoe9/medewerker/dashboard">Dashboard</a>
        <?php endif ?>
        <a href="/bontekoe9/uitloggen">Uitloggen</a>
    <?php else: ?>
        <a href="/bontekoe9/inloggen">Inloggen</a>
    <?php endif; ?>
</div>
<a href="/bontekoe9/restaurant"><div class="banner kiezen-banner" id="restaurant-banner">Restaurant</div></a>
<a href="/bontekoe9/bioscoop"><div class="banner kiezen-banner" id="bioscoop-banner">Bioscoop</div></a>
<a href="/bontekoe9/uitgaan"><div class="banner kiezen-banner" id="uitgaan-banner">Uitgaan</div></a>

<?php require_once VIEW_DIR . '/includes/footer.php'; ?>
