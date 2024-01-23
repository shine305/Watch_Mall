<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
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
    <h2 align="center">Staff Login</h2>
    <form action="slogincode.php" method="post" enctype="multipart/form-data">
        <table width="100%" height="150px">
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txtemail" required placeholder="Pls Enter Email"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="txtpassword" required placeholder="Pls Enter Password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register" name="btnlogin">
                    <input type="reset" value="clear">
                    <input type="buttom" value="Back" oneclick="history.back();"></td>
            </tr>

        </table>
    </form>
    
</body>
</html>
