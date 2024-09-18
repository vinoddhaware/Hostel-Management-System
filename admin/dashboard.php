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

    <div class="row">
      <div class="col-sm-3">
        <div class="box">
          <?php
          $select = mysqli_query($con,"SELECT * FROM tbl_reg");
          $selected = mysqli_num_rows($select);
          ?>
          <h4>Registration Data - <?php echo $selected ?></h4>
          <hr style="border:1px solid steelblue;">
          <!-- ============================================== -->
          <?php
          $select = mysqli_query($con,"SELECT * FROM tbl_admission");
          $selected = mysqli_num_rows($select);
          ?>
          <h4>Admissions Data - <?php echo $selected ?></h4>
        </div>
      </div>

       <div class="col-sm-3">
        <div class="box">
          <?php
          $select2 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE caste = 'Open' ");
          $selected2 = mysqli_num_rows($select2);
          ?>
          <h4>Total Open - <?php echo $selected2 ?></h4>
          <hr style="border:1px solid steelblue;">
          <!-- ============================================== -->
     
          <?php
          $select2 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE caste = 'OBC' ");
          $selected2 = mysqli_num_rows($select2);
          ?>
          <h4>Total OBC - <?php echo $selected2 ?></h4>
          <hr style="border:1px solid steelblue;">
          <!-- ============================================== -->
          <?php
          $select2 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE caste = 'SC' ");
          $selected2 = mysqli_num_rows($select2);
          ?>
          <h4>Total SC - <?php echo $selected2 ?></h4>
          <hr style="border:1px solid steelblue;">
          <!-- ============================================== -->
          <?php
          $select2 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE caste = 'NT' ");
          $selected2 = mysqli_num_rows($select2);
          ?>
          <h4>Total NT - <?php echo $selected2 ?></h4>
    
        </div>
      </div>

       <div class="col-sm-3">
        <div class="box">
          <?php
          $select3 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE year = 'first' ");
          $selected3 = mysqli_num_rows($select3);
          ?>
          <h4>First Year - <?php echo $selected3 ?></h4>
          <hr style="border:1px solid steelblue;">
          <!-- ============================================== -->
          <?php
          $select3 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE year = 'second' ");
          $selected3 = mysqli_num_rows($select3);
          ?>
          <h4>Second Year - <?php echo $selected3 ?></h4>
          <hr style="border:1px solid steelblue;">
          <!-- ============================================== -->
          <?php
          $select3 = mysqli_query($con,"SELECT * FROM tbl_admission WHERE year = 'third' ");
          $selected3 = mysqli_num_rows($select3);
          ?>
          <h4>Third Year - <?php echo $selected3 ?></h4>
        </div>
      </div>
    </div>

  
   
 </div>
<br><br>
	
</body>
</html>