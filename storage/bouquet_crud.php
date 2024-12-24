<?php

function save_bouquet($mysqli,$bouquetName,$price,$description,$plantImg){
  $sql="INSERT INTO `bouquet`(`name`,`price`,`description`,`img`) VALUES ('$bouquetName',$price,'$description','$bouquetImg')";
  return $mysqli->query($sql);
}

function get_all_bouquets($mysqli){
  $sql="SELECT * FROM `bouquet`";
  return $mysqli->query($sql); 
}

function get_bouquet_details($mysqli,$id){
    $sql="SELECT * FROM `bouquet` WHERE `id`=$id";
    $plant = $mysqli->query($sql);
    return $plant->fetch_assoc(); 
  }



