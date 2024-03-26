<?php
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
    $lastname = $_POST['lastname'];
    $cellphone = $_POST['cellphone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cp = $_POST['cp'];
    

    // Check if username already exists
    $check_query = "SELECT * FROM details WHERE firstname='$firstname'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        echo "<script>alert('firstname alreday exists. Please choose a different firstname.');</script>";
        
    } elseif ($password !== $cp) {
        
        echo "<script>alert('please enter correct password');</script>";
    } else {
        // Insert new record into database
        $sql = "INSERT INTO details (firstname, lastname, cellphone, email, password) VALUES ('$firstname', '$lastname', '$cellphone', '$email', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
