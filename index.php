<?php
session_start();

if (!isset( $_SESSION["useremail"] )) {
    header("Location: login.php");
}

if ($_SESSION["userrole"] == "user") {
    header("Location: home_user.php");
}
elseif ($_SESSION["userrole"] == "admin") {
    header("Location: home_admin.php");
}
elseif ($_SESSION["userrole"] == "manager") {
    header("Location: home_manager.php");
}
?>
