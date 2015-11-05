<?php

	if(isset($_POST['name'])){
		$name= $_POST['name'];

		echo "<h2>Hello, $name</h2>";
	}


	if(isset($_GET['age'])){
		$age= $_GET['age'];

		echo "<h2>Hello, $age</h2>";
	}


	?>
