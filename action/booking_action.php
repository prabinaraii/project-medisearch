<?php
session_start();
include "../../config/database.php";

$patient_id  = $_SESSION['user_id'];
$pharmacy_id = $_POST['pharmacy_id'];

// Insert booking
$stmt = $conn->prepare("INSERT INTO bookings (patient_id, pharmacy_id) VALUES (?, ?)");
$stmt->bind_param("ii", $patient_id, $pharmacy_id);

if ($stmt->execute()) {
    echo "Booking successful!";
} else {
    echo "Booking failed.";
}
?>
