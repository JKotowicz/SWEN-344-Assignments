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
    Color: <input type = "text" name = "favColor" id="favColor"></br>
    Food:  <input type = "text" name = "favFood" id="favFood"></br>
    <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "submit">Submit</button>
</form>

<br />

<script>
// Store
	var inputColor = document.getElementById("favColor");
	localStorage.setItem("color", inputColor.value);
	var fColor = localStorage.getItem("color");

	var inputFood = document.getElementById("favFood");
	localStorage.setItem("food", inputFood.value);
	var fFood = localStorage.getItem("food");

	document.querySelector('.result').innerHTML = fColor;
	document.querySelector('.result2').innerHTML = fFood;
    //localStorage.setItem("favFood", $_SESSION['favFood']);
    // Retrieve
    //document.getElementById("result").innerHTML = localStorage.getItem("favColor");
    //document.getElementById("result2").innerHTML = localStorage.getItem("favFood");
//    document.getElementById("result").innerHTML = "Sorry, your browser does not support Web Storage...";
    //document.getElementById("result2").innerHTML = "Sorry, your browser does not support Web Storage...";
</script>

<p>
	Your favorite color is: <div class="result"></div>
	<br /><br />
	Your favorite food is: <div id="result2"></div>
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