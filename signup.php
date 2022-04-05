<?php
    include 'Students/connection.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=hash('md5' ,$password);
    $sql= "INSERT INTO  users (name , email , password ) VALUES ('$name','$email','$password')";
    $result=$connect->query($sql);
    header("location:index.php");
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>SIGN UP</title>
</head>
<body>
        <main class="signin d-flex justify-content-center align-items-center">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 m-2 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-1 text-center">
                      <p class="sign"><strong>SIGN UP</strong></p>
                     <p class="enter text-muted ">Enter your credentials to access your account</p>
              </div>
              <form class="px-4 pb-3" method="POST" id="form" >
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Name</label>
                       <input type="text" class="form-control" placeholder="Enter your name" id="name" name="name" >
                       <small id="messagename" class="text-danger"></small>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Email</label>
                       <input type="text" class="form-control" placeholder="Enter your email" id="email"  name="email" >
                       <small id="messageemail" class="text-danger "></small>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputPassword1" class="form-label">Password</label>
                       <input type="password" class="form-control" placeholder="Enter your password" id="password"  name="password">
                       <small id="messagepassword" class="text-danger "></small>
                  </div>
                  <div class="mb-1">    
                       <label for="exampleInputPassword1" class="form-label">Confirm your Password</label>
                       <input type="password" class="form-control" placeholder="Confirm your  password" id="conpassword" name="conpassword">
                       <small id="messageconfpass" class="text-danger "></small>
                   </div>
                        <button  type="submit" class="btn bg-info text-white w-100" name="submit" >SIGN UP</button>
              </form>
          </div>
    </main>
     <script src="script.js"></script>
</body>
</html>
