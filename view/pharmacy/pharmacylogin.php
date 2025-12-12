<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Login</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php include "../header.php"; ?>
    <div class="login-container">
        <h2>Pharmacy Login</h2>

        <form action="../../action/pharmacylogin_action.php" method="POST">

            <label>Pharmacy Name</label>
            <input type="text" name="pharmacy_name" placeholder="Enter pharmacy name" required>

            <label>PAN Number</label>
            <input type="text" name="pan_no" placeholder="Enter PAN number" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password" required>

            <label>Location</label>
            <input type="text" name="location" placeholder="City / Area" required>

            <button type="submit">Login</button>

        </form>

        <p>Don't have an account? <a href="pharmacyregister.php">Register here</a></p>
    </div>

</body>
</html>