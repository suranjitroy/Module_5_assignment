<?php
session_start();


$email = $_POST["email"] ?? "";
$password = $_POST["password"] ?? "";

$errorMessage = "";


$fp = fopen("./data/all_users.txt", "r");

$userrole = array();
$useremail = array();
$userpassword = array();
$username = array();

while ($line = fgets($fp)) {
   $values = explode(",", $line);
   
   array_push($userrole, trim($values[0]));
   array_push($useremail, trim($values[1]));
   array_push($userpassword, trim($values[2]));
   array_push($username, trim($values[3]));
}

fclose($fp);



for ($i = 0; $i < count($userrole); $i++) {

        if ($email == $useremail[$i] && $password == $userpassword[$i]) {
            $_SESSION["userrole"] = $userrole[$i];
            $_SESSION["useremail"] = $useremail[$i];
            $_SESSION["username"] = $username[$i];
            $_SESSION["userpass"] = $userpassword[$i];

            header("Location: index.php");
        }
        else {
            $errorMessage = "Wrong email or password";
        }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="col-lg-6 col-md-6">
        <h1 class="text-center">Login to you account</h1>

        <form action="login.php" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="******">
        </div>

        <p class="text-warning">
            <?php //echo $errorMessage; ?>
        </p>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>

        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>