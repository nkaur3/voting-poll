<?php
include('../includes/config.php');
session_start();
//$user = $_SESSION['user'];
$id = $_GET['id'];
$votes = $_GET['votes'];
$user = $_GET['user'];
$query="update posts set votes='$votes' where id='$id'";
$query1="INSERT INTO `users` (`username`, `id`) VALUES('$user', '$id')";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
$result2 = $mysqli->query($query1) or die($mysqli->error.__LINE__);// $affected = $mysqli->affected_rows;
?>