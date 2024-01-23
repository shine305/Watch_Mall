<?php
include('Connection.php');

if(isset($_GET['cid']))
{
    $customerid = $_GET['cid'];
    $delete = "DELETE from customer where cid = '$customerid'";
    $rundelete = mysqli_query($connect,$delete);
    if ($rundelete)
    {
        echo"<script>alert('Customer deleted')</script>";
        echo"<script>location='CustomerList.php'</script>";
    }
    else
    {
        echo"<script>alert('Something Went Wrong! Try Again!')</script>";
        echo"<script>location='CustomerList.php'</script>";
    }
}
else
    echo "<script>location='CustomerList.php'</script>";