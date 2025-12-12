<?php
session_start();
include '../config/database.php';

// Ensure logged in
if (!isset($_SESSION['pharmacy_id'])) {
    header("Location: ../view/pharmacy/pharmacylogin.php");
    exit;
}

$pharmacy_id = $_SESSION['pharmacy_id'];

/* DELETE MEDICINE */
if (isset($_GET['delete'])) {
    $delete_id = (int) $_GET['delete'];

    $del = $conn->prepare("DELETE FROM medicine WHERE id = ? AND pharmacy_id = ?");
    $del->bind_param("ii", $delete_id, $pharmacy_id);
    $del->execute();

    header("Location: ../view/pharmacy/pharmacy_home.php?deleted=1");
    exit;
}

/* ADD MEDICINE */    
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['add_medicine'])) {

    $name  = trim($_POST['medicine_name']);
    $desc  = trim($_POST['description']);
    $price = trim($_POST['price']);
    $stock = trim($_POST['stock']);
    $expiry_date = trim($_POST ['expiry_date']);

    $stmt = $conn->prepare("
        INSERT INTO medicine (pharmacy_id, medicine_name, description, price, stock, expiry_date)
        VALUES (?, ?, ?, ?, ? ,?)
    ");
    $stmt->bind_param("isssis", $pharmacy_id, $name, $desc, $price, $stock, $expiry_date);
    $stmt->execute();

    header("Location: ../view/pharmacy/pharmacy_home.php?success=1");
    exit;
}

$q = $conn->prepare("SELECT * FROM medicine WHERE pharmacy_id = ?");
$q->bind_param("i", $pharmacy_id);
$q->execute();
$medicines = $q->get_result();
  
