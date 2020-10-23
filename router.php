<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php
        if ($_POST["role"] === 'teacher'){
            header("Location: welcome_log_in_teacher.php");
            exit;
        } else {
            header("location: welcome_log_in_pupil.php");
            exit;
        }
        exit;
        ?>
    </body>
</html>