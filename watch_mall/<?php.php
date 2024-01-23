<?php
require('connection.php');




$customer = "CREATE table staff
             ( 
                sid int(11) not null auto_increment primary key,
                sname varchar(60),
                email varchar(70),
                password varchar(40),
                phone varchar(11),
                dob date,
                gender varchar(10),
                customerprofile varchar(255),
                address text
                )";
$runquery = mysqli_query($connect,$staff);
if(!$runquery)
{
    echo "<script>console.log('Staff table not created!')</script>";
}
else
{
    echo "<script>console.log('Staff table sucessfully created!')</script>";
}
?>