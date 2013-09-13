<?php

function increment($range, $limit){
	$i= 0;	

	while($i <= $limit){
		print "<p>$i</p>";
		$i= $i+$range;
	}
}

if(isset($_POST['x']) && isset($_POST['y'])){
	$x= $_POST['x'];
	$y= $_POST['y'];

	increment($x,$y);
}


?>

<form method="post">
	Increment by: <input type="text" name="x" /><br/>
	Until we get to: <input type="text" name="y" /><br/>
	<input type="submit" name="submit" value="Go!" />
</form>