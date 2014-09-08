<!DOCTYPE html>

<html>

<head>
	<title>PHP Examples: Control Structures</title>
</head>

<body>

	<h2>if/else if/else</h2>

	<?php	
		$num= 10;
		
		if($num < 10){
			print '$num is greater than or equal to 10!<br/>';
		}else{
			print "$num is not greater than or equal to 10!<br/>";
		}
		
		
		
		$bool= false;
		$a= !$bool; //false
		
		if($bool && $a){
			print "This will not print.<br/>";
		}else if($bool || $a){
			print "This will print<br/>";
		}else{
			print "This will not print.<br/>";
		}

		//case/switch
		$name= "Joe";

		switch ($name){
			case "Joe":
				print "Best<br/>";
				break;
			case "Erin":
				print "Actually Best<br/>";
				break;
			default:
				print "Just OK<br/>";
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

		$array = array("red", "green", "blue", "pink", "purple", "yellow");
	
		foreach($array as $a){
			print "$a<br/>";
		}


		$people= array( "Joe" => 28,
						"Erin" => 23,
						"Phil" => 27,
						"Jenn" => 26,
						"Bob" => 54
			);

		foreach($people as $name => $age){
			print "<p>$name is $age years old.</p>";
		}

		reset($people);

		$dude= current($people);
		echo "this --> ". key($people);

		
	?>

<pre>
<?php var_dump($people); ?>
</pre>
	
	
	
	<p><a href="forms.php">Next: Forms</a></p>

</body>

</html>