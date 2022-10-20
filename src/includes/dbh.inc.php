<?php

$serverName = "mysql";
$username = "php";
$pwd = "php";
$dbname = "cloud_computing";

$conn = mysqli_connect($serverName, $username, $pwd, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
