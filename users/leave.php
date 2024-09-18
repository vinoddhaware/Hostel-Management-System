<?php
include('../connect.php');

if(isset($_POST['leavebtn']))
{
  $ladate = mysqli_real_escape_string($con,$_POST['ladate']);
  $reg_id = mysqli_real_escape_string($con,$_POST['hid']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $year = mysqli_real_escape_string($con,$_POST['year']);
  $subject = mysqli_real_escape_string($con,$_POST['subject']);
  $matter = mysqli_real_escape_string($con,$_POST['matter']);
  $status = 'Pending';

  $insert = mysqli_query($con,"INSERT INTO tbl_leave (`ldate`,`reg_id`,`name`,`year`,`subject`,`matter`,`status`) VALUES ('$ladate','$reg_id','$name','$year','$subject','$matter','$status')");
  if($insert)
  {
    echo "
        <script>
        alert('Successfully Leave Application Posted !..');
        window.location.href='leave';
        </script>
    ";
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Leave Application</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  form {padding:20px;box-shadow:0 0 20px;border-radius:10px;}
  .btn-danger {padding:20px;font-size:20px;}
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

    <h3>Leave Application Form</h3>
    <hr style="border:1px solid gray;margin-top:0px;">

    <div class="row">
      
      <div class="col-sm-4">
        <form method="post">
          <input type="hidden" name="ladate" value="<?php echo date('Y-m-d') ?>">
          <input type="hidden" name="hid" value="<?php echo $_SESSION['reg_id'] ?>">
          <input type="hidden" name="name" value="<?php echo $_SESSION['name'] ?>">
          <input type="hidden" name="year" value="<?php echo $_SESSION['year'] ?>">

          <label>Subject</label>
          <input type="text" name="subject" placeholder="Enter Subject here" class="form-control" required>
          <br>

          <label>Description</label>
          <textarea type="text" name="matter" class="form-control" placeholder="Write matter here" rows="10"></textarea>
          <b><span style="float:right;">Yours Faithfully</span></b>
          <div style="clear:both;"></div>
          <b><span style="float:right;"><?php echo $_SESSION['name'] ?></span></b>
          
          <br><br>

          <button type="submit" name="leavebtn" class="btn btn-danger">Post</button>
        </form>
      </div>

      <div class="col-sm-8">
        <h3>Application Records</h3>
        <hr style="border:1px solid gray;margin-top:0px;">
        <div class="table-responsive">
          <table class="table table-bordered">
            <tr>
              <th>Sr No</th>
              <th>Date</th>
              <th>Id</th>
              <th>Name</th>
              <th>Year</th>
              <th>Subject</th>
              <th>Matter</th>
              <th>Status</th>
            </tr>
            <?php
            $select = mysqli_query($con,"SELECT * FROM tbl_leave WHERE reg_id = '".$_SESSION['reg_id']."' ");
            $counter = 1;
            while($row = mysqli_fetch_assoc($select)){
            ?>
            <tr>
              <td><?php echo $counter; ?></td>
              <td><?php echo $row['ldate'] ?></td>
              <td><?php echo $row['reg_id'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['year'] ?></td>
              <td><?php echo $row['subject'] ?></td>
              <td><?php echo $row['matter'] ?></td>
              <td style="<?php 
             if($row['status']=='Pending')
             {
              echo 'background:red;color:white;';
             }else{
                echo 'background:lime';
             }
              ?>"><?php echo $row['status'] ?></td>
            </tr>
            <?php
            $counter++;
             }
            ?>
          </table>
        </div>
      </div>
    </div>

  
 </div>
<br><br>
	
</body>
</html>