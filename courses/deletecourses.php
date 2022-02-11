<?php
include '../Students/connection.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from courses where id=$id";
    $result=mysqli_query($connect,$sql);
    header('location:courses.php');
}
?>