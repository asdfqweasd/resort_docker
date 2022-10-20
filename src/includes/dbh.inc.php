<?php

$serverName = "mysql";
$db_user = "php";
$db_pass = "php";
$db_name = "cloud_computing";

$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
