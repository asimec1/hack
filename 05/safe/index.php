<?php
header("X-XSS-Protection: 0");
// <script>alert("hack")</script>
if(!empty($_POST)){
	$_POST['username'] = str_replace('<script>', '', $_POST['username']);
	$_POST['username'] = str_replace('</script>', '', $_POST['username']);
}

?>

<form action="index.php" method="POST">
	<input type="text" name="username" />
	<input type="submit" value="Submit">
</form>
