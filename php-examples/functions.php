<!DOCTYPE html>

<html>

<head>
	<title>Forms!</title>
</head>

<body>

<?php

	function print_message(){
		print "<p>Hey! You can't do that on television!</p>";
	}


	function personal_message($name){
		print "<p>Hello, $name</p>";
	}


	function add($x,$y){
		$z= $x+$y;

		return $z;
	}



?>

<h3>Third Function: <code>add()</code></h3>

<?php
	$result= add(1,2); //1 + 2

	print "<p>$result</p>";

	$a= 65;
	$b= 47;

	print add($a,$b);
?>


<h3>First Function: <code>print_message()</code></h3>

<?php print_message(); ?>



<h3>Second Function: <code>personal_message()</code></h3>

<?php

	personal_message("Joe");

	personal_message("Bob");

	$person= "Jane";

	personal_message($person);

?>


	<p><a href="forms-2.php">Next: Forms &amp; Functions Part 2</a></p>

</body>

</html>
