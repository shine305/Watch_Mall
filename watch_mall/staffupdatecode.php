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
    $sid = $_POST['txtsid'];
    $staffprofile = $_FILES['filprofile']['name'];

    if (empty($staffprofile))
    {
        // update data without profile
    }
    else
    {
        // update data with profile
        $folderpath = "StaffPicture/";
        $targetfile = $folderpath . basename($_FILES['filprofile']['name']);
        if (file_exists($targetfile))
        {
            echo "<script>alert('Image already exist! Pls try with another image!')</script>";
            echo "<script>location='StaffList.php'</script>";
        }
        else
        {
            move_uploaded_file($_FILES['filprofile']['tmp_name'],$targetfile);
            $update = "UPDATE staff set sname = '$sname',email = '$email',password = '$pass',phone = '$phone', dob = '$dob' ,address = '$address',staffprofile = '$targetfile' where sid = '$sid'";
            $runupdate = mysqli_query($connect,$update);
            if($runupdate)
            {
                echo "<script>alert('Staff Updated!')</script>";
                echo "<script>location='StaffList.php'</script>";
            }
            else
            {
                echo "<script>alert('Something Went Wrong! Pls Try Again')</script>";
                echo "<script>location='StaffList.php'</script>";
            }
        }
    }
   
}
?>