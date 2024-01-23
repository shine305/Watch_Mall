<?php
include('Connection.php');

$select = "SELECT * from staff ORDER BY sname";
$runselect = mysqli_query($connect,$select);
foreach ($runselect as $staffdata)
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
    <title>Staff List</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    
</head>
<body>
    <h2 align='center'>Staff List</h2>
    <table  align="center" id="myTable" class="display">
        <thead>
            <tr>
                <th>Staff ID</th>
                <th>Staff name</th>
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
            foreach ($runselect as $staffdata)
            {
                echo "
                <tr>
                    <td>{$staffdata['sid']}</td>
                    <td>{$staffdata['sname']}</td>
                    <td>{$staffdata['email']}</td>
                    <td>{$staffdata['phone']}</td>
                    <td>{$staffdata['dob']}</td>
                    <td>{$staffdata['gender']}</td>
                    <td><img src='{$staffdata['staffprofile']}' width='150px' height='150px'></td>
                    <td>{$staffdata['address']}</td>
                    <td><a href='StaffUpdate.php?sid={$staffdata['sid']}'> Update </a> | <a href='StaffDelete.php?sid={$staffdata['sid']}'> Delete </a></td> 
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