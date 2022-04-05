<?php
session_start();
include 'Students/connection.php';
if(isset($_SESSION['name'])){
     header("location: Dashboard/Dashboard.php");
}else{

$email=$password='';
$errors=array('email'=>'','password'=>'','shek'=>'');  
if(isset($_POST['submit'])){
     if(empty($_POST['email'])){
               $errors['email'] ='An email is required ';
          }else{
               $email=$_POST['email'];
               if(!filter_var($email)){
                    $errors['email'] ='email must be a valid email adress ';   
               }
          }
     if(empty($_POST['password'])){
               $errors['password'] ='An password is required';
          }else{
               $password=$_POST['password'];
               $password=hash('md5' ,$password);
               if(!filter_var($password)){
                    $errors['password'] = 'password must be a valid  ';   
               }
          }
          
if(!array_filter($errors)){
$sql="select * from users where email='$email' && password='$password'";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$num=mysqli_num_rows($result);

echo $num;

     if($num== 1){
          $_SESSION['email']=$row['email'];
          $_SESSION['password']=$row['password'];
          $_SESSION['name']=$row['name'];
          if(isset($_POST['remember_me'])){
               setcookie('email' , $_SESSION['email'] , time() + 60*60*24 ,  null , null , false , true);
               setcookie('password' , $_SESSION['password'] , time() + 60*60*24 , null , null , false , true);
          }else {
               setcookie('email' , $_SESSION['email'] , time() + 60*20 ,  null , null , false , true);
               setcookie('password' , $_SESSION['password'] , time() + 60*20 , null , null , false , true);
          }
          header("location: Dashboard/Dashboard.php");
}else{
     $errors['shek']='Email or password not valid ';
  }
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>SIGN IN</title>
</head>
<body>
    <main class="signin d-flex justify-content-center align-items-center">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 m-4 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>SIGN IN</strong></p>
                     <p class="enter text-muted ">Enter your credentials to access your account</p>
              </div>
              <form class="p-4" method="POST">
                  <div class="mb-3">
                       <div class="text-danger"><?php echo $errors['shek']   ?></div>
                       <label for="exampleInputEmail1" class="form-label ">Email</label>
                       <input type="email" class="form-control" placeholder="Enter your email" name="email" value="<?php echo htmlspecialchars($email);  ?>">
                       <div class="text-danger"><?php echo $errors['email']  ?></div>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputPassword1" class="form-label">Password</label>
                       <input type="password" class="form-control" placeholder="Enter your password" name="password" value="<?php echo htmlspecialchars($password); ?>">
                       <div class="text-danger"><?php echo $errors['password']  ?></div>
                       <input type="checkbox" class="form-check-input" name="remember_me" >
                       <label class="form-check-label" for="exampleCheck1">Remenber me</label>
                    </div>
                        <button  type="submit" class="btn bg-info text-white w-100" name="submit" >SIGN IN</button>
                  <div class="forget  mt-3 text-center  ">
                       <span>Forgot your password?<a class="text-info"><strong>Reset Password</strong> </a></span>
                       <span ><a class="text-info ms-5 " href="signup.php"><strong>sign up</strong></a></span>
                  </div>
              </form>
          </div>
    </main>
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php  }   ?>