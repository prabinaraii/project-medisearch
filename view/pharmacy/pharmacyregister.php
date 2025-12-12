
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacy Registration</title>
 <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
<?php include "../header.php"; ?>

<div class="form-container">
    <h2>Pharmacy Registration</h2>

    <form action="../../action/pharmacyregister_action.php" method="POST" enctype="multipart/form-data">

        <div class="input-group">
            <label>Pharmacy Name</label>
            <input type="text" name="pharmacy_name" required>
        </div>

        <div class="input-group">
            <label>PAN Number</label>
            <input type="text" name="pan_no" required>
        </div>

        <div class="input-group">
            <label>Phone Number</label>
            <input type="text" name="phone_no" required>
        </div>

        <div class="input-group">
            <label>NMC License (Upload)</label>
            <input type="file" name="nmc_license" required>
        </div>

        <div class="input-group">
            <label>DDA License (Upload)</label>
            <input type="file" name="dda_license" required>
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div> 

        <div class="input-group">
            <label>Location</label>
            <input type="text" name="location" placeholder="City / Area" required>
        </div> 
<!-- 
        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="confirm_password" required>
        </div> -->

        <button type="submit" class="btn-submit">Register</button>

    </form>
</div>

</body>
</html>