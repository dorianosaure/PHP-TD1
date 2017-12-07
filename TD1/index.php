<?php
	include 'fonction.php';
	include 'calculator.php';
	start_page('titre');
	$var1 = 6;
	$var2 = 1.3;
	$var3 = 'Variable 3';

	echo "$var1 + $var2"; 
	echo $var1 + $var2;
	echo $var1 + $var3;

    echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
    echo 'C\'est pas mal non? <br/>';    
    end_page();
?>