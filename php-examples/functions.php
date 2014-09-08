<!DOCTYPE html>

<html>

<head>
	<title>Forms!</title>
</head>

<body>

<?php

	function print_message(){
		print "<p>Hey! You totally CAN do that on television!</p>";
	}
	
	
	function personal_message($name="Admin", $age){
		print "<p>Hello, $name. Have a great $age birthday!</p>";
	}
	
	
	function add($x,$y){
		$z= $x+$y;

		return $z;
	}

?>


<h3>First Function: <code>print_message()</code></h3>

<?php
	for($i=0; $i < 7; $i++){
		print_message();
	}
?>



<h3>Second Function: <code>personal_message()</code></h3>

<?php

	personal_message(29);
	
	personal_message(54);
	
	$person= "Jane";
	
	personal_message($person);

	personal_message();

?>

<h3>Third Function: <code>add()</code></h3>

<?php

	print_message();
	$result= add(1,2);

	print "<p>$result</p>";
	
	$a= 65;
	$b= 47;
	
	print add($a,$b);

	print add(1,2,3);
?>

	
	<p><a href="forms-2.php">Next: Forms &amp; Functions Part 2</a></p>

</body>

</html>