<?php
include '../config/database.php';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$location = trim($_POST['location']);


$stmt = $conn->prepare("INSERT INTO patients (name, email, password, location) VALUES (?, ?, ?,?)");
$stmt->bind_param("ssss", $name, $email, $password, $location);

if ($stmt->execute()) {
    header("Location: ../view/patient/patientlogin.php?msg=Registered successfully");
} else {
    header("Location: ../view/patient/patientregister.php?msg=Email already exists");
}
?>