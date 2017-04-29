<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
// Check if the localStorage object exists
if(localStorage){
	$(document).ready(function(){
		$(".sub").click(function(){
			// Get input color
			var color = $("#favColor").val();
			// Get input Food
			var food = $("#favFood").val();

			// Store data
    		localStorage.setItem("color", color);
    		localStorage.setItem("food", food);
		});
		document.querySelector('.myColor').innerHTML = color;
		document.querySelector('.myFood').innerHTML = food;
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
    Color: <input type = "text" name = "favColor" id="favColor" required></br>
    Food:  <input type = "text" name = "favFood" id="favFood" required></br>
    <button class="sub" type="submit" name="submit">Submit</button>
</form>

<br />

<p>Your locally stored info.</p>
<div>
	Your favorite color is: <p class="result"></p>
	<br /><br />
	Your favorite food is: <p id="result2"></p>
</div>

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