<!DOCTYPE html>

<html>

<head>
	<title>PHP Examples: Operators</title>
</head>

<body>

	<h2>Arithmetic Operators</h2>

	<?php	

		$num= 10;
		print $num + 5; //15
		print $num - 5; //5
		print $num * 5; //50
		print $num / 5; //2
		print $num % 5; //0
		print $num % 7; //3
	
	?>
	
	
	<h2>String</h2>
	
	<?php
		$msg= "Hello World!";
		
		print "<p>A lot of programmers with write ". $msg ." as their first program</p>";
	?>
	
	
	<h2>Comparison</h2>
	
	<?php
		$bool= 10 == 10; //true
		$bool= 10 == "10"; //true
		$bool2= 10 == 20; //false
		$bool3= 10 === "10"; //false
		
		$notEqual= 10 != 20; //true
		$greaterThan= 10 > 20; //false
		$lessThan= 10 < 20; //true
		$gtoet= 10 >= 10; //true
		$ltoet= 10 <= 20; //true 
	?>
	
	
	<h2>Logical</h2>
	
	<?php
		/* Using Our Values from Above */
		
		$a= !$bool; //false
		$b= !$bool2; //true
		$c= $a && $b; //false
		$d= $a || $b; //true 
	
	?>
	
	<p><a href="controls.php">Next: Control Structures</a></p>

</body>

</html>