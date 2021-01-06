<?php
$host = "localhost";
$name = "root";
$password = "";
$database = "john_database";
$db = mysqli_connect($host, $name, $password, $database)
or die("MySQL connection failed" . mysqli_connect_error());

$db = mysqli_connect($host, $name, $password, $database)
or die("error: " . mysqli_connect_error());
?>

