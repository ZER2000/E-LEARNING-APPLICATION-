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
                <div class="pe-4">
                  <img class="" src="image/Vector.png" alt="play"> 
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
                            $payment_list = array (
                                 array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/play.png"),
                                 array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/play.png"),
                                 array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/play.png"),
                                 array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/play.png"),
                                 array("Name"=>"Karthi", "PaymentSchedule"=>"First", "BillNumber"=>"00012223", "AmountPaid"=>"100,000DH", "BalanceAmount"=>"500,000DH", "Date"=>"05-Jan-2022","logo"=>"image/play.png")
                             );
                             include '../json/function.php';
                             $payment= getpayment ();
                             foreach ($payment as $info) {  
                                 echo '<tr>';
                                 echo '<td class="align-middle">'.$info['Name'].'</td>';
                                 echo '<td class="align-middle">'.$info['PaymentSchedule'].'</td>';
                                 echo '<td class="align-middle">'.$info['BillNumber'].'</td>';
                                 echo '<td class="align-middle">'.$info['AmountPaid'].'</td>';
                                 echo '<td class="align-middle">'.$info['BalanceAmount'].'</td>';
                                 echo '<td class="align-middle">'.$info['Date'].'</td>';
                                 echo '<td class="align-middle" scope="row" class="align-middle"><img src="'.$info['logo'].'" alt=""></td>';
                                 echo '</tr>';
                                        };
                          ?>
                    </tbody>
              </table>
          </section>
        </div>    
    </main>  
  <script src="bootstrap.bundle.min.js"></script>
</body>
</html>