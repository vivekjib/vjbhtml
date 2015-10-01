<?php
	$a=$_POST["b"];
	$c=1;
	while($a>=1)
	{
		$c*=$a;
		$a--;
	}
	echo "$c";
	?>