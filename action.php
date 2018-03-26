<?php
require "db.php" ;

$fname= $_GET["fname"];
$lname= $_GET["lname"];
$email= $_GET["email"];
$phone= $_GET["phone"];
$birthday= $_GET["birthday"];
$gender= $_GET["gender"];

$sql = "insert into accounts (email, fname, lname,phone, birthday,
		gender) values ('$fname', '$lname', '$email', '$phone', '$birthday', '$gender');";
$results = runQuery($sql);
header("Location: successsignup.php");

?>