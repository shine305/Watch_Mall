
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Registration</title>
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
    <h2 align="center">Watch Registration</h2>
    <form action="wregistercode.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Watch Name:</td>
                <td><input type="text" name="txtname" required placeholder="Pls Enter Name"></td>
            </tr>
            <tr>
                <td>Brand:</td>
                <td><input type="brand" name="txtbrand" required placeholder="Pls Enter Brand"></td>
            </tr>
            <tr>
                <td>Stockqty:</td>
                <td><input type="stockqty" name="txtstock" required placeholder="Pls Enter stock"></td>
            </tr>
            <tr>
                <td>Unitprice:</td>
                <td><input type="price" name="txtprice" required placeholder="Pls Enter Price"></td>
            </tr>
            <tr>
                <td>Watchphoto:</td>
                <td><input type="file" name="filprofile" required></td>
            </tr>
            <tr>
                <td>Description: </td>
                <td><textarea name="txtdescription" cols="19" rows="4" style="resize: none;" required placeholder="Pls Enter"></textarea></td>
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
