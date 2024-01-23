<?php
include('Connection.php');

if (isset($_POST['btnregister']))
{
     $name = $_POST['txtname'];
     $email = $_POST['txtemail'];
     $pass = $_POST['txtpassword'];
     $phone = $_POST['txtphone'];
     $dob = $_POST['txtdob'];
     $gender = $_POST['rdogender'];
     $address = $_POST['txtaddress'];
     $folderpath = "customerpicture/";
//      echo "<pre>";
//   var_dump($_FILES['filprofile']);
   // echo "</pre>";
     $targetfile = $folderpath . basename($_FILES['filprofile']['name']);
    if (file_exists($targetfile))
    {
       echo "<script>alert('Image already exist! Pls try with another image!')</script>";
       echo "<script>location = 'CustomerRegistration.php'</script>";
   
   }
   else
   {
      move_uploaded_file($_FILES['filprofile']['tmp_name'],$targetfile);
      $insert = "INSERT INTO customer(customername,email,password,phone,dob,gender,address,customerprofile) values('$name','$email','$pass','$phone','$dob','$gender','$address','$targetfile')";

     $runquery = mysqli_query($connect,$insert);
      if ($runquery)
      {
         echo "<script>alert('Success!')</script>";
         echo "<script>location = 'CustomerRegistration.php'</script>";
      }
      else
      {
         echo "<script>alert('ERROR!')</script>";
         echo "<script>location = 'CustomerRegistration.php'</script>";
      }
   }
     
   }

?>