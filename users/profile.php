<?php
include('../connect.php');

if(isset($_POST['update']))
{
  $hid = mysqli_real_escape_string($con,$_POST['hid']);
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $dob = mysqli_real_escape_string($con,$_POST['dob']);
  $blood = mysqli_real_escape_string($con,$_POST['blood']);
  $caste = mysqli_real_escape_string($con,$_POST['caste']);
  $address = mysqli_real_escape_string($con,$_POST['address']);
  $contact = mysqli_real_escape_string($con,$_POST['contact']);

  $program = mysqli_real_escape_string($con,$_POST['program']);
  $enrollment = mysqli_real_escape_string($con,$_POST['enrollment']);
  $year = mysqli_real_escape_string($con,$_POST['year']);
  $branch = mysqli_real_escape_string($con,$_POST['branch']);
  $exam = mysqli_real_escape_string($con,$_POST['exam']);
  $percentage = mysqli_real_escape_string($con,$_POST['percentage']);

  $gname = mysqli_real_escape_string($con,$_POST['gname']);
  $occupation = mysqli_real_escape_string($con,$_POST['occupation']);
  $gcontact = mysqli_real_escape_string($con,$_POST['gcontact']);
  $gaddress = mysqli_real_escape_string($con,$_POST['gaddress']);
  $password = mysqli_real_escape_string($con,$_POST['password']);

 mysqli_query($con,"UPDATE tbl_admission SET `name`='$name',`dob`='$dob',`blood`='$blood',`caste`='$caste',`address`='$address',`contact`='$contact',`program`='$program',`enrollment`='$enrollment',`year`='$year',`branch`='$branch',`exam`='$exam',`percentage`='$percentage',`gname`='$gname',`occupation`='$occupation',`gcontact`='$gcontact',`gaddress`='$gaddress',`password`='$password' WHERE reg_id = '".$hid."' ");

  echo "
     <script>
     alert('Update Profile Successfully !..');
     window.locaton.href='profile';
     </script>
  ";

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
  label {margin-top:10px;}
  form {box-shadow:0 0 20px;padding:20px;}
  .toph4 {background:black;color:white;padding:7px;border-radius:5px;}
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

    <?php
    $select = mysqli_query($con,"SELECT * FROM tbl_admission WHERE reg_id = '".$_SESSION['reg_id']."' ");
    $selected = mysqli_fetch_array($select);
    ?>

    <h3>Profile Update</h3>
    <hr style="border:1px solid gray;margin-top:0px;">

    <div class="row">
      <div class="col-sm-2">
        
      </div>
      <div class="col-sm-8">
       <!-- form start -->
        <form method="post" enctype="multipart/form-data">
          <h4 class="toph4">Student Information</h4>
          <div class="row">
            <div class="col-sm-12">
              <input type="hidden" name="hid" value="<?php echo $_SESSION['reg_id'] ?>">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $selected['name'] ?>" required>
            </div>  
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Date of Birth</label>
              <input type="date" name="dob" class="form-control" value="<?php echo $selected['dob'] ?>" required>
            </div>
            <div class="col-sm-6">
              <label>Bloog Group</label>
              <select type="text" name="blood" class="form-control">
                <option value="<?php echo $selected['blood'] ?>"><?php echo $selected['blood'] ?></option>
                <option>A+</option>
                <option>A-</option>
                <option>B+</option>
                <option>B-</option>
                <option>AB+</option>
                <option>AB-</option>
                <option>O+</option>
                <option>O-</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Caste Category</label>
              <select type="text" name="caste" class="form-control" required>
                <option value="<?php echo $selected['caste'] ?>"><?php echo $selected['caste'] ?></option>
                <option>Open</option>
                <option>OBC</option>
                <option>SC</option>
                <option>NT</option>
              </select>
            </div>
            <div class="col-sm-6">
             <!--  <label>Photo</label>
              <input type="file" name="file" class="form-control">
          -->   </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Address</label>
              <textarea type="text" name="address" class="form-control" required><?php echo $selected['address'] ?></textarea>
            </div>
            <div class="col-sm-6">
              <label>Contact</label>
              <input type="number" name="contact" class="form-control" value="<?php echo $selected['contact'] ?>" required>
            </div>
          </div>

          <br><h4 class="toph4">Educational Information</h4>
          <div class="row">
            <div class="col-sm-6">
              <label>Program Name</label>
              <input type="text" name="program" class="form-control" value="<?php echo $selected['program'] ?>" required>
            </div>
            <div class="col-sm-6">
              <label>Enrollment No</label>
              <input type="text" name="enrollment" class="form-control" value="<?php echo $selected['enrollment'] ?>">
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Year in Admission</label>
              <select type="text" name="year" class="form-control" required>
                <option value="<?php echo $selected['year'] ?>"><?php echo $selected['year'] ?></option>
                <option>First</option>
                <option>Second</option>
                <option>Third</option>
              </select>
            </div>
            <div class="col-sm-6">
              <label>Branch</label>
              <input type="text" name="branch" class="form-control" value="<?php echo $selected['branch'] ?>" required>
            </div>
          </div>

          <div class="row">
             <div class="col-sm-6">
              <label>Last Examination</label>
              <input type="text" name="exam" class="form-control" value="<?php echo $selected['exam'] ?>" required>
            </div>
            <div class="col-sm-6">
              <label>Percentage Obtained</label>
              <input type="number" name="percentage" class="form-control" value="<?php echo $selected['percentage'] ?>" required>
            </div>
          </div>

          <br><h4 class="toph4">Parential / Guardian Information</h4>
          <div class="row">
            <div class="col-sm-12">
              <label>Guardian Name</label>
              <input type="text" name="gname" class="form-control" value="<?php echo $selected['gname'] ?>" required>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Occupation</label>
              <input type="text" name="occupation" class="form-control" value="<?php echo $selected['occupation'] ?>" required>
            </div>
            <div class="col-sm-6">
              <label>Contact</label>
              <input type="number" name="gcontact" class="form-control" value="<?php echo $selected['gcontact'] ?>" required>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <label>Address</label>
              <textarea type="text" name="gaddress" class="form-control"><?php echo $selected['gaddress'] ?></textarea>
            </div>
            <div class="col-sm-6">
              <label>Password</label>
              <input type="text" name="password" class="form-control" value="<?php echo $selected['password'] ?>">
            </div>
          </div>

                    <br><br>
          <center>
            <button style="float:right;width:40%;font-weight:bold;padding:20px;font-size:20px;" type="submit" name="update" class="btn btn-primary">Update</button>
            <div class="clearfix"></div>
          </center>
                    <br><br>
        </form>
        <br><br>
        <!-- form end -->
           
      </div>
    </div>
   
 </div>
<br><br>
	
</body>
</html>