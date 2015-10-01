<html>
	<head>
		<title>
		table of 100 nos. is --
		</title>
	</head>
	<body>
		<?php
		echo "<table border='3' width='50%' align='center' text-align='center' cellpadding='10px' vertical-align='middle'>";
		for ($i=0; $i <=9; $i++) {
			echo "<tr>"; 
		for ($j=0; $j <=9; $j++) { 
			$res=$j*10+$i+1;
			echo "<td>$res</td>";
		}
			echo "</tr>";}
		echo "</table>";
			?>
	</body>
</html>