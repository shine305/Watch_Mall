
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration</title>
    <link rel="shortcut icon" href="Media/Logo1.png" type="image/x-icon">
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
    <h2 align="center">Staff Registration</h2>
    <form action="sregistercode.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Staff Name</td>
                <td><input type="text" name="txtname" required placeholder="Pls Enter Name"></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txtemail" required placeholder="Pls Enter Email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtpassword" required placeholder="Pls Enter Password"></td>
            </tr>
            <tr>
                <td>Tel:</td>
                <td><input type="number" name="txtphone" required placeholder="Pls Enter Telephone"></td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="txtdob" required></td>
            </tr>
            
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="rdogender" checked value="male">Male
                <input type="radio" name="rdogender" value="female">Female</td>
            </tr>
            <tr>
                <td>Profile Picture: </td>
                <td><input type="file" name="filprofile" required></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><textarea name="txtaddress" cols="19" rows="4" style="resize: none;" required placeholder="Pls Enter Address"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="checkbox" name="chkterms">Agreed Terms & Conditions</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register" name="btnregister">
                    <input type="reset" value="clear">
                    <input type="buttom" value="Back" oneclick="history.back();"></td>
            </tr>

        </table>
    </form>
    
</body>
</html>
