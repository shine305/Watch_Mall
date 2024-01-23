<?php
include('Connection.php');

if (isset($_GET['cid']))
{
    $cid = $_GET['cid'];
    $select = "SELECT * FROM customer where cid = '$cid'";
    $run = mysqli_query($connect,$select);
    $customerdata = mysqli_fetch_assoc($run);

}
else
{
    echo "<script>location='CustomerList.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CustomerUpdate</title>
    <link rel="shortcut icon" href="Media/logo.PNG" type="image/x-icon">
</head>
<body>
     <style>
        form
        {
            width: 30%;
            margin: auto;
            padding: 20px;
        }
        input,form,h2,textarea
        {
            font-family: calibri;
            letter-spacing: 1px;
            word-spacing: 3px;
        }
        td
        {
            min-width: 40%;
        }
    </style>
    <h2 align="center">Customer Update</h2>
    <form action="customerupdatecode.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="txtsid" value="<?= $cid ?>">
        <table>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="txtname" required placeholder="Pls Enter Name" value="<?=$customerdata['customername']?>"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txtemail" required placeholder="Pls Enter Email" value="<?=$customerdata['email']?>"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtpassword" required placeholder="Pls Enter Password" value="<?=$customerdata['password']?>"></td>
            </tr>
            <tr>
                <td>Tel:</td>
                <td><input type="number" name="txtphone" required placeholder="Pls Enter Telephone" value="<?=$customerdata['phone']?>"></td>
            </tr>
            <tr>
                <td>Date of Birth: </td>
                <td><input type="date" name="txtdob" required value="<?=$customerdata['dob']?>"></td>
            </tr>
            <tr>
                <td>Profile Picture: </td>
                <td><input type="file" name="filprofile"></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><textarea name="txtaddress" cols="19" rows="4" style="resize: none;" required placeholder="Pls Enter Address"><?=$customerdata['address']?></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Update" name="btnupdate">
                    <input type="reset" value="clear">
                    <input type="buttom" value="Back" oneclick="history.back();"></td>
            </tr>

        </table>
    </form>
</body>
</html>