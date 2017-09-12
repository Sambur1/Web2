<!DOCTYPE html>
<html>
<head>
	<title>Fuz-Ion</title>
	<link href="style.css" rel="stylesheet">
	<script src="scripts.js"></script>
</head>
<body>

	<header>

	</header>
<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="First">
  <br>
  Last name:<br>
  <input type="text" name="lastname" value="Last">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

<form action="info.php" method="post">
	<input type="text" name="test">
	<input type="submit">
</form>

</form>



<?php

echo "utan filter " . $_GET["test"];

$test = htmlentities($test);
$test = addslashes($test);
echo "med filter: " . $test;


?>
</body>

</html>