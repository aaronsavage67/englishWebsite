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
        // CONNECTING TO DB
        $username = "root";
        $password = "root";
        $servername = "localhost";
        $dbname = "lumens";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // FINDING THE TEACHER PASSCODE
        $sql = "select value from configuration where config_key = 'teacher_passcode'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row['value'] !== $_POST['code']){
            // WRONG PASSCODE!
            echo "Invalid teacher passcode, try again";
            echo "<form action='welcome_sign_up_teacher.php' method='post'>";
            echo "    <button type='submit'>Go Back</button>";
            echo " </form>";  
        } else {
            // CORRECT PASSCODE - IT IS A TEACHER

            // CHECKING TEACHER USERNAME IS UNIQUE
            $teacherusername = $_SESSION["title"]. '_' . $_SESSION["surname"];
            $sql = "SELECT user_name FROM user WHERE user_name = '". $teacherusername . "'";

            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "Username is already taken. Try changing your surname to, for example, " . $_SESSION["surname"] . "_1";
                echo "<form action='sign_up.php' method='post'>";
                echo "    <button type='submit'>Go Back</button>";
                echo " </form>";
            } else {


                // STORING THE TEACHER DETAILS
                $sql = "INSERT INTO user (first_name, last_name, email, role, user_name, password) VALUES ('". $_SESSION["forename"] ."' , '". $_SESSION["surname"] ."' , '". $_SESSION["email"] ."' , 'teacher' , '". $teacherusername ."' , '". $_POST["password"] ."')";  

                if (mysqli_query($conn, $sql)) {
                    $_SESSION["credentials"] = 'teacher';
                    header("location: website.php");
                    exit;
                } else {
                    echo "<form action='welcome_sign_up_teacher.php' method='post'>";
                    echo "Website is unable to create your account at this time";
                    echo "    <button type='submit'>Go Back</button>";
                    echo " </form>";
                }
            }
        }

        //        var_dump($_POST);


        mysqli_close($conn);
        ?>

    </body>
</html>