<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>To-do Sign-Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
</html>
<?php
session_start();
require "../Model/db.php" ;

$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$birthday= $_POST["birthday"];
$gender= $_POST["gender"];
$password= $_POST["password"];

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
	require "../View/login.php";

}

/*
$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$email', '$fname', '$lname', '$phone', '$birthday', '$gender', '$password');";
$results = runQuery($sql);
echo 'User with email: ' . $email . ' has been created.';*/
?>