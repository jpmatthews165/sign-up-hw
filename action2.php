<?php
require "db.php" ;

$email= $_GET["email"];
$password= $_GET["password"];


$sql = "select * from jm775.accounts where email = '$email'";
$results = runQuery($sql);
if (count($results) < 1) {
	echo "Email is incorrect";
} else {

	$sql = "select * from jm775.accounts where email = '$email' AND password = '$password'";
	$results = runQuery($sql);
	if (count($results) < 1) {
		echo "Passowrd is incorrect";
	} else {
		$fname=$results[0]['fname'];
		$lname=$results[0]['lname'];
		echo "Welcome ".$fname." ".$lname;
	}

}

?>