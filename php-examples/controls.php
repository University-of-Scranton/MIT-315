<!DOCTYPE html>

<html>

<head>
	<title>PHP Examples: Control Structures</title>
</head>

<body>

	<h2>if/else if/else</h2>

	<?php
		$num= 10;

		if($num >= 10){
			print "$num is greater than or equal to 10!<br/>";
		}else{
			print "$num is not greater than or equal to 10!<br/>";
		}



		$bool= true;
		$a= !$bool;

		if ($bool && $a){
			print "This will not print.<br/>";
		}else if($bool || $a){
			print "This will print<br/>";
		}else{
			print "This will not print.<br/>";
		}

	?>


	<h2>Loops: While, For, Foreach</h2>


	<h3>For Loop</h3>
	<?php

		for($i=0; $i<=10; $i++){
			print "for $i<br/>";
		}

	?>

	<h3>While Loop</h3>

	<?php
		$i= 0;

		while($i <= 10){
			print "while $i <br/>";
			$i++; //($i= $i+1)
		}
	?>

	<h3>Foreach Loop</h3>

	<?php
		$colors = array("red", "green", "blue", "pink", "purple", "yellow");

		$person_info = array( 'name' => 'Joe',
			'age' => '30',
			'job' => 'programmer',
			'hobby' => 'cigars'
		);
		foreach($person_info as $label => $attribute){
			print "$label - $attribute<br/>";
		}
	?>



	<p><a href="forms.php">Next: Forms</a></p>

</body>

</html>
