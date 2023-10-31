<?php
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    
<h1 class="text-center">List of users</h1>
<div class="container">
<div class="table-responsive">
    <a href="add_user.php" class="btn btn-primary"> Add New User </a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">User Email</th>
      <th scope="col">User Password</th>
      <th scope="col">User Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   <?php for ($i = 0; $i < count($userrole); $i++) {?>
    <tr>
      <td><?php echo $username[$i]?></td>
      <td><?php echo $useremail[$i]?></td>
      <td><?php echo $userpassword[$i]?></td>
      <td><?php echo $userrole[$i]?></td>
      <td><a href ="http://localhost/module_5/edit_user.php?name=<?php echo $username[$i]?>">Edit</a> || <a href ="#">Delete</a></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
 


    <a href="logout.php">Logout</a>

</div>

</body>
</html>