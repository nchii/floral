<?php 

function get_all_order($mysqli){
    $sql= "SELECT * FROM `invoice`";
    return $mysqli->query($sql);
}

function get_order_detail($mysqli){
$sql="SELECT `invoice`.order_no,`invoice`.total_amount,`invoice`.date,`user`.name from `invoice` inner join `user` on `invoice`.user_id=`user`.id;";
    return $mysqli->query($sql);
}