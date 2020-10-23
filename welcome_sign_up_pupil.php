<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href ="main.css">
    </head>
    <body>
        <form action="check_signup_pupil.php" method="post">
            <h1> Student Sign Up </h1>
            Welcome to Lumen, <?php echo $_SESSION["forename"]; ?><br>
            Your email address is: <?php echo $_SESSION["email"]; ?><br>
            Please enter the username you want, this will be seen by other users to identify you: <input type="text" name="username" required><br>
            Please enter your chosen password: <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Not a valid password" required><br>
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

            // Validate lowercase 
            var lowerCaseLetters = /[a-z]/g;
            if(password.value.match(lowerCaseLetters)) { 
                letter.classList.remove("invalid");
                letter.classList.add("valid");
            } else {
                letter.classList.remove("valid");
                letter.classList.add("invalid");
            }

            // Validate capital
            var upperCaseLetters = /[A-Z]/g;
            if(password.value.match(upperCaseLetters)) { 
                capital.classList.remove("invalid");
                capital.classList.add("valid");
            } else {
                capital.classList.remove("valid");
                capital.classList.add("invalid");
            }

            // Validate numbers
            var numbers = /[0-9]/g;
            if(password.value.match(numbers)) { 
                number.classList.remove("invalid");
                number.classList.add("valid");
            } else {
                number.classList.remove("valid");
                number.classList.add("invalid");
            }

            // Validate length
            if(password.value.length >= 8) {
                length.classList.remove("invalid");
                length.classList.add("valid");
            } else {
                length.classList.remove("valid");
                length.classList.add("invalid");
            }
        }

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