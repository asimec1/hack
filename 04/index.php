<?php
// anything' OR 'x'='x
// drop
if(!empty($_POST)){
	
	$conn = mysqli_connect("localhost", "root", "Mysql123!!!", "hack");
 
	// check connection
	if (mysqli_connect_errno()) {
	  trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
	}

	$username = $_POST['username'];
	
	$sql = "SELECT * FROM users WHERE username = '$username'";
	
	$rs=$conn->query($sql); 
	if($rs === false) {
	  trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
	} else {
		$rs->data_seek(0);
		while($row = $rs->fetch_assoc()){
			echo "username " . $row['username'] . '<br>';
			echo "password " . $row['password'] . '<br>';
		}
	}
	
}

?>

<form action="index.php" method="POST">
	<input type="text" name="username" />
	<input type="submit" value="Submit">
</form>
