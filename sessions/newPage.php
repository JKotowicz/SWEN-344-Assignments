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
?>

<br /><br />
<p>Enter your favorite color and food.</p>
<form role = "form" action = "" method = "post">
    Color: <input type = "text" name = "favColor"></br>
    Food: <input type = "text" name = "favFood"></br>
    <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "submit">Submit</button>
</form>

<br />
<?php 
//read the session for color and favorite food
if (isset($_POST['favColor'])) {
	$_SESSION['favColor'] = $_POST['favColor'];
}
if (isset($_POST['favFood'])) {
	$_SESSION['favFood'] = $_POST['favFood'];
}
?>
<p>
	Your favorite color is: <?php echo $_SESSION['favColor'];?>
	<br /><br />
	Your favorite food is: <?php echo $_SESSION['favFood'];?>
</p>

<br /><br />
<a href="clearsessions.php">Clear Sessions</a>

<?php  
}else{
?>
	You are not a valid user

	<?php
}
?>

</body>
</html>