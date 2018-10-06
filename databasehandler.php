<?php


$connect = mysqli_connect("localhost", "root", "", "logintest");

if (!$connect) {
    die("Connection failed: ".mysqli_connect_error());
    }
?>