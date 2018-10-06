<?php
//starting session
session_start();
//including db handler
include 'databasehandler.php';

//initiating variables and checking if the superGlobals are assigned
$uid = $_POST['uid'];
$pass = $_POST['pass'];

//SELECT query from the table and fetching result by connecting to the db
$sql = "SELECT * FROM user WHERE uid='$uid' AND pass='$pass'";

$result = $connect->query($sql);

if (!$row = $result->fetch_assoc()) {
    echo "Your username or password is incorrect!";
} else {
    $_SESSION['id'] = $row['id'];
}
     header("location:main.php");
?>