<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="studt.css">
    <title>update</title>
</head>
<body>
    <?php
      $studentid = $_GET['id'];
      include '../json/function.php';
      $student = getstudentbyid($studentid);
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        updateStudent($_POST,$studentid);
      }
    ?>
    <div class="container">  
        <form method="POST" >
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" name="Name" class="form-control" id="exampleInputPassword1" value="<?php echo $student['Name'] ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" value="<?php echo $student['Email'] ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="number" name="Phone" class="form-control" id="exampleInputPassword1" value="<?php echo $student['Phone'] ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Entroll Number</label>
                <input type="text" name="EnrollNumber" class="form-control" id="exampleInputPassword1" value="<?php echo $student['EnrollNumber'] ?>">
            </div>
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label">Date Of Addmision</label>
                <input type="text" name="Dateofadmission" class="form-control" id="exampleInputPassword1" value="<?php echo $student['Dateofadmission'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>    
</body>