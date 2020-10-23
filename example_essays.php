<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" type="text/css" href ="main.css">
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

        <form action="router3.php" method="post">

            <h1> Example Essays </h1>
            <input type="radio" name="essay" value="search">Search Essays <br>
            <?php
            echo $_SESSION["credentials"];
            if ($_SESSION["credentials"] === 'teacher'){

                echo "<input type='radio' name='essay' value='add'>Add Essay <br>";
            }
            ?>
            <button type="submit"> Submit </button>
        </form>
    </body>
</html>