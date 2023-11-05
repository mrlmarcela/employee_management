<?php
$servername = "localhost";
$database = "employee_management";
$username = "root";
$password = "root";

$DB = mysqli_connect($servername, $username, $password, $database);

if (!$DB) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";