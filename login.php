
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
        <h2>login</h2>
        <form  action="entry2.php" method="POST">

            <input type="text" name="firstname" id="email" placeholder="username" required>
            <input type="password" name="password" id="password" placeholder="Password"  required>
            <input type="submit" value="LogIn" name="submit">
        <!-- </form> -->
        <h5 style="text-align:center; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">Don't have an account? <a href="signup.php">signup</a></h5>
        </form>
    </div>
    
    </body>
    </html>