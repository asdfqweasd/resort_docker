<?php

if(isset($_POST['submit'])){
    
    $firstname   = $_POST['firstname'];
    $lastname    = $_POST['lastname'];
    $username    = $_POST['username'];
    $email       = $_POST['email'];
    $password    = $_POST['password'];
    $passwordrepeat    = $_POST['passwordrepeat'];

    echo $password
    echo $passwordrepeat
    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputSignup($firstname, $lastname, $username, $email, $password, $passwordrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if (pwdMatch($password, $passwordrepeat) !== false) {
        header("location: ../signup.php?error=passworddontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $firstname, $lastname, $username, $email, $password);

} else {
    header("location: ../signup.php");
    exit();
}
