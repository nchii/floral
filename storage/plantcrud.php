<?php

function save_plant($mysqli,$plantName,$price,$description,$plantImg,$size,){
  $sql="INSERT INTO `plant`(`name`,`price`,`description`,`img`,`size`) VALUES ('$plantName',$price,'$description','$plantImg','$size') ";
  return $mysqli->query($sql);
} 

function get_all_plant_id($mysqli,$start){
  $sql="SELECT * FROM `plant` order by `id` limit 5 offset $start";
  return $mysqli->query($sql); 
}

function get_all_plants($mysqli){
  $sql="SELECT * FROM `plant` ";
  return $mysqli->query($sql); 
}


function get_all_plants_filter($mysqli,$search){
  $sql="SELECT * FROM `plant` where `name` like '%$search%'";
  return $mysqli->query($sql); 
}

function get_plant_details($mysqli,$id){
  $sql="SELECT * FROM `plant` WHERE `id`= '$id'";
  $plant = $mysqli->query($sql);
  return $plant->fetch_assoc(); 
}
function get_user_pag_count($mysqli){
  $sql = "SELECT COUNT(`id`) AS total FROM `plant`";
  $count = $mysqli->query($sql);
  $total = $count->fetch_assoc();
  $page = ceil($total['total'] / 5) ;
  return $page;
}
function get_user_filter($mysqli,$key){
  $sql = "SELECT * FROM `plant` WHERE `name` LIKE '%$key%'";
  return $mysqli->query($sql);
}
function delete_plant($mysqli, $id){
  $sql = "DELETE FROM `plant` WHERE `id` = $id";
  try {
    $mysqli->query($sql);
    return true;
  } catch (\Throwable $th) {
    return false;
  }
}

function update_plant($mysqli,$plantName,$price,$description,$plantImg,$size,$id){
  $sql="UPDATE `plant` SET `name`='$plantName',`price`='$price',`description`='$description',`img`='$plantImg',`size`='$size' WHERE `id`=$id";
  return $mysqli->query($sql);
}

function get_plant_pag_count($mysqli)
  {
      $sql = "SELECT COUNT(`id`) AS total FROM `plant`";
      $count = $mysqli->query($sql);
      $total = $count->fetch_assoc();
      $page = ceil($total['total'] / 5) ;
      return $page;
  }
