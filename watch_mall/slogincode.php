<?php
include('Connection.php');
if (isset($_POST['btnlogin']))
{
    $email = $_POST['txtemail'];
    $pass  = $_POST['txtpassword'];


    $select = "SELECT * from staff where email = '$email' and password = '$pass'";
    $runselect = mysqli_query($connect,$select);
    $count = mysqli_num_rows($runselect); // count data rows
    if ($count == 0)
    {
        echo"<script>alert('Email or Password may be wrong!')</script>";
        echo"<script>location='StaffLogin.php'</script>";
    }
    else
    {
        echo"<script>alert('Login Successful!')</script>";
        echo"<script>location='StaffLogin.php'</script>"; 
    }
}
?>