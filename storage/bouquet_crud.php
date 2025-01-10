<?php

function save_bouquet($mysqli,$bouquetName,$price,$description,$bouquetImg){
  $sql="INSERT INTO `bouquet`(`name`,`price`,`description`,`img`) VALUES ('$bouquetName',$price,'$description','$bouquetImg')";
  var_dump($sql);
  return $mysqli->query($sql);
}

function get_all_bouquets($mysqli){
  $sql="SELECT * FROM `bouquet`";
  return $mysqli->query($sql);
}

function get_all_bouquets_filter($mysqli,$search){
  $sql="SELECT * FROM `bouquet` where `name` like '%$search%'";
  return $mysqli->query($sql); 
}

function get_bouquet_details($mysqli,$id){
    $sql="SELECT * FROM `bouquet` WHERE `id`=$id";
    $bouquet = $mysqli->query($sql);
    return $bouquet->fetch_assoc(); 
}
function get_bouquet_id($mysqli,$id){
  $sql = "SELECT * FROM `bouquet` WHERE `id`=$id";
  $resule = $mysqli->query($sql);
  return $resule->fetch_assoc();
}

function update_bouquet($mysqli,$bouquetName,$price,$description,$bouquetImg,$id){
  $sql= "UPDATE `bouquet` SET `name`='$bouquetName',`price`='$price',`description`='$description',`img`='$bouquetImg' WHERE `id`=$id";
  return $mysqli->query($sql);
}
function delete_bouquet($mysqli, $id){
  $sql = "DELETE FROM `bouquet` WHERE `id` = $id";
  try {
    $mysqli->query($sql);
    return true;
  } catch (\Throwable $th) {
    return false;
  }
}

function get_bouquet_pag_count($mysqli)
  {
      $sql = "SELECT COUNT(`id`) AS total FROM `bouquet`";
      $count = $mysqli->query($sql);
      $total = $count->fetch_assoc();
      $page = ceil($total['total'] / 5) ;
      return $page;
  }

