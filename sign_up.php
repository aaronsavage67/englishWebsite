<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href ="main.css">
    </head>
    <body>
        <form name="myForm" action="router2.php" onsubmit="return validateEmail()" method="post">
            <h1> Sign Up </h1>
            <h3>Please fill in this form to create an account.</h3>
            Please enter your forename: <input type="text" name="forename" required><br>
            Please enter your surname: <input type="text" name="surname" required><br>
            Please enter your e-mail: <input type="text" name="email" required><br>
            Please enter your title if you are a teacher:
            <select name="title" required>
                <option disabled selected value> -- select a title -- </option>
                <option value="Mr">Mr</option>
                <option value="Mrs">Mrs</option>
                <option value="Ms">Ms</option>
                <option value="Miss">Miss</option>
                <option value="Dr">Dr</option>
            </select><br>
            Please enter your role: 	
            <input type="radio" name="role" id="pin" value="teacher" required>Teacher
            <input type="radio" name="role" value="pupil" required>Pupil<br>
            <button type="submit"> Sign Up </button>
        </form>

    </body>

    <!--script function -->

    <script>

        function validateEmail() {
            var x = document.forms["myForm"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
                alert("Not a valid email address. Please retry");
                return false;
            }
        }

    </script>

</html>