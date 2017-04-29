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
    Food:  <input type = "text" name = "favFood"></br>
    <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "submit">Submit</button>
</form>

<br />
<?php 
// read the session for color and favorite food
if (isset($_POST['favColor'])) {
	$_SESSION['favColor'] = $_POST['favColor'];
	localStorage.setItem("favColor", $_POST['favColor']);
}
if (isset($_POST['favFood'])) {
	$_SESSION['favFood'] = $_POST['favFood'];
	localStorage.setItem("favFood", $_POST['favFood']);
}
?>

<script>
// Store
	localStorage.setItem("favColor", $_POST['favColor']);
    //localStorage.setItem("favFood", $_SESSION['favFood']);
    // Retrieve
    document.getElementById("result").innerHTML = localStorage.getItem("favColor");
    //document.getElementById("result2").innerHTML = localStorage.getItem("favFood");
//    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    //document.getElementById("result2").innerHTML = "Sorry, your browser does not support Web Storage...";
</script>

<p>
	Your favorite color is: <div id="result"></div>
	<br /><br />
	Your favorite food is: <div id=""></div>
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