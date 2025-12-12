<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: patientlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Home</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/no1.css">
</head>
<body>

<?php include "../header.php"; ?>

<div class="patient-home">

    <h2>Welcome, <?php echo $_SESSION['user_name']; ?></h2>

    <form action="search_pharmacy.php" method="GET" class="search-box">
        <input type="text" name="keyword" placeholder="Looking for a medicine? Start typing.." required>
        <button type="submit">Search</button>
        
    </form>

</div>

</body>
</html>
