<!DOCTYPE html>

<html>

<head>
	<title>PHP Examples: Variables</title>
</head>

<body>

	<h1>PHP Examples</h1>

	<?php
	
	if(isset($_POST['name'])){
		$name= $_POST['name'];
		
		echo "<h2>Hello, $name</h2>";
	}
	
	$age= 27;
	
	echo "<p>$age</p>";
	
	$age= $age+7;
	
	echo "<p>$age</p>";
	
	$ageLimit= 10;
	
	$age= $age + $ageLimit;
	
	echo "<p>$age</p>";
	
	
	$message= "Variables don't just have to be numbers!";
	
	echo "<p>$message</p>";
	
	
	?>
	
	
	<form method="post">
		<p><input type="text" placeholder="Name?" name="name" /></p>
		<p><input type="submit" name="submit" value="submit" /></p>
	</form>
	
	
	<p><a href="strings.php">Next: Strings</a></p>

</body>

</html>