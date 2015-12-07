<?php require_once VIEW_DIR . '/includes/header.php'; ?>
<div class="logo text-center" id="bioscoop">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once './app/views/includes/nav.php'; ?>

<div class="banner main-banner">
    <div class="row">
        <div class="large-12 columns text-center">
            <h1>Welkom op de bioscoop site van De Bonte Koe</h1>
            <h3>Recente films</h3>
            <hr>
        </div>
        <div class="large-12 columns">
            <ul class="large-block-grid-3 medium-block-grid-3 small-block-grid-1">
                <?php foreach ($films as $film): ?>
                    <li class="text-center">
                        <?php echo $film->titel ?>
                        <a href="/bontekoe9/bioscoop/films/<?php echo $film->id ?>"><img src="<?php echo $film->filmposter ?>"></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        
    </div>
</div>
<div class="banner prijzen-banner">
    <div class="row">
        <div class="large-12 columns">
            <ul class="pricing-table">
                <li class="title">Tarieven</li>
                <li class="bullet-item">Reguliere tarieven</li>
                <li class="price">Normaal tijden: €10,- p.p</li>
                <li class="price">Ochtend tijden: €7,50 p.p</li>
                <li class="bullet-item">Extra tarieven</li>
                <li class="price">3d film extra: €3,50 p.p</li>
            </ul>
        </div>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php'; ?>
