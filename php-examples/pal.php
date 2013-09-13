<?php

/**
DETERMINE IF A STRING IS A
PALINDROME
**/

if(isset($_POST['string'])){

	$string= $_POST['string'];
		
	$string= trim($string); 
	$string= strtolower($string); 
	$string= str_ireplace(" ", "", $string); 

	$array= str_split($string);

	$reverse= "";

	while(count($array)>0){
		$reverse.= array_pop($array);
	}

	if($reverse == $string){
		print "<p>It's a Pal!!!!!1111oneoneone</p>";
	}else{
		print "<p>There's no pal here, budday.</p>";
	}

}

?>

<form method="post">
	<input type="text" name="string" />
	<input type="submit" name="submit" value="Doo It." />
</form>