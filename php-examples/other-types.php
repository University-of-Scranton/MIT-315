<!DOCTYPE html>

<html>

<head>
	<title>PHP Examples: Other Types</title>
</head>

<body>

	<h1>PHP Examples</h1>

	<?php	

	
	$int= 42;
	$float= 42.3;
	
	print "<p>$int</p>";
	print "<p>$float</p>";
	
	$bool = false;
	
	print "<p>$bool</p>";
	
	if($bool){
		print "true!";
		
	}else{
		
		print "false!";
	}
	
	$array = array("red", "green", "blue");
?>

<pre>
		<?php print_r($array); ?>
	</pre>
	
<?php
	$assocArray= array("name" => "Joe",
						"age" => "27",
						"profession" => "Nerd"
				);	
	?>
	
	<pre>
		<?php print_r($assocArray); ?>
	</pre>
	
	
	<p><a href="operatores.php">Next: Operators</a></p>

</body>

</html>