<?php $page_title = "Produkte"; ?>
    <?php
    $current_page = "prodcuts";
    require_once "view/navigation.php";
    ?>
    <h1>Produkt erstellen</h1>
    <form onsubmit="clickToScuess(event);">
    <div class="field">
        <button type="submit">Produkt bearbeiten</button>
    </div>

    <div class="field">
		<label for="category-select">Kategorie-ID</label>
		<select id="category-select">
            <option value="">auswählen</option>
        </select>
    </div>
    
    <div class="field">
		<label for="name-field">Produktname</label>
		<input type="text" id="name-field" required>
	</div>

	<div class="field">
		<label for="sku-field">SKU</label>
		<input type="text" id="sku-field" required>
	</div>

	<div class="field">
		<input type="checkbox" id="active-checkbox">
		<label for="active-checkbox">Active</label>
	</div>

	<div class="field">
		<label for="image-field">Bild-URL</label>
		<input type="text" id="image-field">
	</div>

	<div class="field">
		<label for="price-field">Preis</label>
		<input type="number" id="price-field" min="0" required step=".01">
	</div>

	<div class="field">
		<label for="stock-field">Lager</label>
		<input type="number" id="stock-field" min="0" required>
	</div>

	<div class="field">
		<button type="submit">Speichern</button>
	</div>
</form>

    <?php require "view/end.php"; ?>