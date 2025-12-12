<?php
session_start();
include __DIR__ . '/../../config/database.php';

if (!isset($_SESSION['pharmacy_id'])) {
    header("Location: pharmacylogin.php");
    exit;
}

$pharmacy_id = $_SESSION['pharmacy_id'];

$stmt = $conn->prepare("SELECT * FROM medicine WHERE pharmacy_id = ?");
$stmt->bind_param("i", $pharmacy_id);
$stmt->execute();
$medicines = $stmt->get_result();
include "../header.php"; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pharmacy Dashboard</title>
    <link rel="stylesheet" href="../../css/style.css">

</head>

<body>

<div class="container">

    <h2>Welcome, <?php echo $_SESSION['pharmacy_name']; ?></h2>

    <?php if (isset($_GET['success'])): ?>
        <div class="success">Medicine added successfully!</div>
    <?php endif; ?>

    <?php if (isset($_GET['deleted'])): ?>
        <div class="delete">Medicine removed!</div>
    <?php endif; ?>

    <h3>Add New Medicine</h3>

    <form method="POST" action="../../action/pharmacyhome_action.php" class="add-form">

        <input type="text" name="medicine_name" placeholder="Medicine Name" required>

        <textarea name="description" placeholder="Description" required></textarea> 

        <input type="number" name="price" placeholder="Price" required>

        <input type="number" name="stock" placeholder="Stock Quantity" required> 

        <input type= "date" name="expiry_date" required> 

        <button type="submit" name="add_medicine">Add Medicine</button> 

    </form>

    <h3>Your Medicines</h3>

    <div class="medicine-list">
        <?php while($row = $medicines->fetch_assoc()): ?>
            <div class="card">
                <h4><?php echo $row['medicine_name']; ?></h4>
                <p><?php echo $row['description']; ?></p>
                <p><strong>Price:</strong> Rs. <?php echo $row['price']; ?></p>
                <p><strong>Stock:</strong> <?php echo $row['stock']; ?></p>

                <a href="../../action/pharmacyhome_action.php?delete=<?php echo $row['id']; ?>" 
                   class="delete-btn"
                   onclick="return confirm('Delete this medicine?');">
                   Delete
                </a>
            </div>
        <?php endwhile; ?>
    </div>

</div>

</body>
</html>
