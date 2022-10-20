<?php

function emptyInputSignup($firstname, $lastname, $username, $email, $password, $passwordrepeat) {
    $result;
    if (empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($passwordrepeat) || empty($passwordrepeat)) {
        $result = true;

    } else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function invalidEmail($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;

}

function pwdMatch($password, $passwordrepeat) {
    $result;
    if ($password !== $passwordrepeat) {
        $result = true;
    } 
    else {
        $result = false;
    }
    return $result;

}

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastname, $username, $email, $password) {
    $sql = "INSERT INTO users (firstname, lastname, username, email, pwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    // $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.php?error=none");
    exit();
}

function emptyInputLogin($username, $password) {
    $result;
    if (empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["pwd"];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    else if ($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["id"];
        $_SESSION["username"] = $uidExists["username"];
        header("location: ../index.php");
        exit();
    }
}

function createBooking($conn, $firstname, $lastname, $email, $checkin, $checkout, $roomtype, $people, $room, $offer) {
    $sql = "INSERT INTO booking (firstname, lastname, email, checkin, checkout, roomtype, people, room, offer) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../book.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sssssssss", $firstname, $lastname, $email, $checkin, $checkout, $roomtype, $people, $room, $offer);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../info.php");
    exit();
}

function emptyInputBooking($firstname, $lastname) {
    $result;
    if (empty($firstname) || empty($lastname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}