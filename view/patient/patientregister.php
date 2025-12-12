

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="../../css/style.css">


</head>
<body>
    <?php include "../header.php"; ?>
        <h2>Register</h2>
    <form action="../../action/patientregister_action.php" method="POST">
    <input type="text" name="name" placeholder="Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
     <input type="text" name="location" placeholder="City / Area" required>
    <button type="reset">Reset</button>
    <button type="submit">Submit</button>

    
</form>
<p><a href="patientlogin.php">Already have an account? Login</a></p>
            
</form>
</body>
</html>
