<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

        <form action="welcome_log_in_teacher.php" method="post">
            <button type="submit">Go Back</button>
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

        $sql = "SELECT password FROM user WHERE user_name = '". $_POST["username"]. "' AND role = 'teacher'" ;
        
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                if ($_POST["password"] === $row["password"]){
                    $_SESSION["credentials"] = 'teacher';
                    mysqli_close($conn);
                    header("location: website.php");
                    exit;
                }
            }
        }

//        var_dump($_POST);
        echo "Invalid Log-In. Please try again";

        mysqli_close($conn);
        ?>

    </body>
</html>