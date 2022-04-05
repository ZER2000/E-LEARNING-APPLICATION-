<?php include 'connection.php';
session_start(); 
if(isset($_POST['submit'])){
  $name=$_POST['image'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $enrole_number=$_POST['enrole_number'];
  $date_of_admission=$_POST['date_of_admission'];
  $sql="INSERT INTO students (name,email,phone,enrole_number,date_of_admission) VALUES ('$name','$email','$phone','$enrole_number','$date_of_admission')";
  $result=$connect->query($sql);
  header('location:Students.php');
}
if(empty($_SESSION['name'])){
     header("location: ../index.php");
}else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Student</title>
</head>
<body>
    <main class="row w-100 h-100"> 
        <?php
           include '../decoupage/sidbar.php'
        ?>   

        <div class="container-fuild  mt-2 col">
            <?php
              include '../decoupage/nav.php'
            ?>   

          <section class="d-flex flex-row justify-content-between align-items-center px-4 pt-2">
                <div>
                        <p><strong>Students List</strong></p>
                </div>
                <div class="nvr d-flex flex-row align-items-center">
                    <div class="pe-4">
                        <img class="" src="image/Vector.png" alt="liste">
                    </div>  
                    <div>  
                        <button class="btn bg-info text-white fs-6 " data-bs-toggle="modal" data-bs-target="#exampleModal"  >Add new students</button>
                    </div>  
                </div>
          </section> 
        
         <section  class="tab table-responsive mx-4  pt-2 ">
            <table class="table table-borderless">
                    <thead >
                      <tr class=" text-muted">
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Enrole number</th>
                        <th scope="col">Date of admission</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                 <tbody>
                     <?php
                        $sql="select * from students";
                        $result=mysqli_query($connect,$sql);
            
                          while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $image=$row['image'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $phone=$row['phone'];
                            $enrole_number=$row['enrole_number'];
                            $date_of_admission=$row['date_of_admission'];
                     
                            echo '<tr><td></td></tr>';
                             echo ' <tr class ="">'; 
                             echo '<td  scope="row" class="align-middle bg-white aligne-middle"><img src="image/student.png" alt="students" ></td>';
                             echo '<td class="align-middle bg-white">'.$name.'</td>';
                             echo '<td class="align-middle bg-white">'.$email.'</td>';
                             echo '<td class="align-middle bg-white">'.$phone.'</td>';
                             echo '<td class="align-middle bg-white">'.$enrole_number.'</td>';
                             echo '<td class="align-middle bg-white">'.$date_of_admission.'</td>';
                             echo '<td scope="row" class="align-middle bg-white"><a href="update.php ?updateid='.$id.'"><img src="image/vector (1).png" alt="logo1"></a></td>';
                             echo '<td scope="row" class="align-middle bg-white"><a href="delete.php ?deleteid='.$id.'"><img src="image/vector (2).png" alt="Logo2"></a></td>';
                             echo ' </tr>';
                          }
                                           
                     ?>
 
                </tbody>
            </table>
        </section>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 mt-1 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>Add student</strong></p>
              </div>
              <form class="px-4 py-2" method="POST" id="form">
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Name</label>
                       <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                       <small class="text-danger" id="messagename" ></small>

                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Email</label>
                       <input type="text" class="form-control" placeholder="Email" name="email" id="email" >
                       <small class="text-danger" id="messageemail" ></small>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Phone</label>
                       <input type="text" class="form-control" placeholder="Phone" name="phone" id="phone" >
                       <small class="text-danger" id="messagephone" ></small>
                  </div>
                  <div class="mb-1">
                       <label  class="form-label ">Enrolle number</label>
                       <input type="text" class="form-control" placeholder="Enrolle number" name="enrole_number" id="number">
                       <small class="text-danger" id="messagenumber" ></small>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Date of admission</label>
                       <input type="date" class="form-control" placeholder="Date of admission" name="date_of_admission" id="date">
                       <small class="text-danger" id="messagedate" ></small>
                  </div>
                  <button  type="submit" class="btn bg-info text-white w-100" name="submit" >Add</button>
              </form>
          </div>
      </div>
    </div>
  </div>
</div>    
    </main>
  <script src="students.js"></script>
  <script src="bootstrap.bundle.min.js"></script>  
</body>
</html>
<?php  } ?>

