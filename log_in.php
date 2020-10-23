<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href ="main.css">
    </head>
    <body>
        <form action="router.php" method="post">
            <h1> Log-In </h1>
            Please enter your role: 	
            <input type="radio" name="role" value="teacher" required>Teacher
            <input type="radio" name="role" value="pupil" required>Pupil<br>
            <button type="submit"> Log-In </button> <br>
        </form>
    </body>
</html>