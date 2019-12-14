<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$month = date('d');
		for ($i=1; $i <= 31; $i++) { 

			if ($i == $month) {
				echo '<div style = "background-color: red; display: inline;">' . 
				$i . ' ' . '</div>';
			} else {
				echo $i . ' ' ;
			}

			if ($i % 7 == 0) {
				echo "<br>";
			}
		}
	?>
</body>
</html>