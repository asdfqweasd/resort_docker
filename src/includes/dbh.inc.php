<?php

$serverName = "mysql";
$username = "php";
$password = "php";
$dbname = "cloud_computing";

$conn = mysqli_connect($serverName, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
