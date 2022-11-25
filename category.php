<?php $page_title = "Kategorie"; ?>
<?php
$current_page = "category";
require_once "view/navigation.php";
?>
<h1>Categorys</h1>
<table class="category-table" id="category-table">
    <tr>
        <th class="table-header">Name</th>
        <th class="table-header">Aktiv</th>
        <th class="table-header">Bearbeiten</th>
        <th class="table-header">Löschen</th>
    </tr>
</table>
<script src="controller/category.js"></script>