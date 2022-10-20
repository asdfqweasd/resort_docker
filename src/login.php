<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <section class="Login-big-container">
        <div class="Login-container">
            <h2 class="Login-title">Login</h2>
            <div class="Login-container1">
                <form action='includes/login.inc.php' method='post'>
                    <div >
                        <input type="text" class="Login-form-control" placeholder="Username" required="required"
                            name="username">
                    </div>
                    
                    <div >
                        <input type="password" class="Login-form-control" placeholder="Password" required="required"
                            name="password">
                    </div>
                    <label class="Login-Label"><input type="checkbox" name="remember"> Remember me</label>

                
                    <div class="g-recaptcha" data-sitekey="6LfRLCYcAAAAAKUTOzGIpWBkWhW2fCfwmibFm6Gv"></div>


                    <button type="submit" name='submit' class="Login-Login">Login</button>
                    <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<h1>Fill in all fields!</h1>";
                            }
                            else if ($_GET["error"] == "wronglogin") {
                                echo "<h1>Wrong login info!</h1>";
                            }
                        }
                    ?>
                    <hr>
                    <div class="Login-form-group-container1">
                        <p class="Login-text">New to our website? </p>
                        <a href="signup.php" class="Login-Signup"> Sign up</a>
                    </div>
                </form>

                
                <!-- <a href="<?php echo base_url()?>forgot_password" class="Login-Link">Forget password?</a> -->
                
            </div>

            <!-- <div class="Login-container2">
                    <a href="<?php echo $loginURL ?>">
                        <img src="<?php echo base_url() ?>/assets/img/google_login.png" class="login-google">
                    </a>
            </div> -->
            
        </div>
    </section>
</body>
</html>