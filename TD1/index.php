<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<?php
	$var1 = 6;
	$var2 = 1.3;
	$var3 = 'Variable 3';

	echo "$var1 + $var2"; 
	echo $var1 + $var2;
	echo $var1 + $var3;

    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'est pas mal non? <br/>';

    
?>
</body>
</html>