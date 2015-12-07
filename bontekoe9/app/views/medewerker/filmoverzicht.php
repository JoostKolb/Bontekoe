<?php require_once VIEW_DIR . '/includes/header.php' ?>
<?php require_once VIEW_DIR . '/includes/nav.php' ?>

<div class="push"></div>
<div class="row">
	<div class="large-12 columns">
		<?php require_once VIEW_DIR . '/includes/searchbar.php' ?>
		<table role="grid" width="100%" summary="Overzicht van films">
			<thead>
				<tr>
					<th width="50">ID</th>
					<th width="900">Titel</th>
					<th width="100" colspan="2">Opties</th>
				</tr>
			</thead>
			<tbody id="filmOverzicht">
				<?php foreach ($films as $film): ?>
					<tr>
						<td><?php echo $film->id ?></td>
						<td><?php echo $film->titel ?></td>
						<td>							
							<form action="/bontekoe9/medewerker/uitvoeren" id="verwijderen" method="post">
								<input type="hidden" value="<?php echo $film->id ?>" name="verwijderen">
								<input type="submit" class="button small alert" value="verwijderen">
							</form>
						</td>
						<td>
							<a href="/bontekoe9/medewerker/filmwijzigen/<?php echo $film->id ?>" class="button small info left">Wijzigen</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<?php require_once VIEW_DIR . '/includes/footercontent.php' ?>
<?php require_once VIEW_DIR . '/includes/footer.php' ?>
