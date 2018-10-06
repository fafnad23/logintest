<?php
session_start();

include 'databasehandler.php';
$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pass = $_POST['pass'];

$sql = "INSERT INTO user (first, last, uid, pass)
 VALUES ('$first','$last','$uid','$pass')";
$result = mysqli_query($connect, $sql);

header("location:main.php");
?>