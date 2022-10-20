<?php
    include_once 'header.php';
?>

<head>
    <meta charset="utf-8">
    <title> Book Now</title>
    <link rel="stylesheet" href="css/book.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src='js/jquery-3.5.1.min.js'></script>
</head>

<section id='top' style="background-image: url('img/maldives2.png')">
    <h3>Scroll Down</h3>
    <span></span>
</section>
        
<section class="booking">
    <div class='container-right'>
        <div class='frame'>
            <img src="img/room1.jpg" alt="Deluxe Sea view room">
            <h2>Deluxe Sea view room</h2>
            <p>$ 200/night</p>
        </div>
                
        <div class='frame'>
            <img src="img/room_2.jpg" alt="Underwater room">
            <h2>Underwater room</h2>
            <p>$ 280/night</p>
        </div>
               
        <div class='frame'>
            <img src="img/resort.jpeg" alt="Overwater resort">
            <h2>Overwater resort</h2>
            <p>$ 500/night</p>
        </div>
    </div>
    <div class="container">
        <form id="form" action="includes/book.inc.php" method='post'>
            <div class='input-pack'>
                <label for='name' class='input-label'>First Name</label>
                <input type='text' class='input-text' id='name' name='firstname' required>
            </div>
            <div class='input-pack'>
                <label for='name' class='input-label'>Last Name</label>
                <input type='text' class='input-text' id='name' name='lastname' required>
            </div>
            <div class='input-pack'>
                <label for='email' class='input-label'>Email</label>
                <input type='email' class='input-text' id='email' name='email' required>
            </div>
            <div class='input-pack'>
                <label for='check-in' class='input-label'>Check in</label>
                <input type='date' class='input-text' id='check-in' name='checkindate' required>
            </div>
            <div class='input-pack'>
                <label for='check-out' class='input-label'>Check out</label>
                <input type='date' class='input-text' id='check-out' name='checkoutdate' required>
            </div>
            <div class='input-pack'>
                <label for='room-type' class='input-label'>Room Type</label>
                <select class='options' id='room-type' name='roomtype' required>
                    <option value="0"></option>
                    <option value="Deluxe Sea View Room">DELUXE SEA VIEW</option>
                    <option value="Underwater Room">UNDERWATER ROOM</option>
                    <option value="Overwater Resort">OVERWATER RESORT</option>
                </select>
            </div>
            <div class='input-pack'>
                <label for='guest' class='input-label'>Number of guests</label>
                <select class='options' id='guest' name='numberofpeople' required> 
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class='input-pack'>
                <label for='room' class='input-label'>Number of rooms</label>
                <select class='options' id='room' name='numberofroom' required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class='input-pack'>
                <label for='package' class='input-label'>Special offer</label>
                <select class='options' id='package' name='offer'>
                    <option value="0"></option>
                    <option value="All Inclusive">ALL INCLUSIVE</option>
                    <option value="Early Bird">EARLY BIRD</option>
                </select>
            </div>
            <input type='submit' value='Book' class='input-btn' name='submit'>
            <!-- onclick="popup() -->
        </form>
    </div>
    <div class='popup-overlay'>
        <div class='popup-content'>
            <h1>Awesome!</h1>
            <p>Your booking has been confirmed.</p>
            <button class='close' onclick="remove()">OK</button>
        </div>
    </div>
    <!-- <input type='submit' value='Book' class='input-btn' onclick="popup()"> -->
</section>

    


</body>
</html>