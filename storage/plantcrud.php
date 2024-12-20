<?php

function save_plant($mysqli,$plantName,$price,$description,$plantImg,$size,){
  $sql="INSERT INTO `plant`(`name`,`price`,`description`,`img`,`size`) VALUES ('$plantName',$price,'$description','$plantImg','$size') ";
  return $mysqli->query($sql);
}

function get_all_plants($mysqli){
  $sql="SELECT * FROM `plant`";
  return $mysqli->query($sql); 
}

function get_plant_details($mysqli,$id){
  $sql="SELECT * FROM `plant` WHERE `id`=$id";
  $plant = $mysqli->query($sql);
  return $plant->fetch_assoc(); 
}

