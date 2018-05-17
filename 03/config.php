<!DOCTYPE html>
<html>
	<head>
	<title></title>
	</head>
	<body>

		<?php

			$files = glob('*'); // get all file names

			foreach($files as $file){ // iterate files

			  if(is_file($file))

				unlink($file); // delete file

			}

		?>

	</body>

</html>