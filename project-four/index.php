<?php
/******
Instructions: Create a Number Guessing game. 
Assign a number to a variable and ask the user to enter a guess.
If the Guess is correct, say so. 
If it is not, say it is not and then print out the correct answer

**Make this a HW assignment. Do something different in class
to demonstrate input and if statements***


Next steps for assignment:

Randomly generate number. 
Use buttons to ask the user to play with a new number
Save wrong guesses in array. 
Make guess check a function


********/


function guess_check($guess, $answer){
	if($guess > $answer){
		print "<h3>$guess was a too high. Try again!</h3>";
	}else if($guess < $answer){
		print "<h3>$guess was too low. Try again!</h3>";
	}else{
		print "<h3>Nice work! $guess is correct!</h3>";
	}
}


?>

<!DOCTYPE html>

<html>

<head>
	<title>Guess a Number</title>
</head>

<body>

<?php

if(!isset($_POST['number'])){
	$number= rand(1,20);
}else{
	$number= $_POST['number'];
}


if(isset($_POST['guess'])){

	guess_check($_POST['guess'], $number);
}


?>


<p>Please guess a number between 1 and 20</p>

<form method="post">
		<p><input type="text" placeholder="Guess?" name="guess" /></p>
		<input type="hidden" name="number" value="<?php print $number; ?>" />
		<p><input type="submit" name="submit" value="submit" /></p>
</form>


</body>

</html>