<?php

$servername = "db";
$username = "ezekiel";
$password = "admin";
$db = "database";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
