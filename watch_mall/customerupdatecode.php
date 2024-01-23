<?php
include('Connection.php');

if (isset($_POST['btnupdate']))
{
    $sname = $_POST['txtname'];
    $email = $_POST['txtemail'];
    $pass = $_POST['txtpassword'];
    $phone = $_POST['txtphone'];
    $dob = $_POST['txtdob'];
    $address = $_POST['txtaddress'];
    $cid = $_POST['txtsid'];
    $customerprofile = $_FILES['filprofile']['name'];

    if (empty($customerprofile))
    {
        // update data without profile
    }
    else
    {
        // update data with profile
        $folderpath = "Customerpicture/";
        $targetfile = $folderpath . basename($_FILES['filprofile']['name']);
        if (file_exists($targetfile))
        {
            echo "<script>alert('Image already exist! Pls try with another image!')</script>";
            echo "<script>location='CustomerList.php'</script>";
        }
        else
        {
            move_uploaded_file($_FILES['filprofile']['tmp_name'],$targetfile);
            $update = "UPDATE customer set customername = '$customername',email = '$email',password = '$pass',phone = '$phone', dob = '$dob' ,address = '$address',customerprofile = '$targetfile' where cid = '$cid'";
            $runupdate = mysqli_query($connect,$update);
            if($runupdate)
            {
                echo "<script>alert('Customer Updated!')</script>";
                echo "<script>location='CustomerList.php'</script>";
            }
            else
            {
                echo "<script>alert('Something Went Wrong! Pls Try Again')</script>";
                echo "<script>location='CustomerList.php'</script>";
            }
        }
    }
   
}
?>