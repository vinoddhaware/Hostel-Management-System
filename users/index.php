<?php
session_start();

include('../connect.php');

if(isset($_POST['login']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $select = "SELECT * FROM tbl_admission WHERE password = '".$user."' AND password = '".$pass."' ";
  $selected = mysqli_query($con,$select);
  $row = mysqli_num_rows($selected);
  
  while($show = mysqli_fetch_assoc($selected))
  {
    $_SESSION['reg_id']=$show['reg_id'];
    $_SESSION['name']=$show['name'];
    $_SESSION['year']=$show['year'];
  }

  if($row>0)
  {
    header("location:dashboard");
  }else
  {
    echo "<h4>Invalid Username or Password !..</h4>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Home | Home Page</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lemon&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Lemon&family=Pacifico&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="./style.css">

	<style>
    h4 {
        text-align: center;
        color: red;
    }
	
	#wait_tip {
        background: steelblue;
        text-align: center;
        padding: 5px;
        color: white;
        width: 100%;
    }
	.note{
		position: relative;
		top: 7px;
		font-size: 20	px;
		font-weight: 600;
	}
	footer{
		color: #9f9fd2;
	}

	</style>

	<script type="text/javascript">
		function getId(id) {
			return document.getElementById(id);
		}

		function validation() {
			getId("submit_btn").style.display = "none";
			getId("wait_tip").style.display = "";
			return true;
		}
	</script>


</head>

<body>
	<div class="box-form">
		<div class="left">
			<div class="overlay">
				<h1>BOYS HOSTEL</h1>
				<span class="note">Note :-</span>
				<p>Pure and cold drinking water, TV room, Gymkhana room, clean toilet and bath mess, Badminton court,
					24x7 Security guard, complaint/suggestion box, Medical oficer (weekly twice), News paper, Air cooler
					facilities (Optional).</p>
				<p>
					<u> Criteria for Admission </u>-> Strictly according to merit and as per Govt. of Maharashtra rules
					for caste category candidates.
				</p>
				<br>

				<span class="stu_admin">
					<h2>Student Registration and Admin login</h2>
					<a href="../registration"><img src="profile.png" alt="Registration" height="28px"> Go to Registration</a>
					<a href="../admin/"><img src="admin.png" alt="Admin" height="28px"> Log on to Admin</a>
				</span>
			</div>
		</div>

		<div class="right">
			<h5>Student Login</h5>
			<form method="post">
			<div class="inputs">
				<input type="text" class="form-control" name="user" placeholder="Enter Username" required>
				<br>
				<input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
			</div>
			<center> <span id="wait_tip" style="display:none;"> Please wait!..</span></center>
			<br>
			<br>
			<br>
			<button type="submit" id="submit_btn" class="btn btn-primary" name="login">Login</button>
			</form>



		</div>

	</div>
<br><br><br><br>
	<footer>
		<center>

	<span class="footer">
		Developed By D2_Boys
	</span>
		</center>
	</footer>
</body>

</html>