<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$random_broj = mt_rand(1, 25);
		$broj1 = $broj2 = $broj3 = $broj4 = $broj5 = 0;
		do {
			$broj1 = mt_rand(1, 25);
			$broj2 = mt_rand(1, 25);
			$broj3 = mt_rand(1, 25);
			$broj4 = mt_rand(1, 25);
			$broj5 = mt_rand(1, 25);
			//petlja ce se nastavljat sve dok nisu svi brojevi razliciti XD
		} while ($broj1 == $broj2 || $broj1 == $broj3 || $broj1 == $broj4 || $broj1 == $broj5 || 
			$broj2 == $broj3 || $broj2 == $broj4 || $broj2 == $broj5 || 
			$broj3 == $broj4 || $broj3 == $broj5 || 
			$broj4 == $broj5);
		//ispis korisnickog tehnicki "unesenog" broja
		echo $random_broj . "<br>";
		// provjera podudarnosti i ispisivanje crvenom bojom
		if ($random_broj == $broj1) {
			echo '<div style = "color: red; display: inline;">' . $broj1 . '</div>' . ' ';
		} else {echo $broj1 . " ";}
		if ($random_broj == $broj2) {
			echo '<div style = "color: red; display: inline;">' . $broj2 . '</div>' . ' ';
		} else {echo $broj2 . " ";}
		if ($random_broj == $broj3) {
			echo '<div style = "color: red; display: inline;">' . $broj3 . '</div>' . ' ';
		} else {echo $broj3 . " ";}
		if ($random_broj == $broj4) {
			echo '<div style = "color: red; display: inline;">' . $broj4 . '</div>' . ' ';
		} else {echo $broj4 . " ";}
		if ($random_broj == $broj5) {
			echo '<div style = "color: red; display: inline;">' . $broj5 . '</div>' . ' ';
		} else {echo $broj5 . " ";}
	?>
</body>
</html>