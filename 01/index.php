<?php
header("X-XSS-Protection: 0");
if(!empty($_POST)){
	echo $_POST['input'];
}

?>
<form action="index.php" method="POST">
	<input type="text" name="input">
	<input type="submit" value="Submit">
</form>

<!--  Zloćudni kod
<input type="text" name="input">
<script>alert("test");</script>
-->
