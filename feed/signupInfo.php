<?php
if (isset($_POST['Username'], $_POST['signup-pWord'], $_POST['confirm-pWord'])) {
	if ($_POST['signup-pWord'] == $_POST['confirm-pWord']) {
		print_r($_POST);
	} else {
		print_r("You're passwords don't match.");
	}
}