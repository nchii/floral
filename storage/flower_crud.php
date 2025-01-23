<?php
function save_flower($mysqli,$name,$color,$qty,$price,$img)
{
  $sql = "INSERT INTO `flower` (`name`,`color`,`qty`,`price`,`img`) VALUES ('$name','$color',$qty,$price,'$img')";
  return $mysqli->query($sql);
}

function get_all_flower($mysqli)
{
  $sql = "SELECT * FROM `flower`";
  return $mysqli->query($sql);

}

