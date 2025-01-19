<?php

function save_plant($mysqli,$plantName,$price,$description,$plantImg,$size){
  $sql="INSERT INTO `plant`(`name`,`price`,`description`,`img`,`size`) VALUES ('$plantName',$price,'$description','$plantImg','$size') ";
  return $mysqli->query($sql);
}

function get_all_plants($mysqli){
  $sql="SELECT * FROM `plant`";
  return $mysqli->query($sql); 
}

function get_plant_details($mysqli,$id){
  $sql="SELECT * FROM `plant` WHERE `id`= '$id'";
  $plant = $mysqli->query($sql);
  return $plant->fetch_assoc(); 
}
function update_plant($mysqli,$plantName,$price,$description,$plantImg,$size,$id)
{
    $sql = "UPDATE  `plant` SET `name`='$plantName',`price`='$price', `description`='$description', `img` = '$plantImg',`size`='$size', WHERE `id`= $id";
    return $mysqli->query($sql);
}
function get_plant_id($mysqli, $id)
{
    $sql = "SELECT * FROM `plant` WHERE `id`=$id";
    $resule = $mysqli->query($sql);
    return $resule->fetch_assoc();
}

