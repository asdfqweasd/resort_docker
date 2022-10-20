<?php
    $servername = "mysql";
    $username = "php";
    $password = "php";
    $dbname = "cloud_computing";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS `Contact` (
        `name` varchar(255) NOT NULL,
        `state` text NOT NULL,
        `postcode` int(255) NOT NULL,
        `phone` int(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `age` varchar(255) NOT NULL,
        `favorite` text NOT NULL,
        `comment` text NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?>
