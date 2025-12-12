<?php
include("../../config/database.php");
$sql = "SELECT pharmacy_id, pharmacy_name, pan_no, phone_no, nnc_file, dda_file, password FROM pharmacy";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../../css/dashboard.css">
</head>
<body>
    <header>
        <img src="../../image/logo.png" alt="MediSearch Logo">
        <h2>Admin Dashboard</h2>
        <p>Welcome to Dashboard</p>
    </header>
    
    <div id="container">
        <div class="sidebar">
            <nav>
                <a href="index.php">Pharmacy</a>
                <a href="Dashboard_patient.php">Patient</a>
                <a href="Dashboard_Booking.php">Booking</a>
                <a href="Dashboard_Medicine.php">Medicine</a>
            </nav>
        </div>
        
        <div class="main">
            <h1>Pharmacy List</h1>
           <table border="1" cellpadding="8">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Pharmacy</th>
                        <th>PAN</th>
                        <th>Phone</th>
                        <th>NNC File</th>
                        <th>DDA File</th>
                        <th>Password</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>
                            <tr>
                                <td><?= $row['pharmacy_id'] ?></td>
                                <td><?= $row['pharmacy_name'] ?></td>
                                <td><?= $row['pan_no'] ?></td>
                                <td><?= $row['phone_no'] ?></td>
                                <td><?= $row['nnc_file'] ?></td>
                                <td><?= $row['dda_file'] ?></td>
                                <td><?= $row['password'] ?></td>
                            </tr>
                        <?php }
                    } else {
                        echo "<tr><td colspan='7'>No data found</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>