<?php
session_start();
require('../Model/db.php');
$item_id = $_SESSION['item_id'];
$sql = "update todos set isdone='0' where id='$item_id'";
$results = runQuery($sql);
header("Location: ../View/todo.php");
?>