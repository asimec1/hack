<?php
	if(!empty($_POST) && !empty($_FILES)){
		if ($_FILES["file"]["error"] > 0) {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		} else {
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
			$ext = strtolower(strrchr($_FILES["file"]["name"], "."));
			echo "Extension: " . $ext . "<br>";
			if ($ext == '.jpg' || $ext == '.png') {
				echo move_uploaded_file($_FILES["file"]["tmp_name"], $_FILES["file"]["name"]);
			}
			echo "Stored in: " . $_FILES["file"]["name"];
		}
	}
?>

<form action="index.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file" id="file"><br>
	<input type="submit" name="submit" value="Submit">
</form>