<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['image'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $enrole_number=$_POST['enrole_number'];
    $date_of_admission=$_POST['date_of_admission'];
    $sql="INSERT INTO students (image,name,email,phone,enrole_number,date_of_admission) VALUES ('$image','$name','$email','$phone','$enrole_number','$date_of_admission')";
    $result=$connect->query($sql);
    header('location:Students.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <title>Add students</title>
</head>
<body>
    <main class="signin d-flex justify-content-center align-items-center">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 mt-1 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>Add student</strong></p>
              </div>
              <form class="px-4 py-2" method="POST" id="form">
                  <!-- <div class="mb-1">
                        <label class="form-label">Image student</label>
                        <input class="form-control" type="file" name="image">
                        <span class="text-danger" ></span>
                  </div> -->
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Name</label>
                       <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                       <span class="text-danger" id="messagename" ></span>

                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Email</label>
                       <input type="email" class="form-control" placeholder="Email" name="email" id="email" >
                       <span class="text-danger" id="messageemail" ></span>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Phone</label>
                       <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" >
                       <span class="text-danger" id="messagephone" ></span>
                  </div>
                  <div class="mb-1">
                       <label  class="form-label ">Enrolle number</label>
                       <input type="text" class="form-control" placeholder="Enrolle number" name="enrole_number" id="number">
                       <span class="text-danger" id="messagenumber" ></span>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Date of admission</label>
                       <input type="date" class="form-control" placeholder="Date of admission" name="date_of_admission">
                  </div>
                  <button  type="submit" class="btn bg-info text-white w-100" name="submit" >Add</button>
              </form>
          </div>
    </main>
    <script src="students.js"></script>

</body>
</html>