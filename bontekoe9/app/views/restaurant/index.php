<?php require_once './app/views/includes/header.php' ?>
<div class="logo text-center" id="restaurant">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once './app/views/includes/nav.php' ?>
<div class="banner">
    <div class="row">
        <div class="large-12 columns text-center">
            <h1>Welkom op de restaurant site van De Bonte Koe</h1>
        </div>
        <div class="large-6 medium-6 columns">
            <h4><a href="/bontekoe9/restaurant/menukaart">Menukaart</a></h4>
            <p>Op deze pagina kan u alle gerechten zien die wij aanbieden in het restaurant. Geheel met ingredienten en prijzen.</p>
        </div>
        <div class="large-6 medium-6 columns">
            <h4><a href="/bontekoe9/restaurant/reserveren">Reserveren</a></h4>
            <p>Wilt u reserveren? Ga dan naar de reserverings pagina. Om te reserveren moet u ingelogged zijn.</p>
        </div>
    </div>
</div>
<div class="banner fotos">
    <div class="row">
        <div class="large-12 columns">
            <img src="/bontekoe9/public/images/restaurant/1.jpg" width="100%">
            <div class="push"></div>
            <img src="/bontekoe9/public/images/restaurant/2.jpg" width="100%">
        </div>
    </div>
</div>

<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once './app/views/includes/footer.php' ?>
