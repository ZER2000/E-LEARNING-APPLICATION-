<?php include 'connection.php';
$id=$_GET['updateid'];
$sql="select * from students where id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $email=$row['email'];                 
    $phone=$row['phone'];
    $enrole_number=$row['enrole_number'];
    $date_of_admission=$row['date_of_admission'];


if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $enrole_number=$_POST['enrole_number'];
    $date_of_admission=$_POST['date_of_admission'];

    $sql="UPDATE students set  name='$name' ,email='$email' ,phone='$phone' ,enrole_number='$enrole_number' ,date_of_admission='$date_of_admission' where id=$id" ;
    $result=$connect->query($sql);
    header('location: Students.php');
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
  <title>Document</title>
</head>
<body>
    <main class="signin d-flex justify-content-center align-items-center ">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>Add student</strong></p>
              </div>
              <form class="px-4 py-2" method="POST">
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Name</label>
                       <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Email</label>
                       <input type="email" class="form-control" name="email" value="<?php echo $email ?>">
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Phone</label>
                       <input type="number" class="form-control" name="phone" value="<?php echo $phone ?>">
                  </div>
                  <div class="mb-1">
                       <label  class="form-label ">Enrolle number</label>
                       <input type="number" class="form-control" name="enrole_number" value="<?php echo $enrole_number ?>">
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Date of admission</label>
                       <input type="date" class="form-control" name="date_of_admission" value="<?php echo $date_of_admission ?>" >
                  </div>
                  
                  <input name="submit" type="submit" class="btn bg-info text-white w-100" value="update">
              </form>
          </div>
    </main>
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>