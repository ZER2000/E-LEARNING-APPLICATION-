<?php include '../Students/connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $links=$_POST['links'];
    $sql="INSERT INTO courses (name,date,links) VALUES ('$name','$date','$links')";
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
                       <input type="text" class="form-control" placeholder="Name" name="name" REQUIRED>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label ">Date</label>
                       <input type="date" class="form-control" placeholder="Phone" name="date" REQUIRED>
                  </div>
                  <div class="mb-3">
                       <label for="exampleInputEmail1" class="form-label ">Links</label>
                       <input type="text" class="form-control" placeholder="links" name="links" REQUIRED>
                  </div>
                  <input name="submit" type="submit" class="btn bg-info text-white w-100" value="add">
              </form>
          </div>
    </main>
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>