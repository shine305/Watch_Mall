<?php
require('Connection.php');




$customer = "CREATE table customer
             ( 
                cid int(11) not null auto_increment primary key,
                customername varchar(60),
                email varchar(70),
                password varchar(40),
                dob date,
                gender varchar(11),
                phone varchar(11),
                customerprofile varchar(255),
                address text
                )";
$runquery = mysqli_query($connect,$customer);
if(!$runquery)
{
    echo "<script>console.log(Customer table not created!)</script>";
}
else
{
    echo "<script>console.log(Customer table sucessfully created!)</script>";
}
?>
<!--             

