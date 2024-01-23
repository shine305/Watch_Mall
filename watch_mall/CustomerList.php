<?php
include('Connection.php');

$select = "SELECT * from customer ORDER BY customername";
$runselect = mysqli_query($connect,$select);
foreach ($runselect as $customerdata)
// {
//     echo "<pre>";
//     var_dump($staffdata);
//     echo "</pre>";
// }
// $fetchrow1 = mysqli_fetch_assoc($runselect);
// echo "<pre>";
// var_dump($fetchrow1);
// echo "</pre>";

// $fetchrow2 = mysqli_fetch_assoc($runselect);
// echo "<pre>";
// var_dump($fetchrow2);
// echo "</pre>";

// $fetchrow3 = mysqli_fetch_assoc($runselect);
// echo "<pre>";
// var_dump($fetchrow3);
// echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
</head>
<body>
    <h2 align='center'>Customer List</h2>
    <table  align="center" id="myTable" class="display">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Customer name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Profile</th>
                <th>Address</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($runselect as $customerdata)
            {
                echo "
                <tr>
                    <td>{$customerdata['cid']}</td>
                    <td>{$customerdata['customername']}</td>
                    <td>{$customerdata['email']}</td>
                    <td>{$customerdata['phone']}</td>
                    <td>{$customerdata['dob']}</td>
                    <td>{$customerdata['gender']}</td>
                    <td><img src='{$customerdata['Customerprofile']}' width='150px' height='150px'></td>
                    <td>{$customerdata['address']}</td>
                    <td><a href='CustomerUpdate.php?cid={$customerdata['cid']}'> Update </a> | <a href='CustomerDelete.php?cid={$customerdata['cid']}'> Delete </a></td> 
                </tr>";   
                // http://localhost/Tue_Thur(6_9)/watch_mall/StaffDelete.php?sid=1
            }
            ?>
        </tbody>
    </table>

    <script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
</body>
</html>