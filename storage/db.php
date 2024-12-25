<?php


    $mysqli = new mysqli("localhost","root","");
    if($mysqli->connect_error){
        echo "Cann't not connect database!";
    }else{
        $sql = "CREATE DATABASE IF NOT EXISTS `floral`";
        if($mysqli->query($sql)){
                if($mysqli->select_db("floral")){
                   if(!create_table($mysqli)){
                        echo "Can not create tables!";
                        die();
                   }
            
                }
            }
        }


    function create_table($mysqli){

        $sql = "CREATE TABLE IF NOT EXISTS `user` (`id` INT AUTO_INCREMENT ,`name` VARCHAR(45) NOT NULL,`email` VARCHAR(45) NOT NULL UNIQUE, `phone` VARCHAR(45),`address` VARCHAR(225) ,`password` VARCHAR(100) NOT NULL,`role` INT DEFAULT 2, `profile` LONGTEXT NOT NULL, PRIMARY KEY(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }
    
        /*$sql = "CREATE TABLE IF NOT EXISTS `flower`(`flower_id` INT AUTO_INCREMENT , `flower_name` VARCHAR(45) NOT NULL ,`color` VARCHAR(45) NOT NULL,PRIMARY KEY(`flower_id`))";
        if(!$mysqli->query($sql)){
            return false;
        }*/
    
        $sql = "CREATE TABLE IF NOT EXISTS `bouquet`(`id` INT AUTO_INCREMENT,`name` VARCHAR(45) NOT NULL, `description` VARCHAR(225) NOT NULL,`price` INT NOT NULL,`img` LONGTEXT NOT NULL,PRIMARY KEY(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }
        
        $sql = "CREATE TABLE IF NOT EXISTS `bouquet_items`(`id` INT AUTO_INCREMENT ,`bouquet_id` INT NOT NULL, `flower` VARCHAR(45) NOT NULL ,`qty` INT NOT NULL,PRIMARY KEY(`id`),FOREIGN KEY (`bouquet_id`) REFERENCES `bouquet`(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }
    
        /*
        $sql = "CREATE TABLE IF NOT EXISTS `plant_type`(`plant_type_id` INT AUTO_INCREMENT,`plant_type_name` VARCHAR(45) NOT NULL, `description` VARCHAR(225) NOT NULL,PRIMARY KEY(`plant_type_id`))";
        if(!$mysqli->query($sql)){
            return false;
        }*/
    
        $sql = "CREATE TABLE IF NOT EXISTS `plant`(`id` INT AUTO_INCREMENT,`name` VARCHAR(45) NOT NULL, `price` INT NOT NULL,`description` VARCHAR(225) NOT NULL,`img` LONGTEXT NOT NULL,`size` VARCHAR(45) NOT NULL ,PRIMARY KEY(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }
    
        $sql = "CREATE TABLE IF NOT EXISTS `invoice`(`id` INT AUTO_INCREMENT,`user_id` INT NOT NULL,`total_amount` INT NOT NULL,PRIMARY KEY(`id`),FOREIGN KEY (`user_id`) REFERENCES `user`(`id`) )";
        if(!$mysqli->query($sql)){
            return false;
        }
    
        $sql = "CREATE TABLE IF NOT EXISTS `bouquet_order` (`id` INT AUTO_INCREMENT,`bouquet_id` INT NOT NULL,`invoice_id` INT NOT NULL,PRIMARY KEY(`id`), FOREIGN KEY (`bouquet_id`) REFERENCES `bouquet`(`id`), FOREIGN KEY (`invoice_id`) REFERENCES `invoice`(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }
        $sql = "CREATE TABLE IF NOT EXISTS `plant_order`(`id` INT AUTO_INCREMENT,`plant_id` INT NOT NULL,`invoice_id` INT NOT NULL,PRIMARY KEY(`id`),FOREIGN KEY (`plant_id`) REFERENCES `plant`(`id`), FOREIGN KEY (`invoice_id`) REFERENCES `invoice`(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }
        // $sql = "CREATE TABLE IF NOT EXISTS `plant_order_list` (
        //         `plant_order_list_id` INT AUTO_INCREMENT,
        //         `plant_order_id` INT NOT NULL,
        //         `plant_id` INT NOT NULL,
        //         PRIMARY KEY (`plant_order_list_id`),
        //         FOREIGN KEY (`plant_order_id`) REFERENCES `plant_order`(`plant_order_id`),
        //         FOREIGN KEY (`plant_id`) REFERENCES `plant`(`plant_id`))";
        // if(!$mysqli->query($sql)){
        //     return false;
        // }
        // $sql = "CREATE TABLE IF NOT EXISTS `flower_order_list`(`flower_order_list_id` INT AUTO_INCREMENT,`bouquet_id` INT NOT NULL,`order_id` INT NOT NULL,PRIMARY KEY(`flower_order_list_id`),FOREIGN KEY(`bouquet_id`) REFERENCES `bouquet`(`bouquet_id`),FOREIGN KEY(`order_id`) REFERENCES `order`(`order_id`))";
        // if(!$mysqli->query($sql)){
        //     return false;
        // }
        // $sql = "CREATE TABLE IF NOT EXISTS `bouquet_item`(`bouquet_item_id` INT AUTO_INCREMENT,`qty` INT NOT NULL,`bouquet_id` INT NOT NULL,`flower_id` INT NULL,PRIMARY KEY(`bouquet_item_id`),FOREIGN KEY(`bouquet_id`) REFERENCES `bouquet`(`bouquet_id`),FOREIGN KEY(`flower_id`) REFERENCES `flower`(`flower_id`))";
        // if(!$mysqli->query($sql)){
        //     return false;
        // }
        /*
        $sql = "CREATE TABLE IF NOT EXISTS `admin`(`id` INT AUTO_INCREMENT,`name` VARCHAR(45) NOT NULL,`email` VARCHAR(85) NOT NULL,`password` VARCHAR(225) NOT NULL,`role` INT NOT NULL,PRIMARY KEY(`id`))";
        if(!$mysqli->query($sql)){
            return false;
        }*/

        return true;
    }