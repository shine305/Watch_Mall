
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out2</title>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <style>
       h3{
        width: 100%;
        text-align: center;
        border-bottom: 1px solid black;
        line-height: 0.9em;
        margin: 20px 0 20px;
       }
       h3 span {
        background: #ffffff;
        padding: 0 10px;
       }
    </style>
   <fieldset>
    <legend><h4>Apple Watch Ultra2</h4></legend>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Mall</title>
</head>
<body>
    
    <style>
        #flex-container
        {
            width: 350px;
            padding: 15px;
            font-family: calibri;
            font-size: 13pt;
            display: flex;

        }
        td{min-width: 150px; padding: 5px 15px;}
        a
        {
            text-decoration: none;
            color: rgb(199, 187, 211);

            padding: 6px 25px;
            display: block;
            width: fit-content;
            background-color: black;
            border-radius: 10px;
            
        }
        #dis
        {
            height: 2%;
            margin:10px;
        }
    </style>
    <div id="flex-container">

        <img src="watchphoto/Ultra2.jpg" width="100%" height="300px">
        <table>
            <tr>
                <td>Watch:</td>
                <td>Apple Watch Ultra 2</td>
            </tr>
            <tr>
                <td>Brand:</td>
                <td>APPLE</td>
            </tr>
            <tr>
                <td>Color:</td>
                <td>Orange</td>
            </tr>
            <tr>
                <td>Stock:</td>
                <td>2 pcs</td>
            </tr>
            <tr>
                <td>Unit price:</td>
                <td>128800円</td>
            </tr>
            <tr>
                <td>
                    <label class="w3-text-green">Order Qty:</label>
                    
                </td>
                <td><select name="tot_pin_requested" onchange="calculateAmount(this.value)" required>
                    <option value="0"></option>
               <option value="1">1</option>
               <option value="2">2</option>     
               <option value="3">3</option>     
               <option value="4">4</option>     
               <option value="5">5</option>     
               <option value="6">6</option>     
               <option value="7">7</option>     
               <option value="8">8</option>     
               <option value="9">9</option>     
               <option value="10">10</option>
             </select>          </td>
            </tr>
            <tr>
                <td> <label for="">Total Amount:</label></td>
                <td><input class="" name="tot_amount" id="tot_amount" type="text" readonly></td>
            </tr>
            <tr>
                <td colspan="2" align="left"><a href="CustomerRegistration.php">Check Out</a></td>
                <script>
                    function calculateAmount(val)
                    {
                        var tot_price = val * 128800;
            
                        var divobj = document.getElementById('tot_amount');
                        divobj.value = tot_price;
                    }
                </script> 
            </tr>
        </table>
        </fieldset>
   <fieldset>
    <legend>Delivery Info</legend>
    <table>
    <tr>
        <td>Customer Name:</td>
        <td><input type="text" name="txtname" required placeholder="Mg Mg"></td>
    </tr>
    <tr>
        <td>Contact Phone:</td>
        <td><input type="number" name="txtphone" required placeholder="0805836662"></td>
    </tr>
    <tr>
        <td>Contact Address:</td>
        <td><textarea name="txtaddress" cols="19" rows="4" style="resize: none;" required placeholder="No.00, 00th floor A,Example Street,Example Township,City"></textarea></td>
    </tr>
    </table>
   </fieldset>
   <fieldset>
    <legend>Payment Info</legend>
    <form action="">
         <input type="radio" name="rdopayment" checked id="cod"> cash On delivery |
         <input type="radio" name="rdopayment" id="op"> Online Payment
         <p style="margin-left: 27px; border: 2px solid black; border-radius:5px; width:fit-content; padding:10px; font-family:calibri; line-height:1.5;" id="bank-acc">
            Kpay: 094878757845 <br>
            CBpay: 09854768456 <br>
            AYApay:009654845689 <br>
            Slip: <input type="file" required>
         </p>
         <p><button>Submit</button></p>
    </form>
    <script>
        $('#bank-acc').hide();
        $('input[type="file"]').removeAttr('required');
        $('#cod').click(function(){
             $('#bank-acc').fadeOut(1000);
             $('input[type="file"]').removeAttr('required');
         });
         $('#op').click(function(){
             $('#bank-acc').fadeIn(1000);
             $('input[type="file"]').attr('required','');
         });
     </script>
   </fieldset>

    </div>
    <div id="dis"> <a href="CheckOut3.php">Next page</a></div>