<?php
/*
$conn = mysqli_connect("localhost", "root", "", "login");

if (!$conn) {
    echo "Connection Failed";
}*/


$server = 'localhost';
$username = 'root';
$password = '';
$connection = mysqli_connect($server, $username, $password) or die("not connected");


?>