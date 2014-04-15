<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	
	<?php  
		function teilen($a){
			if($a==0){
				throw new Exception;
			} else {
				return 1/$a;
			}
		}
		try {
			$erg = teilen(5);
			echo "Ergebnis: $erg<br>";
			$erg = teilen(0);
			echo "Ergebnis: $erg<br>";
		} 
		catch (Exception $e) {
			echo "Ätsch. Exception abgefangen!<br>";
		}
	?>

</body>

</html>