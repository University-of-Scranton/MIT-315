<?php
/******
Instructions: Create a Number Guessing game. 
Assign a number to a variable and ask the user to enter a guess.
If the Guess is correct, say so. 
If it is not, say it is not and then print out the correct answer
********/

session_start();

function guess_check($guess, $answer){
	$right= false;
	if(in_array($guess, $_SESSION['guesses'])){
		print "<h3>You already guessed $guess!</h3>";
	}else if($guess > $answer){
		print "<h3>$guess was a too high. Try again!</h3>";
	}else if($guess < $answer){
		print "<h3>$guess was too low. Try again!</h3>";
	}else{
		print "<h3>Nice work! $guess is correct!</h3>";
		$right= true;
	}

	return $right;
}


?>

<!DOCTYPE html>

<html>

<head>
	<title>Guess a Number</title>
</head>

<body>

<?php

if(isset($_POST['new_game'])){
	session_destroy();
}

if(!isset($_SESSION['number'])){
	$_SESSION['number']= rand(1,20);
}


if(isset($_POST['guess'])){
	$right= guess_check($_POST['guess'], $_SESSION['number']);
	$_SESSION['guesses'][]= $_POST['guess'];
}


?>

<?php if($right){ ?>
<form method="post">
	<p><input type="submit" name="new_game" value="Play Again?" /></p>
</form>
<?php } else { ?>

<p>Please guess a number between 1 and 20</p>
<form method="post">
		<p><input type="text" placeholder="Guess?" name="guess" /></p>
		<p><input type="submit" name="submit" value="submit" /></p>
</form>

<?php } ?>

</body>

</html>