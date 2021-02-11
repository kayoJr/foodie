<?php
require 'conn.php';
$id = $_GET['rn'];

$sql = "delete from `cart` where `id` = '$id'";
$rs = mysqli_query($conn, $sql);
if($rs){
    header("Location: index.php?del=Removed");
}else{
    echo "not deleted";
}


?>