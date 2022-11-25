<?php $page_title = "Login"; ?>
<?php require "view/navigation.php"; ?>
<h1>Einloggen</h1>
<form onsubmit="clickToSucess(event);">
	<div class="field">
		<label for="username-field">Username</label>
		<input type="text" id="username-field" required>
	</div>

	<div class="field">
		<label for="password-field">Password</label>
		<input type="password" id="password-field" required>
	</div>

	<div class="field">
		<button id="login-button" type="submit">Login</button>
	</div>

</form>
<script src="controller/authentication.js"></script>
<?php require "view/end.php"; ?>