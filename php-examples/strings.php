<!DOCTYPE html>

<html>

<head>
	<title>PHP Examples: Strings</title>
</head>

<body>

	<h1>PHP Examples</h1>

	<?php	

	
	//notice the single quote in the double quote!
	
	echo '<p>You can also have "double quotes" in single quotes!</p>';
	
	echo '<p>Finally, you can do escape characters: Single quote won\'t break anything.</p>';
	
	$message= "Variables don't just have to be numbers!";
	
	echo "<p>Double Quote Example: $message</p>";
	
	echo '<p>Single Quote Example: $message</p>';
	
	echo "<p>Double Quotes, Mind Blown: \$message</p>";
	
	?>
	
	
	<form method="post">
		<p><input type="text" placeholder="Name?" name="name" /></p>
		<p><input type="submit" name="submit" value="submit" /></p>
	</form>
	
	
	<p><a href="other-types.php">Next: Other Types</a></p>

</body>

</html>