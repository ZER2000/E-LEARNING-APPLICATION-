<?php include 'connection.php';
session_start(); 
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
                        <button class="btn bg-info text-white fs-6 "><a href="add.php"   class="text-white text-decoration-none" >ADD NEW STUDENT</a></button>
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
                        //  $students_list= array (
                        //      array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                        //      array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                        //      array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                        //      array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                        //  );
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
                             echo '<td  scope="row" class="align-middle bg-white aligne-middle">'."<img src=image/$image >".'</td>';
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
    </main>
  <script src="bootstrap.bundle.min.js"></script>  
</body>
</html>
<?php  } ?>

