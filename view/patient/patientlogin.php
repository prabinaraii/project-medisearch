<?php
// Popup after successful registration
if (isset($_GET['msg']) && $_GET['msg'] === 'success') {
    echo "<script>alert('Registered Successfully');</script>";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">

    

</head>
<body>


 <?php include "../header.php"; ?>
 <h2>LOG IN</h2>
<form action="../../action/patientlogin_action.php" method="POST">
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="text" name="location" placeholder="City / Area" required>
    <button type="reset">Reset</button>
    <button type="submit">Submit</button>

    <p>Don't have an account? <a href="patientregister.php">Register here</a></p>
</form>

</body>
</html>