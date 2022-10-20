

<?php

if(isset($_POST['submit'])){
    
    $firstname   = $_POST['firstname'];
    $lastname    = $_POST['lastname'];
    $email       = $_POST['email'];
    $checkin     = $_POST['checkindate'];
    $checkout    = $_POST['checkoutdate'];
    $roomtype    = $_POST['roomtype'];
    $people      = $_POST['numberofpeople'];
    $room        = $_POST['numberofroom'];
    $offer       = $_POST['offer'];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if (emptyInputBooking($firstname, $lastname) !== false) {
        header("location: ../book.php?error=emptyinput");
        exit();
    }

    createBooking($conn, $firstname, $lastname, $email, $checkin, $checkout, $roomtype, $people, $room, $offer);

} else {
    header("location: ../book.php");
    exit();
}
