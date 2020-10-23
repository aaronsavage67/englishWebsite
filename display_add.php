<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <?php
    if (($_SESSION["credentials"] !== 'teacher') AND ($_SESSION["credentials"] !== 'pupil')){
        header("location: index.php");
        exit;
    }
    ?>
    <body>

        <a href="/website.php">
            <img border="0" alt="home" src="/images/icon.png" width="60" height="60">
        </a>

        <form>
            <h1>Added Essay Successful</h1>
        </form>

        <?php
        $username = "root";
        $password = "root";
        $servername = "localhost";
        $dbname = "lumens";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO essay (level, type, title, content) VALUES ('". $_POST["level"]. "', '". $_POST["type"]. "', '". $_POST["title"]. "', '". $_POST["content"]."')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully in our database. You are now able to search for this";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>

    </body>
</html