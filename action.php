<?php
session_start();
require "db.php" ;

$fname= $_GET["fname"];
$lname= $_GET["lname"];
$email= $_GET["email"];
$phone= $_GET["phone"];
$birthday= $_GET["birthday"];
$gender= $_GET["gender"];
$password= $_GET["password"];

$_SESSION['fname'] = $fname;
$_SESSION['lname'] = $lname;
$_SESSION['email'] = $email;
$_SESSION['phone'] = $phone;
$_SESSION['birthday'] = $birthday;
$_SESSION['gender'] = $gender;
$_SESSION['password'] = $password;


$sql = "select * from jm775.accounts where email = '$email'";
$results = runQuery($sql);
if (count($results) > 0) {
	echo "Email is taken";
} else {

	$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password');";
	$results = runQuery($sql);
	echo 'User with email: ' . $email . ' has been created.';

}

/*
$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password');";
$results = runQuery($sql);
echo 'User with email: ' . $email . ' has been created.';*/
?>