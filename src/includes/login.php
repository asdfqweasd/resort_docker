<html>
    <body>
        Welcome <?php echo $_GET["lastname"]; ?><br>]
        Please confirm your email <?php echo $_GET["email"]; ?><br>
        <?php
        $servername = "mysql";
        $username = "php";
        $password = "php";
        $dbname = "cloud_computing";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("connect failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO users (firstname, lastname, username, email,pwd)
        VALUES ('" . $_GET["firstname"] . "', '" . $_GET["lastname"] . "', '" . $_GET["username"] . "', '" . $_GET["email"] . "','" . $_GET["pwd"] . "')";

        if ($conn->query($sql) === TRUE) {
            echo "booking success";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        ?>
    </body>
</html>