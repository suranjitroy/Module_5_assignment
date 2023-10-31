<?php

$username = $_POST["username"] ?? "";
$userrole = $_POST["userrole"] ?? "";
$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";




$errorMessage = "";

if ($email != "" && $password != "") {  
    $fp = fopen("./data/all_users.txt", "a");
    
    fwrite($fp, "\n{$userrole}, {$email}, {$password}, {$username} ");
    fclose($fp);

    header("Location: role_manage.php");
}
else {
    $errorMessage = "Please fill up the email and password!";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
    <div class="container mt-5">
        <div class="col-lg-6 col-md-6">
        <h3 class="text-center">Add New User</h3>

        <form action="add_user.php" method="POST">

        <div class="form-group">
            <label for="firstname">User Name</label>
            <input type="text" class="form-control" name="username" id="username"  placeholder="Enter username" required>
        </div>
        <div class="form-group">
            <label for="firstname">User Role</label>
            <input type="text" class="form-control" name="userrole" id="userrole"  placeholder="Enter username" required>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
            
        </div>

        <div class="form-group">
            <label for="email">Password</label>
            <input type="password" class="form-control" name="password" id="email" placeholder="******" required>
        </div>

        <p class="text-warning">
            <?php 
                echo $errorMessage;
            ?>
        </p>

        <button type="submit" class="btn btn-warning">Create User</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>