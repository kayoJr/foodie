<?php
require 'conn.php';

$sql = "truncate table `cart`";
$rs = mysqli_query($conn, $sql);
if($rs){
    header("Location:index.php?msg=Successfully Ordered");
}


?>