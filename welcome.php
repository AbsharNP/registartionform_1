 <?php
session_start();

if (!isset($_SESSION['firstname'])) {
    // Redirect to login page if user is not logged in
    header("location: login.php");
    exit();
}

$firstname = $_SESSION['firstname'];
$email = $_SESSION['email'];

// echo "Welcome, $firstname!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="form-container">
    <h2>welcome </h2>
    <h2> <?php echo $_SESSION['firstname']; ?></h2>
    

    
    <button onclick="window.location.href='login.php';" class="price">logout</button>
</div>
</body>
</html>