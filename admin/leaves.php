<?php
include('../connect.php');

error_reporting(0);
$id = $_GET['id'];
$upss = mysqli_query($con,"UPDATE tbl_leave SET `status`='Approved' WHERE leave_id = $id ");

if(isset($_POST['leavebtn']))
{
  $ladate = mysqli_real_escape_string($con,$_POST['ladate']);
  $reg_id = mysqli_real_escape_string($con,$_POST['hid']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $year = mysqli_real_escape_string($con,$_POST['year']);
  $subject = mysqli_real_escape_string($con,$_POST['subject']);
  $matter = mysqli_real_escape_string($con,$_POST['matter']);

  $insert = mysqli_query($con,"INSERT INTO tbl_leave (`ldate`,`reg_id`,`name`,`year`,`subject`,`matter`) VALUES ('$ladate','$reg_id','$name','$year','$subject','$matter')");
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

    
      <div class="col-sm-12">
        <h3 class="hidden-print">Application Records</h3>
        <button class="hidden-print" onclick="print()">Print</button><br><br>
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
              <th class="hidden-print">Action</th>
            </tr>
            <?php
            $select = mysqli_query($con,"SELECT * FROM tbl_leave ");
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
              <td class="hidden-print" style="<?php 
                 if($row['status']== 'Approved')
                 {
                  echo 'background:gray';
                 }
              ?>">
              <a href="leaves?id=<?php echo $row['leave_id'] ?>">
                <button class="btn btn-success">Approved</button>
              </a>
              </td>
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