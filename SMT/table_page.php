<?php require('connect.php'); ?>
<?php
$sql = "SELECT * FROM wildfire ORDER BY id DESC ";
$result=mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สถิติของระบบ</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<scrip src ="cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></scrip>
<script> $(document).ready( function () {
            $('#myTable').DataTable();
            } );
</script>
<!-- nav bar -->
 <?php require("navbar.php") ?>
<!-- table -->
<?php require('./table_data.php')?>
</body>
</html>