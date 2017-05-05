<?php
if (isset($_POST['Username'], $_POST['Password'])) {
	print_r($_POST);
	$('form.login').trigger("reset");
	alert("You're signed in!");
}