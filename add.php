<?php
require 'conn.php';

if(isset($_POST['submit'])){
    $picture = $_FILES['file']['name'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $type = $_POST['select'];
    $temp = $_FILES['file']['tmp_name'];
    $target = "img/".basename($picture);
    $sql = "insert into `menu` (`name`, `price`, `picture`, `type`) values ('$name', '$price', '$picture', '$type')";
    $rs = mysqli_query($conn, $sql);
    if($rs){

        if(move_uploaded_file($temp, $target)){
            header("Location: admin.php?msg=Food Added To Menu");
        }else{
            header("Location: admin.php?warn=Food Not Added To Menu");
        }
    }else{
        echo "Error".mysqli_error();
    }
}

?>