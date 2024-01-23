<?php
include('Connection.php');
date_default_timezone_set('Asia/Tokyo');
// default timezone Berlin

$select = "SELECT * from watch";
$run = mysqli_query($connect,$select);

echo date('d/m/Y') . "<br>";
$today = date('Y-m-d');
echo "database date format" . $today . "<br>";

$select = "SELECT * from Watch";
$run = mysqli_query($connect,$select);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center">View Watch</h2>
    <fieldset>
        <div class="container-md">
            <div class="row p-3">
                <?php
                foreach($run as $watchdata)
                {
                    echo
                    "<div class='col-md-4 mb-4'>
                    <div class='card border-0' style='box-shadow: 1px 1px 10px 1px grey;'>
                       <img src='{$watchdata['watchphoto']}' class='card-img-top' style='height: 380px;'>
                       <div class='card-body'>
                            <h5 class='card-title' style='min-height: 50px;'>{$watchdata['watchname']}</h5> 
                            <p class='card-text' style='min-height: 165px;'>{$watchdata['description']}</p>
                            <a href='CheckOut.php'?watchid={$watchdata['watchid']} class='btn btn-primary'>More Detail</a>
                    </div>
                    </div>
                    </div>";
                }
                ?>
            </div>

        </div>
    </fieldset>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
