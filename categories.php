<?php $page_title = "Kategorie"; ?>
<?php
    $current_page = "products";
    require_once "view/navigation.php";
    ?>
    <h1>Kategorie erstellen</h1>

    <div class="field">
		<button type="submit">Kategorie bearbeiten</button>
	</div>
    
    <form onsubmit="clickToScuess(event);">
	<div class="field">
		<label for="name-field">Kategorie-Name:</label>
		<input type="text" id="name-field" required>
	</div>

	<div class="field">
		<input type="checkbox" id="active-checkbox">
		<label for="active-checkbox">Aktiv</label>
	</div>

	<div class="field">
		<button type="submit">Speichern</button>
	</div>
</form>
    <?php require "view/end.php"; ?>