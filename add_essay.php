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

        <form action="display_add.php" method="post">

            <h1>Add an Essay</h1>

            What level of essay are you adding:
            <select name="level" required>
                <option disabled selected value> -- select a level -- </option>
                <option value="s1">S1</option>
                <option value="s2">S2</option>
                <option value="national 5">National 5</option>
                <option value="higher">Higher</option>
                <option value="advanced higher">Advanced Higher</option>
            </select><br>
            What type of essay are you adding:
            <select name="type" required>
                <option disabled selected value> -- select a type -- </option>
                <option value="creative">Creative</option>
                <option value="persuasive">Persuasive</option>
                <option value="personal">Personal</option>
                <option value="critical - poem">Critical - Poem</option>
                <option value="critical - prose">Critical - Prose</option>
                <option value="critical - play">Critical - Play</option>
                <option value="critical - drama">Critical - Drama</option>
                <option value="critical - film">Critical - Film</option>
            </select><br>
            What is the title of essay you are adding:
            <input type="text" name="title" required><br>
            <!--            Please enter the 4 digit pin to confirm you are a teacher and are able to add an essay: <input type="number" name="1st" min="1" max="9" required><input type="number" name="1st" min="1" max="9" required><input type="number" name="1st" min="1" max="9" required><input type="number" name="1st" min="1" max="9" required><br>-->
            Please paste the essay text into the box: 
            <textarea name="content" rows="8" cols="100" required> 

            </textarea><br>
            <button type="submit"> Add </button>
        </form>
    </body>
</html