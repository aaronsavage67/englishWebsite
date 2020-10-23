<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php
        if ($_POST["access"] === 'signup'){
            header("Location: sign_up.php");
            exit;
        } else {
            header("location: log_in.php");
            exit;
        }
        exit;
        ?>
    </body>
</html>