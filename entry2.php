<?php
session_start();

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM details WHERE firstname='$firstname' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Username and password are correct, start session
        $_SESSION['firstname'] = $firstname;
        
        

        header("location: welcome.php"); // Redirect to welcome page after successful login
    } else {
        echo "<script>alert('invalid user firstname or password');</script>";
    }
}

$conn->close();
?>
