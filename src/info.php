<?php
    include_once 'header.php';
    require_once 'includes/dbh.inc.php';
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/info.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">   

</head>

<body>
    <h2>BOOKING INFORMATION</h2>

    <!-- <table>
        <tr>
            <th> first name </th>
            <th> last name </th>
            <th> email </th>
        </tr>
        <tbody>
            <td> sample </td>
            <td> sample </td>
            <td> sample </td>
        </tbody>
    </table> -->
    <?php
        $sql = "SELECT * FROM booking;";


        echo '
            <table>
                <tr>
                    <th> <font face="Arial">First Name</font> </th> 
                    <th> <font face="Arial">Email</font> </th> 
                    <th> <font face="Arial">Duration</font> </th> 
                    <th> <font face="Arial">Room type</font> </th> 
                    <th> <font face="Arial">No. of room</font> </th> 
                    <th> <font face="Arial">Offer</font> </th> 
                </tr>
            </table>
            <hr>';

        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                    $firstname= $row["firstname"];
                    $lastname = $row["lastname"];
                    $email = $row["email"];
                    $checkin     = $row['checkin'];
                    $checkout    = $row['checkout'];
                    $roomtype    = $row['roomtype'];
                    $people      = $row['people'];
                    $room        = $row['room'];
                    $offer       = $row['offer'];
                    $checkindate = new DateTime($checkin);
                    $checkoutdate = new DateTime($checkout);
                    $day        = date_diff($checkindate,$checkoutdate);


                echo '<table> 
                        <tr>
                            <td>'.$firstname.'</td> 
                            <td>'.$email.'</td> 
                            <td>'.$day->format('%d days').'</td> 
                            <td>'.$roomtype.'</td> 
                            <td>'.$room.'</td> 
                            <td>'.$offer.'</td> 
                        </tr>
                    </table>';
            }

        }
    ?>

</body>
