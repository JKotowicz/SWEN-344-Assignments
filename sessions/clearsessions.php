<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>


<h3>Sessions are cleared</h3>

<?php
// Set session variables
$_SESSION["username"] = "";

?>

<a href="index.php">Return to login.</a>


</body>
</html>