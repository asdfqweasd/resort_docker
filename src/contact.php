<?php
    include_once 'header.php';
?>

<body>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Stay</title>
    <link rel="stylesheet" href="css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <script src="js/script.js"></script>
    <script src='js/jquery-3.5.1.min.js'></script>
</head>

<section class='top' style="background-image: url('img/maldives.jpg')">
            <h3>Scroll Down</h3>
            <span></span>
        </section>


        <section class='page-section'>
            <div class='contact'>
                <p>Address: Ocean Heart South Male' Atoll Republic Of Maldives</p>
                <p>Phone: +960 665 3156</p>
                <p>Email: reservations@oceanheart.com</p>
                <hr>
                <p>Leave a message</p>
                <form id='message' class='message'>
                    <textarea type="text" placeholder="Type your message here..." name="messgae" rows='2'></textarea>
                    <button onclick="message()">Send</button>
                </form>
            </div>
            <iframe scrolling="no" src="https://www.openstreetmap.org/export/embed.html?bbox=64.33593750000001%2C-3.9738609758391017%2C82.79296875000001%2C12.747516274952726&amp;layer=mapnik&amp;marker=4.434044005032582%2C73.564453125" style="border: 1px solid black"></iframe>
        </section>

</body>



