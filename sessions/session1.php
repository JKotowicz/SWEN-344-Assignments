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
	if (isset($_POST['submit'])) {
		$_SESSION['name'] = $_POST['name'];
		echo $_SESSION["name"];
	} else {
		echo $_SESSION["username"];	
	}
?>

<h1>Valid User</h1>
You are a valid user. Here is your reward!!!<br />

<img src="https://az616578.vo.msecnd.net/files/2015/09/27/635789781274697208191557841_tumblr_lxcavjCQC81qcj7k0o5_r1_250-1.gif">

<br /><br />
<p>Enter what name you would like to be refered as.</p>
<form role = "form" action = "" method = "post">
    <input type = "text" name = "name"></br>
    <button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "submit">Submit</button>
</form>

<br /><br />
<a href="clearsessions.php">Clear Sessions</a>


<br /><br />
<a href="session2.php">Another page</a>



<?php  
}else{
?>

<h1>You are not a valid user</h1>
Police are coming
<img src="http://66.media.tumblr.com/tumblr_lne9okrwkN1qdvbl3o1_500.jpg"> <br />

<?php
}
?>


</body>
</html>