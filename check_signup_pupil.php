<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

        <?php
        $username = "root";
        $password = "root";
        $servername = "localhost";
        $dbname = "lumens";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $pupilusername = $_POST["username"];
        $sql = "SELECT user_name FROM user WHERE user_name = '". $pupilusername . "'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            echo "Username is already taken. Try changing your surname to, for example, " . $pupilusername . "_1";
            echo "<form action='welcome_sign_up_pupil.php' method='post'>";
            echo "    <button type='submit'>Go Back</button>";
            echo " </form>";
        } else {

            $sql = "INSERT INTO user (first_name, last_name, email, role, user_name, password) VALUES ('". $_SESSION["forename"] ."' , '". $_SESSION["surname"] ."' , '". $_SESSION["email"] ."' , 'pupil' , '". $pupilusername ."' , '". $_POST["password"] ."')";  

            if (mysqli_query($conn, $sql)) {
            $_SESSION["credentials"] = 'pupil';

                header("location: website.php");
                exit;
            } else {
                echo "<form action='welcome_sign_up_pupil.php' method='post'>";
                echo "Website is unable to create your account at this time";
                echo "    <button type='submit'>Go Back</button>";
                echo " </form>";
            }
        }

        //        var_dump($_POST);


        mysqli_close($conn);
        ?>

    </body>
</html>