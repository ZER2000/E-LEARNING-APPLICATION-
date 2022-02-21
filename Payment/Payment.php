<?php include '../Students/connection.php';
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
    <title>Payment</title>
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
                  <p><strong>Payment Details</strong></p>
              </div>
                <div>
                  <img class="pe-4" src="image/Vector.png" alt="play"> 
                  <button class="btn bg-info text-white fs-6 "><a href="addpayment.php"   class="text-white text-decoration-none" >ADD NEW PAYMENT</a></button>
                </div>  
          </section> 
        
          <section  class="tab table-responsive mx-4  pt-2   ">
                <table class="table table-borderless">
                    <thead >
                      <tr class="text-muted">
                        <th scope="col">Name</th>
                        <th scope="col">Payment Schedule</th>
                        <th scope="col">Bill Number</th>
                        <th scope="col">Amount Paid</th>
                        <th scope="col">Balance amount</th>
                        <th scope="col">Date </th>
                        <th scope="col"></th>
                      </tr>
                     </thead>
                   <tbody> 
                        <?php 
                            // $payment_list = array (
                            //      array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/vector (3).png"),
                            //      array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/vector (3).png")
                            //  );g ²& ²&a  
                          $sql="select * from payment_details";
                          $result=mysqli_query($connect,$sql);
                          if($result){
                            while($row=mysqli_fetch_assoc($result)){
                              $id=$row['id'];
                              $name=$row['name'];
                              $paymentschedule=$row['payment_schedule'];
                              $billnumber=$row['bill_number'];
                              $amountpaid=$row['amount_paid'];
                              $balanceamount=$row['balance_amount'];
                              $date=$row['date'];
                                 
                                echo '<tr>';
                                echo '<td class="align-middle">'.$name.'</td>';
                                echo '<td class="align-middle">'.$paymentschedule.'</td>';
                                echo '<td class="align-middle">'.$billnumber.'</td>';
                                echo '<td class="align-middle">'.$amountpaid.'</td>';
                                echo '<td class="align-middle">'.$balanceamount.'</td>';
                                echo '<td class="align-middle">'.$date.'</td>';
                                echo '<td class="align-middle" scope="row" class="align-middle"><img src="image/vector (3).png" alt="vue"></td>';
                                echo '</tr>';
                                        }
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