<?php include '../Students/connection.php';
$id=$_GET['updateid'];
$sql="select * from courses where id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $date=$row['date'];
    $links=$row['links'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $links=$_POST['links'];

    $sql="UPDATE courses set id=$id,name='$name' ,date='$date' ,links='$links' where id=$id" ;
    $result=$connect->query($sql);
    header('location:courses.php');
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
    <main class="signin d-flex justify-content-center align-items-center">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 m-4 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>Add courses</strong></p>
              </div>
              <form class="p-4" method="POST">
                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label ">Name</label>
                       <input type="text" class="form-control" name="name" value="<?php echo $name  ?>">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label ">Date</label>
                       <input type="date" class="form-control" name="date" value="<?php echo $date ?>">
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label ">Links</label>
                       <input type="text" class="form-control" name="links" value="<?php echo $links ?>">
                  </div>
                  <input name="submit" type="submit" class="btn bg-info text-white w-100" value="add">
              </form>
          </div>
    </main>
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
<