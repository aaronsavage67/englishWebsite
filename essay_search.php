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

        <form action="display_searched.php" method="post">

            <h1>Search for Essays</h1>

            Please enter the level of essay:
            <select name="level" required>
                <option disabled selected value> -- select a level -- </option>
                <option value="all">All</option>
                <option value="s1">S1</option>
                <option value="s2">S2</option>
                <option value="national 5">National 5</option>
                <option value="higher">Higher</option>
                <option value="advanced higher">Advanced Higher</option>
            </select><br>
            Please enter the type of essay:
            <select name="type" required>
                <option disabled selected value> -- select a type -- </option>
                <option value="all">All</option>
                <option value="creative">Creative</option>
                <option value="persuasive">Persuasive</option>
                <option value="personal">Personal</option>
                <option value="critical - poem">Critical - Poem</option>
                <option value="critical - prose">Critical - Prose</option>
                <option value="critical - play">Critical - Play</option>
                <option value="critical - drama">Critical - Drama</option>
                <option value="critical - film">Critical - Film</option>
            </select><br>
            <button type="submit"> Search </button>

        </form>
    </body>
</html