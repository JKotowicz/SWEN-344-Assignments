<?php
if (isset($_POST['Username'], $_POST['signup-pWord'], $_POST['confirm-pWord'])) {
	if ($_POST['signup-pWord'] == $_POST['confirm-pWord']) {
		print_r($_POST);
		$('form.signup').trigger("reset");
		alert("You're signed in!");
	} else {
		alert("You're passwords don't match.")
	}
}