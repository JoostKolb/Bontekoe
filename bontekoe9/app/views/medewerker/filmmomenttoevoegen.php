<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<form action="/bontekoe9/fmt" method="post">
<div class="row">
    
    <div class="large-12 columns">
        <label><h6>Film</h6>
            <select name="filmid">
                <?php foreach ($films as $film): ?>
                    <option value="<?php echo $film->id ?>"><?php echo $film->titel ?></option>
                <?php endforeach ?>
            </select>
        </label>
    </div>
    <div class="large-12 columns">
        <label><h6>Zaalnummer</h6>
            <select name="zaalnummer">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </label>
    </div>
    <div class="large-12 columns">
        <label><h6>Datum</h6>
            <input type="text" id="datum" name="datum" readonly>
        </label>
    </div>
    <div class="large-12 columns">
        <label><h6>Tijdstip</h6>
            <select id="tijdstip" name="tijdstip">
                <option value="20:30:00">20:30</option>
                <option value="23:00:00">23:00</option>
            </select>
        </label>
        <div class="push"></div>
    </div>
    <div class="large-12 columns">
        <input type="submit" value="Film Moment Toevoegen" class="button expand radius">
    </div>

</div>
</form>

<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
    
