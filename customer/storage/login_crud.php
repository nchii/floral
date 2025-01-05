<?php

function login($mysqli)
{
    $sql = "SELECT * FROM `user` WHERE id = 1";
    return $mysqli->query($sql);

}

