<?php
session_start();
include '../config/database.php'; 


$pharmacy_name = trim($_POST['pharmacy_name']);
$pan_no   = trim($_POST['pan_no']);
$password  = trim($_POST['password']);
$location = trim($_POST['location']);

$stmt = $conn->prepare("SELECT id, pharmacy_name, pan_no, password , location FROM pharmacy WHERE pharmacy_name = ? AND pan_no = ?");
$stmt->bind_param("ss", $pharmacy_name, $pan_no);
$stmt->execute();

$result = $stmt->get_result();
$pharmacy = $result->fetch_assoc();


if ($pharmacy && password_verify($password, $pharmacy['password'])) {

    $_SESSION['pharmacy_id'] = $pharmacy['id'];
    $_SESSION['pharmacy_name'] = $pharmacy['pharmacy_name'];

  
    header("Location: ../view/pharmacy/pharmacy_home.php");
    exit();

} else {

    // On failure, redirect with error message
    header("Location: ../view/pharmacy/pharmacylogin.php?error=1");
    exit();

}
?>
