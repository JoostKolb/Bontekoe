<?php require_once VIEW_DIR . '/includes/header.php' ?>
<div class="logo text-center" id="bioscoop">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>
<div class="push"></div>
<div class="row">
    <div class="large-12 columns">
    <?php require_once VIEW_DIR . '/includes/searchbar.php' ?>
    </div>
    <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-5 columns" id="filmResponse">
        <?php foreach ($films as $film): ?>
                <li class="text-center"><span class="small-text"><?php echo $film->titel ?></span><a href="/bontekoe9/bioscoop/films/<?php echo $film->id ?>"><img class="film-img" src="<?php echo $film->filmposter ?>"></a></li>
        <?php endforeach ?>
    </ul>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
