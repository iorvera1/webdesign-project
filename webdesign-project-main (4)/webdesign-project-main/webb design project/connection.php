<?php
$lastName = $_POST['lastName']
$firstName = $_POST['firstName']
$middleName = $_POST['middleName']
$email = $_POST['email']
$pass = $_POST['pass']
$conPass = $_POST['conPass']


//Database Connection
$conn = new mysqli('localhost','root','','')
if($conn->connect_error){
    die('Connection Failed  : '.$conn->connect_error);
}else{
    //i gave space for the database (??)we want to insert the information too
    $stmt = $conn->prepare("insert into ??(lastName, firstName, middleName, email)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssss",$lastName, $firstName, $middleName, $email);
    $stmt->execute();
    echo "Registration successful...";
    $stmt->close();
    $conn-close();
}
?>