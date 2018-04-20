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
</html>

<?php
session_start();
require('../Model/db.php');
$item_id = $_SESSION['item_id'];
$duedate = $_POST['duedate'];
$message = $_POST['task'];
$sql = "update todos set duedate='$duedate', message='$message' where id='$item_id'";
echo $sql;
$results = $conn->Query($sql);
print_r($results);
header("Location: ../View/todo.php");
?>