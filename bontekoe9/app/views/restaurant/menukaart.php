<?php require_once VIEW_DIR . '/includes/header.php' ?>
<div class="logo text-center" id="restaurant">
    <span class="logo-text">De Bonte Koe</span>
</div>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>
<div class="push"></div>
<div class="row">
	<div class="large-12 columns">
	<ul class="accordion" data-accordion>
		<li class="accordion-navigation">
			<a href="#dranken">Dranken</a>
			<div id="dranken" class="content active">
				<?php foreach ($dranken as $drank): ?>
					<?php echo $drank->naam ?><br>
					<?php echo $drank->omschrijving ?><br>
					<?php echo $drank->ingredienten ?><br>
					€ <?php echo $drank->prijs ?>
					<hr>
				<?php endforeach ?>
			</div>
		</li>
		<li class="accordion-navigation">
			<a href="#voorgerechten">Voorgerechten</a>
			<div id="voorgerechten" class="content">
				<?php foreach ($voorgerechten as $voorgerecht): ?>
					<?php echo $voorgerecht->naam ?><br>
					<?php echo $voorgerecht->omschrijving ?><br>
					<?php echo $voorgerecht->ingredienten ?><br>
					€ <?php echo $voorgerecht->prijs ?>
					<hr>
				<?php endforeach ?>
			</div>
		</li>
		<li class="accordion-navigation">
			<a href="#hoofdgerechten">Hoofdgerechten</a>
			<div id="hoofdgerechten" class="content">
				<?php foreach ($hoofdgerechten as $hoofdgerecht): ?>
					<?php echo $hoofdgerecht->naam ?><br>
					<?php echo $hoofdgerecht->omschrijving ?><br>
					<?php echo $hoofdgerecht->ingredienten ?><br>
					€ <?php echo $hoofdgerecht->prijs ?>
					<hr>
				<?php endforeach ?>
			</div>
		</li>
		<li class="accordion-navigation">
			<a href="#nagerechten">Nagerechten</a>
			<div id="nagerechten" class="content">
				<?php foreach ($nagerechten as $nagerecht): ?>
					<?php echo $nagerecht->naam ?><br>
					<?php echo $nagerecht->omschrijving ?><br>
					<?php echo $nagerecht->ingredienten ?><br>
					€ <?php echo $nagerecht->prijs ?>
					<hr>
				<?php endforeach ?>
			</div>
		</li>
	</ul>
	</div>
</div>
<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
