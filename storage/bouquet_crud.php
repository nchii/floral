<?php

function save_bouquet($mysqli,$bouquetName,$price,$description,$bouquetImg){
  $sql="INSERT INTO `bouquet`(`name`,`price`,`description`,`img`) VALUES ('$bouquetName',$price,'$description','$bouquetImg')";
  return $mysqli->query($sql);
}

function get_all_bouquets($mysqli){
  $sql="SELECT * FROM `bouquet`";
  return $mysqli->query($sql); 
}

function get_bouquet_details($mysqli,$id){
    $sql="SELECT * FROM `bouquet` WHERE `id`=$id";
    $bouquet = $mysqli->query($sql);
    return $bouquet->fetch_assoc(); 
  }



