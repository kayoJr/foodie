<?php
$server = "localhost";
$suname = "root";
$pass = "";
$db = "foodie";

$conn = mysqli_connect($server, $suname, $pass, $db);
if(!$conn){
    die("error: ".mysqli_error());
}

?>