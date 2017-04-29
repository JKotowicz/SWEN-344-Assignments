<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php

// Read the sessions
if ($_SESSION["username"] != "") {
	echo "<br>Hello ";
	if ($_SESSION["name"] != "") {
		echo $_SESSION["name"];
	} else {
		echo $_SESSION["username"];	
	}
    echo "<h2> ";
}else{
?>

	You are not a valid user


	<?php
}


?>

<a href="newPage.php">Something Else Cool</a>



</body>
</html>