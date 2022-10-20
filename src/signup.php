<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup 1</title>
    <link rel="stylesheet" href="css/signup.css">
    <script src="https://kit.fontawesome.com/6233a8b1d1.js" crossorigin="anonymous"></script>

</head>
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
        $sql = "CREATE TABLE IF NOT EXISTS `user` (
            `firstname` varchar(20) NOT NULL,
            `lastname` varchar(20) NOT NULL,
            `username` varchar(20) NOT NULL,
            `email` varchar(30) NOT NULL,
            `password` varchar(20) NOT NULL,
            `passwordrepeat` varchar(20) NOT NULL
          )";
        
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        $conn->close();
        ?>
<body>

    <section class="signup-booking">
        <p>Sign up and start sharing!</p>
        <hr>
        <div class="signup-container">
            <form id="signup-form" action='includes/signup.inc.php' method='post'>
                <div class='signup-left-right'>
                    <div class='signup-input-pack'>
                        <input type='text' class='signup-input-text-left' name='firstname' id='signup-firstname' placeholder="First Name"required>
                    </div>
                    <div class='signup-input-pack'>
                        <input type='text' class='signup-input-text-right' name='lastname' id='signup-lastname' placeholder="Last Name" required>
                    </div>
                </div>
                <div class='signup-input-pack'>
                    <input type='text' class='signup-input-text' name='username' id='signup-username' placeholder="Username" required>
                </div>
                <div class='signup-input-pack'>
                    <input type='email' class='signup-input-text' name='email' id='signup-email' placeholder="Email" required>
                </div>
                <div class='signup-input-pack'>
                    <input type='password' class='signup-input-text' name='password' id='signup-password' placeholder="Password" required>
                </div>
                <div class='signup-input-pack'>
                    <input type='password' class='signup-input-text' name='passwordrepeat' id='signup-confirmpassword' placeholder="Confirm Password" required>
                </div>
                <input type='submit' name='submit' class='signup-button' value='Sign Up'>
            </form> 
            
        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<h1>Fill in all fields!</h1>";
            }
            else if ($_GET["error"] == "invaliduid") {
                echo "<h1>Choose a proper usename!</h1>";
            }
            else if ($_GET["error"] == "invalidemail") {
                echo "<h1>Choose a proper email!</h1>";
            }
            else if ($_GET["error"] == "passworddontmatch") {
                echo "<h1>Password doesn't match!</h1>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<h1>Something went wrong!</h1>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<h1>Choose another usename!</h1>";
                echo "<h1>Please another email!</h1>";
            }
            else if ($_GET["error"] == "none") {
                echo "<h1>You have successfully signed up!</h1>";
            }

        }
        ?>

        
    </section>

    

</body>
</html>