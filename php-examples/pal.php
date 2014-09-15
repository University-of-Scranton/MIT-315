<?php
session_start();
/**
DETERMINE IF A STRING IS A
PALINDROME
**/

if(isset($_POST['string'])){

	$string= $_POST['string'];
		
	//normalize the string
	$string= trim($string);

	if(strlen($string) == 0){
		print "You submitted a blank string, stupid.";
	}else{

		$_SESSION['guesses'][]= $string;

		$string= strtolower($string); 
		$string= str_ireplace(" ", "", $string); 

		$array= str_split($string);

		$reverse= "";

		while(count($array)>0){
			$reverse.= array_pop($array);
		}

		if($reverse == $string){
			print "<p>{$_POST['string']} is a Pal!!!!!1111oneoneone</p>";
		}else{
			print "<p>{$_POST['string']} is not a pal here, budday.</p>";
		}
	}
}

	print_r($_SESSION['guesses']);

?>

<form method="post">
	<input type="text" name="string" value="<?php echo $_POST['string']; ?>"/>
	<input type="submit" name="submit" value="Doo It." />
</form>