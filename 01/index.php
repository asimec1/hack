<?php
header("X-XSS-Protection: 0");
if(!empty($_POST)){
	echo $_POST['input'];
	echo htmlspecialchars($_POST['input']);
}

// <input />
// location.href

?>
<form action="index.php" method="POST">
	<input type="text" name="input" />
	<input type="submit" value="Submit">
</form>
