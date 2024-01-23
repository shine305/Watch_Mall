<?php
include('Connection.php');

if(isset($_GET['sid']))
{
    $staffid = $_GET['sid'];
    $delete = "DELETE from staff where sid = '$staffid'";
    $rundelete = mysqli_query($connect,$delete);
    if ($rundelete)
    {
        echo"<script>alert('Staff deleted')</script>";
        echo"<script>location='StaffList.php'</script>";
    }
    else
    {
        echo"<script>alert('Something Went Wrong! Try Again!')</script>";
        echo"<script>location='StaffList.php'</script>";
    }
}
else
    echo "<script>location='StaffList.php'</script>";