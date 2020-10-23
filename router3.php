<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php
        if ($_POST["essay"] === 'search'){
            header("Location: essay_search.php");
            exit;
        } else {
            header("location: add_essay.php");
            exit;
        }
        exit;
        ?>
    </body>
</html>