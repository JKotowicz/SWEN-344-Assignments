<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
// Check if the localStorage object exists
if(localStorage){
	$(document).ready(function(){
		$(".saveInfo").click(function(){
			// Get input color
			var color = $("#favColor").val();
			// Get input Food
			var food = $("#favFood").val();

			// Store data
    		localStorage.setItem("color", color);
    		localStorage.setItem("food", food);
    		alert("You have saved your favorite color and food.")
    		$(".getInfo").click(function() {
    			alert("Your favorite color is: " + localStorage.getItem("color") + ". Your favorite food is: " + localStorage.getItem("food"));
    		});
		});
		
	});
} else{
    alert("Sorry, your browser do not support local storage.");
}
</script>
</head>

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
    <label>Color: <input type="text" id="favColor" required></label></br>
    <label>Food:  <input type="text" id="favFood" required></label></br>
    <button class="saveInfo" type="button">Save Info</button>
    <button class="getInfo" type="button">Get Info</button>
</form>

<br />

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