<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>
<div class="push"></div>

<form action="/bontekoe9/registreren/toevoegen" method="post">
	<div class="row">
		<div class="large-12 columns">
			<label>Email
				<input type="email" name="email" placeholder="Email" required>
			</label>
		</div>
		<div class="large-12 columns">
			<label>Wachtwoord
				<input type="password" name="password" placeholder="Wachtwoord" required>
			</label>
		</div>
	</div>
	<div class="row">
		<div class="large-6 columns">
			<label>Voornaam
				<input type="text" name="voornaam" placeholder="Voornaam" required>
			</label>
		</div>
		<div class="large-6 columns">
			<label>Achternaam
				<input type="text" name="achternaam" placeholder="Achternaam" required>
			</label>
		</div>
		<div class="large-9 columns">
			<label>Stad Naam
				<input type="text" name="stad" placeholder="Stad Naam" required>
			</label>
		</div>
		<div class="large-3 columns">
			<label>Postcode
				<input type="text" name="postcode" placeholder="Postcode" required>
			</label>
		</div>
		<div class="large-6 columns">
			<label>Straat naam
				<input type="text" name="straatnaam" placeholder="Straat naam" required>
			</label>
		</div>
		<div class="large-3 columns">
			<label>Huisnummer
				<input type="number" name="huisnummer" placeholder="Huisnummer" required>
			</label>
		</div>
		<div class="large-3 columns">
			<label>Huisnummer toevoegsel
				<input type="text" name="huisnummertoevoegsel" placeholder="Toevoegsel">
			</label>
		</div>
		
	</div>
	<div class="row">
		<input type="submit" class="button expand radius" value="Registreren">
	</div>
</form>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
