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
        $_SESSION["forename"] = $_POST["forename"];
        $_SESSION["surname"] = $_POST["surname"];
        $_SESSION["email"] = $_POST["email"];
        $_SESSION["title"] = $_POST["title"];
        
        if ($_POST["role"] === 'teacher'){
            header("Location: welcome_sign_up_teacher.php");
            exit;
        } else {
            header("location: welcome_sign_up_pupil.php");
            exit;
        }
        exit;
        ?>
    </body>
</html>