<?php $page_title = "Kategorie"; ?>
<?php
$current_page = "products";
require_once "view/navigation.php";
?>
<h1>Kategorie erstellen</h1>
<a href="category.php"><button class="edit-cat" id="edit-category">Kategorie bearbeiten</button></a>

<form onsubmit="clickToSuccess(event);">
	<div class="field">
		<label for="name-field">Kategorie-Name:</label>
		<input type="text" id="name-field" required>
	</div>

	<div class="field">
		<input type="checkbox" id="active-checkbox">
		<label for="active-checkbox">Aktiv</label>
	</div>

	<div class="field">
		<button id="save-cat-button" type="submit">Speichern</button>
	</div>
</form>
<script src="controller/categories.js"></script>
<?php require "view/end.php"; ?>