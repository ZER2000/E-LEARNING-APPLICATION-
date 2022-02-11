<?php
$connect = mysqli_connect("localhost","root","","e-classe-db");
if($connect->connect_error){
    die("failed connection" .$connect->connect_error);
}
?>