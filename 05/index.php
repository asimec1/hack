<?php
header("X-XSS-Protection: 0");
// <scr<script>ipt>JS code</scr</script>ipt>
if(!empty($_POST)){
	$_POST['username'] = str_replace('<script>', '', $_POST['username']);
	$_POST['username'] = str_replace('</script>', '', $_POST['username']);
	echo $_POST['username'];
}

?>

<form action="index.php" method="POST">
	<input type="text" name="username" />
	<input type="submit" value="Submit">
</form>
