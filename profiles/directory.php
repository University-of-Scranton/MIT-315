<?php

require_once("Database.php");

function treat_line($line, $d=":"){
	$line= explode($d, $line);
	return trim($line[1]);
}

function print_array($a){
	print "<pre>";
	print_r($a);
	print "</pre>";
}

$file= "db.txt";
$fp = fopen($file, "r");
$info= array();

while($line = fgets($fp)){
	$info[]= $line;
}

$host= treat_line($info[1]);
$database= treat_line($info[2]);
$user= treat_line($info[3]);
$pw= treat_line($info[4]);

$db= new Database($database, $user, $pw, $host);
$res= $db->query("SELECT id,first_name,last_name FROM people");

$people= $db->resToArray($res);

foreach($people as $person){
	print "<h1><a href=\"#\">". $person['first_name'] . " ". $person['last_name']." (ID: ". $person['id'] .")</a></h1>";
}


?>
