<!DOCTYPE html>

<html>

<head>
	<title>Forms &amp; Functions Part 2</title>
</head>

<body>

<?php

function print_array($a){

	print "<pre>";
	print_r($a); 
	print "</pre>";
}


print_array($_POST);

?>

	<h1>Hidden Values!</h1>

	<?php
	
	if(isset($_POST['name'])){

		

		$name= ucfirst($_POST['name']);
		$age= $_POST['age'];
		
		echo "<h2>Hello, $name</h2>";
		echo "<h3>Hidden Age Value: $age</h3>";
	}
	
	
	?>

	<form method="post">
		<p><input type="text" placeholder="Name?" name="name" /></p>
		<input type="hidden" name="age" value="27" />
		<p><input type="submit" name="submit" value="submit" /></p>
	</form>
	
<hr/>

	<h1>String Functions</h1>
	<?php
		print_array(explode("Hello World!", " "));
	?>
</body>

</html>