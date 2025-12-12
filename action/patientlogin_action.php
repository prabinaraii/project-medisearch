<?php
session_start();
include '../config/database.php'; 

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$stmt = $conn->prepare("SELECT id, name, password FROM patients WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {

    $_SESSION['user_id'] = $user['id'];
    $_SESSION['user_name'] = $user['name'];
    $_SESSION['patient_location'] = $user['location'];
    header("Location: ../view/patient/patient_home.php");
    exit();

} else {

    header("Location: ../view/patient/patientlogin.php?error=1");
    exit();

}
?>
