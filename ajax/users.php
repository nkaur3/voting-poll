<?php
include('../includes/config.php');
$user = $_GET['user'];
$query="select * from users where username='$user'";
$result1 = $mysqli->query($query) or die($mysqli->error.__LINE__);
//
/*if($result=="")
{
	echo ("0");
}
else
{
	echo ("1");
}*/

/*if($result1->num_rows > 0) {
	echo "You have voted!";
}
else
	echo $user;*/

if($result1->num_rows > 0) {
	$row = $result1->fetch_assoc();
	$id = $row['id'];
}

$query2="select title from posts where id='$id'";
$result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
if($result2->num_rows > 0) {
	$row = $result2->fetch_assoc();
	echo $row['title'];
}
?>