<?php
session_start();
include '../config/database.php';


extract($_POST);
$pharmacy_name = trim($pharmacy_name);
$pan_no = trim($pan_no);
$phone_no = trim($phone_no);
$password = password_hash($password, PASSWORD_DEFAULT);
$location = trim($_POST['location']);

$upload_nmc = "../uploads/nmc_license/";
$upload_dda = "../uploads/dda_license/";


$nmc_filename = $_FILES['nmc_license']['name'];
$dda_filename = $_FILES['dda_license']['name'];

$nmc_file = $upload_nmc . $nmc_filename;
$dda_file = $upload_dda . $dda_filename;

//return print_r($nnc_file);
move_uploaded_file($_FILES['nmc_license']['tmp_name'], $nmc_file);
move_uploaded_file($_FILES['dda_license']['tmp_name'], $dda_file);


$stmt = $conn->prepare("INSERT INTO pharmacy 
    (pharmacy_name, pan_no, phone_no, nmc_license, dda_license, password, location)
    VALUES (?, ?, ?, ?, ?, ?,?)");

$stmt->bind_param("sssssss", $pharmacy_name, $pan_no, $phone_no, $nmc_filename, $dda_filename, $password ,$location);

if ($stmt->execute()) {
    header("Location: ../view/pharmacy/pharmacylogin.php?msg=Registered successfully");
} else {
    header("Location: ../view/pharmacy/pharmacyregister.php?msg=Email or PAN already exists");
}
?>

