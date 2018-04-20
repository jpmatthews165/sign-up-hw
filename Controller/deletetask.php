<?php
session_start();
require('../Model/db.php');
$item_id = $_SESSION['item_id'];
$sql = "delete from todos where id = '$item_id'";
$results = runQuery($sql);
header("Location: ../View/todo.php");
?>