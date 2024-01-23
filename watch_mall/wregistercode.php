<?php
include('Connection.php');

if (isset($_POST['btnregister']))
{
     $name = $_POST['txtname'];
     $brand = $_POST['txtbrand'];
     $stock = $_POST['txtstock'];
     $unit_price = $_POST['txtprice'];
     $description = $_POST['txtdescription'];
     $folderpath = 'watchphoto/';
//      echo "<pre>";
//   var_dump($_FILES['filprofile']);
   // echo "</pre>";
     $targetfile = $folderpath . basename($_FILES['filprofile']['name']);
    if (file_exists($targetfile))
    {
       echo "<script>alert('Image already exist! Pls try with another image!')</script>";
       echo "<script>location = 'WatchRegistration.php'</script>";
   
    }
   else
   {
      move_uploaded_file($_FILES['filprofile']['tmp_name'],$targetfile);
      $insert = "INSERT INTO Watch(watchname,brand,stockqty,unitprice,description,watchphoto) values('$name','$brand','$stock','$unit_price','$description','$targetfile')";

     $runquery = mysqli_query($connect,$insert);
      if ($runquery)
      {
         echo "<script>alert('Success!')</script>";
         echo "<script>location = 'WatchRegistration.php'</script>";
      }
      else
      {
         echo "<script>alert('ERROR!')</script>";
       echo "<script>location = 'WatchRegistration.php'</script>";
      }
   }
     
   }

?>