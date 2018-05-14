<?php

if(!empty($_POST)){
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
