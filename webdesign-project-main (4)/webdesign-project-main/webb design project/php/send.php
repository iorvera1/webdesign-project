<?php
include "../php/db_connection.php";
if(isset($_POST['lastName'], $_POST['firstName'], $_POST['middleName'], $_POST['email'], $_POST['pass'] )){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $sql = "INSERT INTO registered(lastName, firstName, middleName, email, pass) VALUES(?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$lastName], [$firstName], [$middleName], [$email], [$pass]);
}
?>