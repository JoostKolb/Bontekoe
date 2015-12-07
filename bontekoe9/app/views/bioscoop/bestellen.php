<?php require_once VIEW_DIR . '/includes/header.php' ?>
<div class="logo text-center" id="bioscoop">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
<?php if (@$_POST['besteld'] != 'ja'): ?>
    <div class="large-12 columns">
        <ul class="pricing-table">
            <li class="title"><?php echo $moment->film->titel ?></li>
            <li class="price"><?php echo '€' . $prijs ?></li>
            <li class="description"><?php echo $moment->film->omschrijving ?></li>
            <li class="bullet-item">3d: <?php echo $retVal = ($moment->film->dried) ? 'Ja, + €2.50 x Het aantal personen.' : 'Nee' ; ?></li>
            <li class="bullet-item">Aantal personen: <?php echo $_POST['aantalpersonen'] . ' x €' . $prijspersonen ?></li>
            <form action="/bontekoe9/bioscoop/bestellen" method="post">
                <input type="hidden" value="ja" name="besteld">
                <input type="hidden" value="<?php echo $prijs ?>" name="prijs">
                <input type="hidden" value="<?php echo $_POST['aantalpersonen'] ?>" name="aantalpersonen">
                <input type="hidden" value="<?php echo $moment->id ?>" name="momentid">
                <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="userid">
                <li class="cta-button"><input type="submit" value="Bestellen" class="button expand radius"></li>
            </form>
        </ul>
    </div>
<?php else: ?>
    <div class="large-12 columns">
        <div data-alert class="alert-box success radius text-center">
            Uw Bestelling is gemaakt en er is een mail naar u gestuurd! U wordt terug naar Kaartjes kopen verwerzen!
        </div>
    </div>
<?php endif; ?>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
