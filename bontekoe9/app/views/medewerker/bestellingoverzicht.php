<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
    <div class="large-12 columns">
        <table role="grid" width="100%" summary="Overzicht van films">
            <thead>
                <tr>
                    <th>Film Moment ID</th>
                    <th>Gebruiker</th>
                    <th>email</th>
                    <th>Film</th>
                </tr>
            </thead>
            <tbody id="filmOverzicht">
                <?php foreach ($bestellingen as $bestelling): ?>
                    <tr>
                        <td><?php echo $bestelling->filmmoment->id ?></td>
                        <td><?php echo $bestelling->user->voornaam . ' ' . $bestelling->user->achternaam ?></td>
                        <td><?php echo $bestelling->user->email ?></td>
                        <td><?php echo $bestelling->filmmoment->film->titel ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
