<?php include '../Students/connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $paymentschedule=$_POST['payment_schedule'];
    $billnumber=$_POST['bill_number'];
    $amountpaid=$_POST['amount_paid'];
    $balanceamount=$_POST['balance_amount'];
    $date=$_POST['date'];

    $sql= "INSERT INTO payment_details(name, payment_schedule, bill_number, amount_paid, balance_amount, date) VALUES ('$name','$paymentschedule','$billnumber','$amountpaid','$balanceamount','$date')";
    $result=$connect->query($sql);
    header('location: Payment.php');
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
  <title>Add Payment</title>
</head>
<body>
    <main class="signin d-flex justify-content-center align-items-center">
          <div class="signinf bg-white">
              <div>
                      <h3 class="border-start border-info border-5 mt-1 mx-5 px-1  "><strong>E-classe</strong></h3>
              </div>
              <div class="px-4 text-center">
                      <p class="sign"><strong>Add Payment</strong></p>
              </div>
              <form class="px-4 py-2" method="POST">

                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Name</label>
                       <input type="text" class="form-control" placeholder="Name" name="name" REQUIRED>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Payment Schedule</label>
                       <input type="text" class="form-control" placeholder="payment schedule" name="payment_schedule" REQUIRED>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Bill Number</label>
                       <input type="text" class="form-control" placeholder="Bill Number" name="bill_number" REQUIRED>
                  </div>
                  <div class="mb-1">
                       <label  class="form-label ">Amount Paid</label>
                       <input type="text" class="form-control" placeholder="Amount Paid" name="amount_paid" REQUIRED>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Balance amount</label>
                       <input type="text" class="form-control" placeholder="Balance amount" name="balance_amount" REQUIRED>
                  </div>
                  <div class="mb-1">
                       <label for="exampleInputEmail1" class="form-label ">Date</label>
                       <input type="date" class="form-control" placeholder="Date" name="date" REQUIRED>
                  </div>
                  <input name="submit" type="submit" class="btn bg-info text-white w-100" value="Add">
              </form>
          </div>
    </main>
     <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>