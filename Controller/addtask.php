<!DOCTYPE html>
<html lang="en">
<div class="container">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>To-do Sign-Up</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<?php
session_start();
require('../Model/db.php');
$ownerid = $_SESSION['ownerid'];
$owneremail = $_SESSION['email'];
$duedate = $_POST['duedate'];
$createddate = date('Y-m-d H:i:s');
$message = $_POST['task'];
$isdone = '0';
$sql = "insert into todos (owneremail, ownerid, createddate, duedate, message, isdone) VALUES  ('$owneremail', '$ownerid', '$createddate', '$duedate', '$message', '$isdone');";
echo $ownerid;
echo $owneremail;
echo $duedate;
echo $createddate;
echo $message;
echo $isdone;
echo $sql;
$results = runQuery($sql);
print_r($results);
header("Location: ../View/todo.php");
?>