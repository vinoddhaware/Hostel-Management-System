<?php
include('connect.php');

if(isset($_POST['reg']))
{
	$tdate = mysqli_real_escape_string($con,$_POST['tdate']);
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$dob = mysqli_real_escape_string($con,$_POST['dob']);
	$blood = mysqli_real_escape_string($con,$_POST['blood']);
	$caste = mysqli_real_escape_string($con,$_POST['caste']);
	$file = mysqli_real_escape_string($con,$_FILES['file']['name']);
	$extra = 'e';
	$file1 = mysqli_real_escape_string($con,$_FILES['file1']['name']);
	$extra1 = 'e';
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

	$insert = mysqli_query($con,"INSERT INTO tbl_reg (`tdate`,`name`,`dob`,`blood`,`caste`,`file`,`file1`,`address`,`contact`,`program`,`enrollment`,`year`,`branch`,`exam`,`percentage`,`gname`,`occupation`,`gcontact`,`gaddress`) VALUES ('$tdate','$name','$dob','$blood','$caste','$extra$file','$extra1$file1','$address','$contact','$program','$enrollment','$year','$branch','$exam','$percentage','$gname','$occupation','$gcontact','$gaddress')");
	if($insert)
	{
		echo "<script>
		      alert('You have submitted successfully !..');
              window.location.href='registration';
		      </script>";
	}

    
    $post_photo=$_FILES['file']['name'];
$post_photo_tmp=$_FILES['file']['tmp_name'];

$ext=pathinfo($post_photo, PATHINFO_EXTENSION);   //getting image extension

if($ext=='png' || $ext=='PNG' ||
   $ext=='jpg' || $ext=='jpeg' ||
   $ext=='JPG' || $ext=='JPEG' ||
   $ext=='gif' || $ext=='GIF' )   //checking image extension

  if($ext =='jpg' || $ext=='jpeg' || $ext =='JPG' || $ext=='JPEG')
  {
    $src=imagecreatefromjpeg($post_photo_tmp);

  }
  if($ext=='png'  || $ext=='PNG')
  {
    $src=imagecreatefrompng($post_photo_tmp);
  }
  if($ext=='gif'  || $ext=='GIF')
  {
    $src=imagecreatefromgif($post_photo_tmp);
  }


  list($width_min,$height_min)=getimagesize($post_photo_tmp);  //fetching original image width & height

  $newwidth_min=100;  //set compression image width
  $newheight_min=100; //set compression image height
  /*$newheight_min=($height_min / $width_min)*$newwidth_min; */   // equation for compressed image height
  $temp_min= imagecreatetruecolor($newwidth_min, $newheight_min);   //craere frame for compressed image
  imagecopyresampled($temp_min, $src, 0, 0, 0, 0, $newwidth_min, $newheight_min, $width_min, $height_min);  // compressing image
    imagejpeg($temp_min,"photos/e".$post_photo,80);   //copy image in folder


$post_photo=$_FILES['file1']['name'];
$post_photo_tmp=$_FILES['file1']['tmp_name'];

$ext=pathinfo($post_photo, PATHINFO_EXTENSION);   //getting image extension

if($ext=='png' || $ext=='PNG' ||
   $ext=='jpg' || $ext=='jpeg' ||
   $ext=='JPG' || $ext=='JPEG' ||
   $ext=='gif' || $ext=='GIF' )   //checking image extension

  if($ext =='jpg' || $ext=='jpeg' || $ext =='JPG' || $ext=='JPEG')
  {
    $src=imagecreatefromjpeg($post_photo_tmp);

  }
  if($ext=='png'  || $ext=='PNG')
  {
    $src=imagecreatefrompng($post_photo_tmp);
  }
  if($ext=='gif'  || $ext=='GIF')
  {
    $src=imagecreatefromgif($post_photo_tmp);
  }


  list($width_min,$height_min)=getimagesize($post_photo_tmp);  //fetching original image width & height

  $newwidth_min=100;  //set compression image width
  $newheight_min=100; //set compression image height
  /*$newheight_min=($height_min / $width_min)*$newwidth_min; */   // equation for compressed image height
  $temp_min= imagecreatetruecolor($newwidth_min, $newheight_min);   //craere frame for compressed image
  imagecopyresampled($temp_min, $src, 0, 0, 0, 0, $newwidth_min, $newheight_min, $width_min, $height_min);  // compressing image
    imagejpeg($temp_min,"marksheet/e".$post_photo,80);   //copy image in folder

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<style type="text/css">
	label {margin-top:10px;}
	.toph4 {background:black;color:white;padding:7px;border-radius:5px;}
	form {box-shadow:0 0 20px;padding:20px;}
</style>
</head>
<body>

	<?php
	include('top.php');
	?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				
			</div>
			<div class="col-sm-8">


				<h3 style="font-weight:700;text-align:center;color:steelblue;">Online Registartion Form</h3>
				<hr>
				
				<!-- form start -->
				<form method="post" enctype="multipart/form-data">
					<h4 class="toph4">Student Information</h4>
					<div class="row">
					  <div class="col-sm-12">
					  	<input type="hidden" name="tdate" value="<?php echo date('Y-m-d')?>">
					  	<label>Name</label>
					  	<input type="text" name="name" class="form-control" placeholder="Enter Name" required>
					  </div>	
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>Date of Birth</label>
							<input type="date" name="dob" class="form-control" required>
						</div>
						<div class="col-sm-6">
							<label>Bloog Group</label>
							<select type="text" name="blood" class="form-control">
								<option>Select Blood Group</option>
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
						<div class="col-sm-4">
							<label>Caste Category</label>
							<select type="text" name="caste" class="form-control" required>
								<option>Select Caste</option>
								<option>Open</option>
								<option>OBC</option>
								<option>SC</option>
								<option>NT</option>
							</select>
						</div>
						<div class="col-sm-4">
							<label>Photo</label>
							<input type="file" name="file" class="form-control">
						</div>
						<div class="col-sm-4">
							<label>Allotment</label>
							<input type="file" name="file1" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>Address</label>
							<textarea type="text" name="address" class="form-control" placeholder="Enter Address here" required></textarea>
						</div>
						<div class="col-sm-6">
							<label>Contact</label>
							<input type="number" name="contact" class="form-control" placeholder="Enter Contact No" required>
						</div>
					</div>

					<br><h4 class="toph4">Educational Information</h4>
					<div class="row">
						<div class="col-sm-6">
							<label>Program Name</label>
							<input type="text" name="program" class="form-control" placeholder="Programme Name" required>
						</div>
						<div class="col-sm-6">
							<label>Enrollment No</label>
							<input type="text" name="enrollment" class="form-control" placeholder="Enrollment no">
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>Year in Admission</label>
							<select type="text" name="year" class="form-control" required>
								<option>Select Year</option>
								<option>First</option>
								<option>Second</option>
								<option>Third</option>
							</select>
						</div>
						<div class="col-sm-6">
							<label>Branch</label>
							<input type="text" name="branch" class="form-control" placeholder="Enter Branch" required>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>Last Examination</label>
							<input type="text" name="exam" class="form-control" placeholder="Enter Last Examination" required>
						</div>
						<div class="col-sm-6">
							<label>Percentage Obtained</label>
							<input type="number" name="percentage" class="form-control" placeholder="Enter Percentage" required>
						</div>
					</div>

					<br><h4 class="toph4">Parental / Guardian Information</h4>
					<div class="row">
						<div class="col-sm-12">
							<label>Guardian Name</label>
							<input type="text" name="gname" class="form-control" placeholder="Enter Guardian Name" required>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<label>Occupation</label>
							<input type="text" name="occupation" class="form-control" placeholder="Enter Occupation" required>
						</div>
						<div class="col-sm-6">
							<label>Contact</label>
							<input type="number" name="gcontact" class="form-control" placeholder="Guardian Contact" required>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-12">
							<label>Address</label>
							<textarea type="text" name="gaddress" class="form-control" placeholder="Guardian Address" ></textarea>
						</div>
					</div>

                    <br><br>
					<center>
						<button style="float:right;width:40%;font-weight:bold;padding:20px;font-size:20px;" type="submit" name="reg" class="btn btn-primary">Submit</button>
						<div class="clearfix"></div>
					</center>
                    <br><br>
				</form>
				<br><br>
				<!-- form end -->
           
			</div>
		</div>
	</div>

</body>
</html>