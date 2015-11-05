<?php

/**
DETERMINE IF A STRING IS A
PALINDROME
**/

if ( isset( $_POST['string'] ) ) {

	$string= $_POST['string'];
	echo '<p>Original, Submitted String: "' . $string . '"</p>';

	$string= trim($string);

	echo '<p>Trimmed String: "' . $string . '"</p>';

	$string= strtolower($string);

	echo '<p>Lowercase String: "' . $string . '"</p>';

	$string= str_ireplace(" ", "", $string);

	echo '<p>replaced String: "' . $string . '"</p>';

	$array= str_split($string);

	var_dump( $array );

	$reverse= "";

	while( count( $array ) > 0 ) {
		$popped = array_pop($array);
		echo "<p>$popped</p>";

		$reverse .= $popped;

		echo "<p>$reverse</p>";
		var_dump( $array );
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
