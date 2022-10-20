<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <nav>
        <div class="menu">
            <div class="nav-container">
                <a href="index.php"><img src="img/logo.png" alt="logo"></a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="stay.php">Stay</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="book.php">Book</a></li>

                    <?php
                        if (isset($_SESSION["username"])) {
                            echo "<li><a href='info.php'>Info</a></li>";
                            echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                        }
                        else {
                            echo "<li><a href='signup.php'>Sign up</a></li>";
                            echo "<li><a href='login.php'>Log in</a></li>";
                        }
                    
                    ?>
                </ul>
            </div>

        </div>
    </nav>



</body>
</html>