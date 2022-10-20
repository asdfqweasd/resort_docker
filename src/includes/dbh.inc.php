<?php

$serverName = "mysql";
$username = "php";
$password = "php";
$dbname = "cloud_computing";

$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
