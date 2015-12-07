<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">

    <div class="large-12 columns">
        <table role="grid" width="100%" summary="Overzicht van films">
            <thead>
                <tr>
                    <th width="50">ID</th>
                    <th width="300">Film Titel</th>
                    <th>Zaal nummer</th>
                    <th>Datum</th>
                    <th>Tijdstip</th>
                    <th width="100">Opties</th>
                </tr>
            </thead>
            <tbody id="filmOverzicht">
                <?php foreach ($momenten as $moment): ?>
                    <tr>
                        <td><?php echo $moment->id ?></td>
                        <td><?php echo $moment->film->titel; ?></td>
                        <td><?php echo $moment->zaal; ?></td>
                        <td><?php echo $moment->datum ?></td>
                        <td><?php echo $moment->tijd ?></td>
                        <td>                            
                            <form action="/bontekoe9/medewerker/uitvoeren" id="verwijderen" method="post">
                                <input type="hidden" value="moment" name="moment">
                                <input type="hidden" value="<?php echo $moment->id ?>" name="verwijderen">
                                <input type="submit" class="button small alert" value="verwijderen">
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
