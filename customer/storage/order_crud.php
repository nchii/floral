<?php 
function save_order($mysqli,$cart_list,$userId){
    $mysqli->begin_transaction();
    try {
        $total = 0;
        foreach ($cart_list as $item) { 
            $total = $total + $item['quantity']*$item['price'];
        }

        $sql = "INSERT INTO `invoice`( `user_id`,`total_amount`) VALUES ( $userId,$total)";
            if ($mysqli->query($sql)) {
                $lastId = $mysqli->insert_id;
                foreach ($cart_list as $item) { 
                    if($item['type']=='plant'){
                        $sql2 = "INSERT INTO `plant_order`( `plant_id`,`invoice_id`,`qty`)  VALUES ($item[id],$lastId ,$item[quantity])"; 
                    }else{
                        $sql2 = "INSERT INTO `bouquet_order`( `bouquet_id`,`invoice_id`,`qty`)  VALUES ($item[id],$lastId,$item[quantity])";
                    }
                    $mysqli->query($sql2);
                }
                $mysqli->commit();
            }else {
                $mysqli->rollback();
                echo "Error inserting into plant: " . $mysqli->error;
                die();
            }
    }catch (Exception $e) {
        $mysqli->rollback();
        echo "Transaction failed: " . $e->getMessage();
        die();
    }
}