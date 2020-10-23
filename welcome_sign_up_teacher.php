<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href ="main.css">
    </head>
    <body>
        <form action="check_signup_teacher.php" method="post">
            <h1> Teacher Sign Up </h1>
            Welcome to Lumen, <?php echo $_SESSION["title"]; echo ' '; echo $_SESSION["surname"]; ?><br>
            Your email address is: <?php echo $_SESSION["email"]; ?><br>
            Your userame is <?php echo $_SESSION["title"]; echo '_'; echo $_SESSION["surname"]; ?> and you have a teachers account<br>
            Please enter your chosen password: <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Not a valid password" required><br>
            Please enter the secure pass phrase to confirm you are a teacher: <input type="text" name="code" required><br>
            <input type="checkbox" onclick="showPassword()">show password <br>
            <button type="submit"> Welcome </button>
        </form>

        <div id="message" style="display:none">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid"> a lowercase letter</p>
            <p id="capital" class="invalid"> a capital letter</p>
            <p id="number" class="invalid"> a number</p>
            <p id="length" class="invalid"> minimum 8 characters</p>
        </div>

    </body>

    <!--script function -->

    <script>

        var password = document.getElementById("password");
        var letter = document.getElementById("letter");
        var capital = document.getElementById("capital");
        var number = document.getElementById("number");
        var length = document.getElementById("length");

        // Showing and hiding of message boxes
        password.onfocus = function() {
            document.getElementById("message").style.display = "block";
        }
        password.onblur = function() {
            document.getElementById("message").style.display = "none";
        }

        // When the user starts to type something inside the password
        password.onkeyup = function() {

            // Validate to make sure the password contains a lowercase letter
            var lowerCaseLetters = /[a-z]/g;
            if(password.value.match(lowerCaseLetters)) { 
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate to make sure the password contains a capital letter
            var upperCaseLetters = /[A-Z]/g;
            if(password.value.match(upperCaseLetters)) { 
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate to make sure the password contains a number
            var numbers = /[0-9]/g;
            if(password.value.match(numbers)) { 
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate to make sure the password contains a length of minimum 8
            if(password.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

        //function to show what you have entered in the password field 
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