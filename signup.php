
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>registration form</title>

</head>
<body>
    <div class="form-container">
        <h2>Register</h2>
        <form  action="enter.php" method="POST">

            <input type="text" name="firstname" id="firstname" placeholder="Username" required>

            <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
            <input type="tel" name="cellphone" id="cellphone" placeholder="Cell Phone no:" pattern="[0-9]{10}" title="Enter a 10-digit phone number without any dashes or spaces" required>
            <input type="email" name="email" id="email" placeholder="email" required>
            <input type="password" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <input type="password" name="cp" id="cp" placeholder="Confirm Password" title="retype the above password" required>
            <input type="submit" value="SignUp"></br>
            <h5 style="text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Already have an account? <a href="login.php">login</a></h5>

        </form>
        
    </div>
    
</body>
</html>