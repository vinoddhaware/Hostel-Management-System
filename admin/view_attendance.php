 <?php
include('../connect.php');


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Attendance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


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

    <form method="post" enctype="multipart/form-data">
      <div class="row hidden-print">
        <div class="col-sm-5">
          <h3 style="margin-top:0px;background:steelblue;padding:10px;color:white;width:50%;border-radius:0 40px 40px 0">Search Attendance</h3>
          <button class="hidden-print" onclick="print()">Print</button><br><br>
        </div>
        <div class="col-sm-3">
         <form method="post">
          <div class="input-group">
    <input type="date" class="form-control" name="search" value="<?php echo date('Y-m-d') ?>" required>
    <span class="input-group-addon">
      <button style="background:none;border:none;" type="submit" name="searchbtn">
      <i class="glyphicon glyphicon-search"></i>
  </button>
    </span>
  </div>
</form>
        </div>
         <div class="col-sm-4">
          <form method="post">
         <div style="margin-top:5px;" class="input-group">
    <input style="width:50%;float:left;" type="date" name="from" class="form-control" placeholder="From">
    <input style="width:50%;float:left;" type="date" name="to" class="form-control" placeholder="To">
    <span class="input-group-addon">
      <button style="border:none;background:none;" type="submit" name="fromto">
      <i class="glyphicon glyphicon-search"></i>
      </button>
    </span>
  </div>
</form>
        </div>

      </div>
      <br>

   <div class="table-responsive">
    <?php
     if(isset($_POST['searchbtn']))
       {
        $search = $_POST['search'];
       $select = mysqli_query($con,"SELECT * FROM tbl_attendance WHERE adate = '".$search."' ");
  
    ?>
     <table class="table table-bordered">
       <thead>
         <tr>
           <th>Sr No</th>
           <th>Date</th>
           <th>Action</th>
           <th>Name</th>
           <th>Contact</th>
           <th>Admissin Year</th>
         </tr>
       </thead>
       
       <?php
       $counter = 1;
       while($datarow = mysqli_fetch_assoc($select))
       {
       ?>
       <tbody id="myTable">
        
         <tr>
           <td><?php echo $counter;?></td>
           
           <td><?php echo $datarow['adate'] ?></td>
           <td><?php echo $datarow['presenty'] ?></td>
           <td><?php echo $datarow['name'] ?></td>
           <td><?php echo $datarow['contact'] ?></td>
           <td><?php echo $datarow['year'] ?></td>
          
         </tr>
       
       </tbody>
       <?php
       $counter++;
        }}
       ?>
       
     </table>
   </div>

   <!-- in between search start -->
   <div class="table-responsive">
    <?php
     if(isset($_POST['fromto']))
       {
        $from = $_POST['from'];
        $to = $_POST['to'];
       $select = mysqli_query($con,"SELECT * FROM tbl_attendance WHERE adate BETWEEN '".$from."' and '".$to."' ");
  
    ?>
     <table class="table table-bordered">
       <thead>
         <tr>
           <th>Sr No</th>
           <th>Date</th>
           <th>Action</th>
           <th>Name</th>
           <th>Contact</th>
           <th>Admissin Year</th>
         </tr>
       </thead>
       
       <?php
       $counter = 1;
       while($datarow = mysqli_fetch_assoc($select))
       {
       ?>
       <tbody id="myTable">
        
         <tr>
           <td><?php echo $counter;?></td>
           
           <td><?php echo $datarow['adate'] ?></td>
           <td><?php echo $datarow['presenty'] ?></td>
           <td><?php echo $datarow['name'] ?></td>
           <td><?php echo $datarow['contact'] ?></td>
           <td><?php echo $datarow['year'] ?></td>
          
         </tr>
       
       </tbody>
       <?php
       $counter++;
        }}
       ?>
       
     </table>
   </div>
 </div>
<br><br>
	
</body>
</html>