<?php
include 'connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from students where id=$id";
    $result=mysqli_query($connect,$sql);
    header('location:Students.php');
}
?>