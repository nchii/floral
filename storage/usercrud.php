<?php
function get_user_with_email($mysqli, $email)
{
    $sql = "SELECT * FROM `user` WHERE `email`='$email'";
    $user = $mysqli->query($sql);
    return $user->fetch_assoc();
}

function have_admin($mysqli)
{
    $sql = "SELECT COUNT(`id`) as total FROM `user` WHERE `role`=1";
    $result = $mysqli->query($sql);
    $total = $result->fetch_assoc();
    if ($total['total'] > 0) {
        return false;
    }
    return true;
}


function save_user($mysqli, $name, $email, $password, $role, $profile)
{
    try {
        $sql = "INSERT INTO `user` (`name`,`email`,`password`,`role`,`profile`) VALUE ('$name','$email','$password',$role,'$profile')";
        return $mysqli->query($sql);
    } catch (\Throwable $th) {
        if ($th->getCode() === 1062) {
            return "This email is alerady have been used!";
        } else {
            return "Internal server error!";
        }
    }

}
