<?php require('connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>itOffside.com Pagination</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">
</head>
<body style="margin-top: 10px;">
<?php
    $perpage = 5;
    if (isset($_GET['page'])) {
    $page = $_GET['page'];
    } else {
    $page = 1;
    }
    $start = ($page - 1) * $perpage;
    $sql = "select * from wildfire limit {$start} , {$perpage} ";
    $query = mysqli_query($connect,$sql);
?>
<!-- table -->

 <div class="container">
 <div class="row">
 <div class="col-lg-12">
 <table class="table table-bordered table-hover">
 <thead>
 <tr>
            <th scope="col">ลำดับ</th>
            <th scope="col">วันที่ - เวลา</th>
            <th scope="col">รูปภาพ</th>
 </tr> 
 </thead>
 <tbody>
 <?php while ($result = mysqli_fetch_assoc($query)) { ?>
 <tr>
 <td><?php echo $result['id']; ?></td>
 <td><?php echo $result['date']; ?></td>
 <td><?php echo $result['price']; ?></td>
 </tr>
 <?php } ?>
 </tbody>
 </table>
 <?php
 $sql2 = "select * from products ";
 $query2 = mysqli_query($con, $sql2);
 $total_record = mysqli_num_rows($query2);
 $total_page = ceil($total_record / $perpage);
 ?>
 
 <nav>
 <ul class="pagination">
 <li>
 <a href="index.php?page=1" aria-label="Previous">
 <span aria-hidden="true">&laquo;</span>
 </a>
 </li>
 <?php for($i=1;$i<=$total_page;$i++){ ?>
 <li><a href="index.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
 <?php } ?>
 <li>
 <a href="index.php?page=<?php echo $total_page;?>" aria-label="Next">
 <span aria-hidden="true">&raquo;</span>
 </a>
 </li>
 </ul>
 </nav>
 </div>
 </div>
 </div> <!-- /container -->
 <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>