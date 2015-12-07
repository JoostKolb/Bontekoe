<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
    <div class="large-12 columns">
        <h1>Gebruiker's info:</h1>
        <p>Email: <?php echo $user->email ?></p>
        <p>Voornaam: <?php echo $user->voornaam ?></p>
        <p>Achternaam: <?php echo $user->achternaam ?></p>
        <p>Stad: <?php echo $user->stad ?></p>
        <p>Postcode: <?php echo $user->postcode ?></p>
        <p>Straatnaam: <?php echo $user->straatnaam ?></p>
        <p>Huisnummer: <?php echo $user->huisnummer ?></p>
        <?php if (!empty($user->huisnummertoevoegsel)): ?>
            <p>Huisnummer toevoegsel: <?php echo $huisnummertoevoegsel ?></p>
        <?php endif ?>
    </div>
    <hr>
    <div class="large-12 columns">
        <h1>Bestellingen / Reserveringen</h1>
        <table width="100%" style="table-layout: fixed">
            <thead>
                <tr>
                    <th colspan="5">Film bestellingen</th>
                </tr>
                <tr>
                    <th>Film naam</th>
                    <th>Prijs</th>
                    <th>Datum</th>
                    <th>Tijdstip</th>
                    <th>Aantal personen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user->filmbestellingen as $bestelling): ?>
                    <tr>
                        <td><?php echo $bestelling->filmmoment->film->titel ?></td>
                        <td>€<?php echo $bestelling->prijs ?></td>
                        <td><?php $date = new DateTime($bestelling->filmmoment->datum); echo $date->format('d-m-Y');  ?></td>
                        <td><?php $tijd = new DateTime($bestelling->filmmoment->tijd); echo $tijd->format('H:i')  ?></td>
                        <td><?php echo $bestelling->aantalpersonen ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <hr>
</div>

<div class="row">
    <div class="large-12 columns">
        <a href="/bontekoe9/gebruiker?verwijderen=true" class="button alert expand radius">Verwijder account</a>
    </div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
