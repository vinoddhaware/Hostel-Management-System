<?php
include('../connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  .box {box-shadow:0 0 10px;padding:10px;border-radius:10px;text-align:center;}
  .col-sm-3 {margin-top:10px;}
  .table-bordered tr th {background:lightsteelblue;}
</style>
</head>
<body style="background:aliceblue;">
  <?php
  include('../top.php');
  ?>
  <br>
   <?php
  include('menus.php');
  ?>

  <div class="container-fluid">

    <h3 class="hidden-print">Last Attendance Activity</h3>
    <hr class="hidden-print" style="border:1px solid gray;margin-top:0px;">
    <button class="hidden-print" onclick="print()">Print</button><br><br>

   <div class="table-responsive">
     <table class="table table-bordered">
       <tr>
         <th>Sr No</th>
         <th>Stud Id</th>
         <th>Date</th>
         <th>Status</th>
         <th>Student Name</th>
         <th class="hidden-print">Contact</th>
         <th>Year</th>
       </tr>
       <?php
       $select = mysqli_query($con,"SELECT * FROM tbl_attendance WHERE reg_id = '".$_SESSION['reg_id']."' ");
       $counter = 1;
       while($row = mysqli_fetch_assoc($select)){
       ?>
       <tr>
         <td><?php echo $counter; ?></td>
         <td><?php echo $row['reg_id'] ?></td>
         <td><?php echo $row['adate'] ?></td>
         <td><?php echo $row['presenty'] ?></td>
         <td><?php echo $row['name'] ?></td>
         <td class="hidden-print"><?php echo $row['contact'] ?></td>
         <td><?php echo $row['year'] ?></td>
       </tr>
       <?php
       $counter++;
        }
       ?>
     </table>
   </div> 
   
 </div>
<br><br>
	
</body>
</html>