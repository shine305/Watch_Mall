<?php
$hostname ="localhost";
$username = "root";
$password = "";
$database = "watch_mall";

$connect = mysqli_connect($hostname,$username,$password,$database);

if(!$connect)
{
    echo "<script>console.log('Database connection error')</script>";
}
?>

<!--
    mysqli_connect(para1,para2,para3,para4);    => connect with database
    para1  => hostname(servername)
    para2  => username(sever login username)
    para3  => password(sever login username)
    para4  => database(connect database name)
-->