<?php require_once("./auth/isLogin.php"); ?>
<?php
if ($user['role'] == 1) {
    header("location:./admin/index.php");
} elseif ($user['role'] == 2) {
    header("location:index.php");
}