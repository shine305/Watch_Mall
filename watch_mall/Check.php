<?php
include('Connection.php');
date_default_timezone_set('Asia/Tokyo');
// default timezone Berlin

$select = "SELECT * from watch";
$run = mysqli_query($connect,$select);

echo date('d/m/Y') . "<br>";
$today = date('Y-m-d');
echo "database date format" . $today . "<br>";

$select = "SELECT * from Watch";
$run = mysqli_query($connect,$select);


if (isset($_POST['btncheckout']))
{
     $watchid = $_POST['txtwatch'];
     $Customername= $_POST['txtname'];
     $SaleQty = $_POST['tot_pin_requested'];
     $totalamount = $_POST['tot_amount'];
     $deliphone = $_POST['txtphone'];
     $deliaddress = $_POST['txtaddress'];
     $paymenttype = $_POST['rdopayment'];
     $folderpath = 'PaymentSlip/';
//      echo "<pre>";
//   var_dump($_FILES['filprofile']);
   // echo "</pre>";
     $targetfile = $folderpath . basename($_FILES['filprofile']['name']);
    if (file_exists($targetfile))
    {
       echo "<script>alert('Image already exist! Pls try with another image!')</script>";
       echo "<script>location = 'CheckOut.php'</script>";
   
    }
   else
   {
      move_uploaded_file($_FILES['filprofile']['tmp_name'],$targetfile);
      $insert = "INSERT INTO Sale(saleID,saleDate,watchID,CustomerName,SaleQty,TotalAmount) values('$watchid','$Customername','$SaleQty','$totalamount','$deliphone','$targetfile')";

     $runquery = mysqli_query($connect,$insert);
      if ($runquery)
      {
         echo "<script>alert('Success!')</script>";
         echo "<script>location = 'CheckOut.php'</script>";
      }
      else
      {
         echo "<script>alert('ERROR!')</script>";
       echo "<script>location = 'CheckOut.php'</script>";
      }
   }
     
   }

?>
