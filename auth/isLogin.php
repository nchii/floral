<?php

$user = json_decode($_COOKIE["user"], true);
if (!$user) {
    header("Location:../index.php?invalid=Please login first!");
} else {
    $url = $_SERVER['REQUEST_URI'];
    $arr = explode('/', $url);
    $code = 0;
    if ($arr[count($arr) - 2] !== "pos") {
        $role_name = $arr[count($arr) - 2];
        switch ($role_name) {
            case 'admin':
                $code = 1;
                break;
            case 'customer':
                $code = 2;
                break;
        }
    }
    if ($code != $user['role']) {
        header("location:../401.html");
    }

}


if (isset($_POST["logout"])) {
    setcookie("user", "", -1, "/");
    header("location:../index.php");
}
