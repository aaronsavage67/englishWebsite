<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href ="main.css">
    </head>
    <body>
        <form action="check_login_teacher.php" method="post">
            <h1> Teacher Log-In </h1>
            <h3>Welcome back to Lumen, please enter your details.</h3>
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" id="password" required><br>
            <input type="checkbox" onclick="showPassword()"> show password <br>
            <button type="submit"> Welcome </button>
        </form>
    </body>

    <!--script function -->

    <script>
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</html>