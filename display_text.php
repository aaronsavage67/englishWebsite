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

        <?php
        $username = "root";
        $password = "root";
        $servername = "localhost";
        $dbname = "lumens";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT level, title, type, content FROM essay WHERE essay_id = '". $_GET["essay_id"]. "'" ;

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)){
                echo $row['level'];
                echo "<br>";
                echo $row['type'];
                echo "<br>";
                echo $row['title'];
                echo "<br>";
                echo $row['content'];
            }


            //            $row = mysqli_fetch_assoc($result)
            //            echo "<div class='border'>" . $row['content'] . "</div>";
        }

        mysqli_close($conn);
        ?>

    </body>
</html>