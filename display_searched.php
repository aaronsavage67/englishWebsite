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

        <form>
            <h1>Searched Essays</h1>
        </form>

        <?php
        $username = "root";
        $password = "root";
        $servername = "localhost";
        $dbname = "lumens";
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        echo "<table id='bob' border='1  '>
        <tr>
        <th>EssayID</th>
        <th>Level</th>
        <th>Type</th>
        <th>Title</th>
        <th>View</th>
        </tr>";

        if ($_POST["level"] === 'all' AND $_POST["type"] === 'all'){
            $sql = "SELECT essay_id, level, title, type FROM essay order by type, level, title" ;
        } elseif ($_POST["level"] === 'all'){
            $sql = "SELECT essay_id, level, title, type FROM essay WHERE type = '". $_POST["type"]. "' order by type, level, title" ;
        } elseif ($_POST["type"] === 'all'){
            $sql = "SELECT essay_id, level, title, type FROM essay WHERE level = '". $_POST["level"]. "' order by type, level, title" ;
        } else {
            $sql = "SELECT essay_id, level, title, type FROM essay WHERE level = '". $_POST["level"]. "' AND type = '". $_POST["type"]. "' order by type, level, title" ;
        }

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {

                echo "<td>" . $row['essay_id'] . "</td>";
                echo "<td>" . $row['level'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['title'] . "</td>";
                echo "<td><button type='submit' onclick='getId(this)'></button></td>";
                //                echo "<td><input type="button" value="button" onclick="getId(this)"></td>";
                echo "</tr>";

            }
        } else {
            echo "0 results for this kind of essay in our database, sorry.";
        }

        //        echo "</table>"

        mysqli_close($conn);
        ?>

        <script>
            function  getId(element) {
                index=document.getElementById("bob").rows[element.parentNode.parentNode.rowIndex].cells.item(0).innerHTML;
                window.location.href="display_text.php?essay_id="+index;
            }
        </script>

    </body>
</html>