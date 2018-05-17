<?php

if(!empty($_POST)){
	$dopusteno = array('volvo', 'saab', 'mercedes', 'audi');
	if (!in_array($_POST['input'], $dopusteno, true)) {
		echo "error!";
		die;
	}
	
	echo $_POST['input'];
}

?>
<form action="index.php" method="POST">
	<select name="input">
	  <option value="volvo">Volvo</option>
	  <option value="saab">Saab</option>
	  <option value="mercedes">Mercedes</option>
	  <option value="audi">Audi</option>
	</select>
	<input type="submit" value="Submit">
</form>
