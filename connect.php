<?php

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$conn = new mysqli('localhost', 'root', '', 'casa');
if($conn->connect_error){
    die('Connection failed'. $conn->connect_error);
}
    else{
    $stmt = $conn->prepare("insert into casaktu (name, email, contact, message)
    values (?,?,?,?)");

    $stmt-> bind_param("ssis", $name, $email, $contact, $message);

    $stmt->execute();
    echo 'Thanks for messaging casa-ktu!';

    $stmt->close();
    $conn->close();
}