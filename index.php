<?php
session_start();
$_SESSION = array();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" type="text/css" href ="main.css">
    </head>

    <body>
        <form action="login_router.php" method="post">

            <div class="img">
                <img src="/images/st als logo.gif">
            </div>

            <h1> Lumen </h1>
            Access:
            <input type="radio" name="access" value="login">Log In
            <input type="radio" name="access" value="signup">Sign Up <br>
            <button type="submit"> Submit </button>
        </form>
    </body>
</html>