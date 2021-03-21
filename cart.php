<?php
require 'conn.php';

$id = $_GET['rn'];
$num = $_GET['quant'];

$sql = "select * from `menu` where `id` = '$id'";
$rs = mysqli_query($conn, $sql);
if(mysqli_num_rows($rs)){
    while($row = mysqli_fetch_assoc($rs)){
        $pd_id= $row['id'];
        $pd_name = $row['name'];
        $pd_price = $row['price'];
        $t_price = $pd_price * $num;
        $sql = "select * from `cart` where `id` = '$pd_id'";
        $rs = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($rs);
        $cart = $row['id'];
        if($row[0] > 1){
            $upd = "update `cart` set `quant` = '$num' where `id`= '$pd_id'";
            $query = "UPDATE `cart` SET `id`='$pd_id',`name`='$pd_name',`price`='$pd_price',`quant`='$num',`sub_tot_price`='$t_price' WHERE `id`='$pd_id'";
            $rs2 = mysqli_query($conn, $query);
            if(!$rs2){
                echo "Not Added";
            }else{

                header("Location:index.php?msg=Updated");
                // echo "<script>
                // window.location.href='index.php?msg=Added';
                // </script>";
            }
            // if(mysqli_query($conn, $upd)){
            //     header("Location:index.php?warn=Updated");
            // }else{
            //     echo "error";
            // }
            // header("Location:index.php?warn=Already Added");
        }else{
            $query = "insert into `cart` (`id`, `name`, `price`,`quant`, `sub_tot_price`) values 
            ('$pd_id', '$pd_name', '$pd_price', '$num', '$t_price')";
            $rs2 = mysqli_query($conn, $query);
            if(!$rs2){
                echo "Not Added anything";
            }else{

               header("Location:index.php?msg=Added");
            
            }
        }
        
    }
}

?>