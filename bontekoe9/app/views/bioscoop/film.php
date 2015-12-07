<?php require_once VIEW_DIR . '/includes/header.php' ?>
<div class="logo text-center" id="bioscoop">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
    <div class="large-3 columns">
        <img src="<?php echo $film->filmposter ?>">
    </div>
    <div class="large-9 columns text-left">
        <h1><?php echo $film->titel ?></h1>
        <hr>
        <h5>Synopsys</h5>
        <p><?php echo $film->omschrijving ?></p>
    </div>
    
</div>
<div class="push"></div>
<div class="row">
    <div class="large-6 columns">
        <table width="100%">
            <tr>
                <th>Genre(s)</th>
                <td><?php echo $film->genre ?></td>
            </tr>
            <tr>
                <th>Regisseur(s)</th>
                <td><?php echo $film->regisseur ?></td>
            </tr>
            <tr>
                <th>Speelduur</th>
                <td><?php echo $film->speelduur ?> Minuten</td>
            </tr>
            <tr>
                <th>Taalversie</th>
                <td><?php echo $film->taalversie ?></td>
            </tr>
            <tr>
                <th>3d</th>
                <td><?php echo $retVal = ($film->dried) ? 'Ja' : 'Nee' ; ?></td>
            </tr>
            <tr>
                <th>IMDB Link</th>
                <td><a href="<?php echo $film->imdb ?>">Link</a></td>
            </tr>
        </table>
    </div>
    <div class="large-6 columns">
        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $film->trailer ?>" frameborder="0" allowfullscreen></iframe><br>
    </div>
    <div class="large-12 columns">
        <a href="/bontekoe9/bioscoop/kaartjekopen/<?php echo $film->id ?>" class="button expand radius">Kaartjes bestellen</a>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
