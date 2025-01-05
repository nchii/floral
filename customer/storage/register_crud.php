<?php




function user_register($mysqli,$name,$email,$phone,$address,$encrptPassword)
{
    $sql = "INSERT INTO `user`(`name`,`email`,`phone`,`address`,`password`) VALUE ('$name','$email','$phone','$address','$encrptPassword')";
    return $mysqli->query($sql);
}

function get_all_user($mysqli)
{
    $sql = "SELECT * FROM `user`";
    return $mysqli->query($sql);
}

function login($mysqli,$email,$password)
{
    $sql = "SELECT * FROM `user` WHERE email= '$email' AND password='$password'";
    return $mysqli->query($sql);
}

