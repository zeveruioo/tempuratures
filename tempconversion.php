<html>
<body>
	<?php 
	$f = $_GET["name"]; 
	$c = (5/9) * ($f-32);
	
	?> 
	<?php echo $f ?> fahrenheit = <?php echo $c ?> celsius
</body>
</html>