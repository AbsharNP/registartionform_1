<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cellphone = $_POST['cellphone'];
$email = $_POST['email'];
$password = $_POST['password'];
$cp = $_POST['cp'];

if($password !== $cp){
    echo "password doesn't match";
    exit;
}


$conn = new mysqli('localhost','root','','registration');
if($conn->connect_error){
    die('connection failed' .$conn->connect_error);
}else{
    $stmt = $conn->prepare(" INSERT INTO details(firstname, lastname, cellphone, email, password)values(?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $firstname, $lastname, $cellphone, $email, $password);
    $stmt->execute();

    echo"registratioon successfull";
    $stmt->close();
    $conn->close();
    }
    header("Location:  login.php");
    exit;

?>