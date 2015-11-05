<?php
/**
DETERMINE IF A STRING IS A
PALINDROME
**/
session_start();

if ( isset( $_POST['string'] ) ) {
	$string= $_POST['string'];
	$_SESSION['last_guess'] = $string;
	$string= trim($string);
	$string= strtolower($string);

	$string= str_ireplace(" ", "", $string);
	$array= str_split($string);

	var_dump( $array );

	$reverse= "";

	while( count( $array ) > 0 ) {
		$popped = array_pop($array);
		$reverse .= $popped;
	}

	if($reverse == $string){
		print "<p>It's a Pal!!!!!1111oneoneone</p>";
	}else{
		print "<p>There's no pal here, budday.</p>";
	}

}

?>
<?php if( isset( $_SESSION['last_guess'] ) ) { ?>
<p>The last string you tried was: <?php echo $_SESSION['last_guess']; ?>
<?php } ?>
<form method="post">
	<input type="text" name="string" />
	<input type="submit" name="submit" value="Doo It." />
</form>
