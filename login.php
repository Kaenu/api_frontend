<?php $page_title = "Login"; ?>
<?php require "view/navigation.php"; ?>
<h1>Einloggen</h1>
<form onsubmit="clickToScuess(event);">
	<div class="field">
        <label for="username-field">Username</label>
		<input type="text" id="username-field">
	</div>

	<div class="field">
        <label for="password-field">Password</label>
		<input type="password" id="password-field">
	</div>

	<div class="field">
		<button type="submit">Login</button>
	</div>
    
</form>
<script src=""></script>
    <?php require "view/end.php"; ?>