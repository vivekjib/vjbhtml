<?php
	$b=$_POST["b"];
	$a=1; 
		while ( $i=1) {
		$a=($a+$b/$a)/2;
		if (abs($a-$b/$a)<=0.000000001){ 
			echo "$a";
			break;
		}
		else
		continue;
	}
	?>
