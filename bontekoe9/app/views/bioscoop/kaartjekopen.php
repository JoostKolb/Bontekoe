<?php require_once VIEW_DIR . '/includes/header.php' ?>
<div class="logo text-center" id="bioscoop">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>


<div class="push"></div>
<div class="row">

    <div class="large-12 columns">
        <table role="grid" width="100%" summary="Overzicht van films">
            <thead>
                <tr>
                    <th width="300">Film Titel</th>
                    <th>Zaal nummer</th>
                    <th>Datum</th>
                    <th>Tijdstip</th>
                    <?php if (@$_SESSION['login']): ?>
                        <th width="20">Aantal personen</th>
                    <?php endif ?>
                    <th width="100">Opties</th>
                </tr>
            </thead>
            <tbody id="filmOverzicht">
                <?php foreach ($momenten as $moment): ?>
                    <tr>
                        <td><?php echo $moment->film->titel; ?></td>
                        <td><?php echo $moment->zaal; ?></td>
                        <td><?php $date = new DateTime($moment->datum); echo $date->format('d-m-Y');  ?></td>
                        <td><?php $tijd = new DateTime($moment->tijd); echo $tijd->format('H:i') ?></td>
                        <?php if (@$_SESSION['login']): ?>
                            <form action="/bontekoe9/bioscoop/bestellen" method="post">
                                <td>
                                    <input type="number" value="1" name="aantalpersonen">
                                </td>
                                <td>
                                    <input type="hidden" value="<?php echo $moment->id ?>" name="bestellen">
                                    <input type="submit" class="button small info" value="bestellen">
                                </td>
                            </form>
                        <?php else: ?>
                            <td><a href="/bontekoe9/inloggen">Inloggen</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
