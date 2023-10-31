<?php
session_start();

if (!isset($_SESSION["userrole"]) || $_SESSION["userrole"] != "user") {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    <h1>User panel</h1>
    <h1>Welcome! <?php echo $_SESSION["username"];  ?></h1>
    <h2>Eamil: <?php echo $_SESSION["useremail"]  ?></h2>
    <h2>Role: <?php echo $_SESSION["userrole"];  ?></h1>

    <a href="logout.php">Logout</a>

</body>
</html>