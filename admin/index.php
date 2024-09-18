<?php
session_start();

include('../connect.php');

if(isset($_POST['login']))
{
  $user = $_POST['user'];
  $pass = $_POST['pass'];

  $select = "SELECT * FROM tbl_admin WHERE username = '".$user."' AND password = '".$pass."' ";
  $selected = mysqli_query($con,$select);
  $row = mysqli_num_rows($selected);
  
  while($show = mysqli_fetch_assoc($selected))
  {
    $_SESSION['admin_id']=$show['admin_id'];
    $_SESSION['admin']=$show['username'];
   
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
  <title>Admin Login Page</title>
  <link rel="icon" href="<?php include('icon.php');?>">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
      body {
      background-image: linear-gradient(135deg, #FAB2FF 10%, #1904E5 100%);
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: "Open Sans", sans-serif;
      color: #333333;
    }

  @media (min-width: 768px) {
  .col-sm-4 {
    width: 33.33333333%;
    position: relative;
    right: 25vw;
   }
  }

  .panel-primary .panel-heading {background:#0066A4;}
  h4 {text-align:center;color:red;}
  #wait_tip {background:steelblue;text-align:center;padding:5px;color:white;width:100%;}
  </style>

   <script type="text/javascript">
   function getId(id) {
       return document.getElementById(id);
   }
   function validation() {
       getId("submit_btn").style.display="none";
       getId("wait_tip").style.display="";
       return true;
   }
</script> 

</head>
<body>
  
	<div class="container-fluid">
   <br><br><br><br><br>
  <div class="row">
    <div class="col-sm-7">
    </div>

    <div class="col-sm-4"> 

  <!--  <p style="background:#0066A4;color:white;padding:5px;border-radius:4px;text-align:center;"><span class="glyphicon glyphicon-plus"></span>
    <a style="color:white;" href="register"> Sign Up</a>
  </p> -->

    <div style="border-radius:4px 4px 0px 0px;" class="panel panel-primary">
      <div class="panel-heading"><center><b>Admin Login</b></center></div>
      <div class="panel-body">
     <form method="post">
 
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input type="text" class="form-control" name="user" placeholder="Enter Username" required>
  </div><br>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
  </div><br>

  <center> <span id="wait_tip" style="display:none;"> Please wait!..</span></center><br>
  </div>
<div class="panel-footer">
	<center>
  <button id="submit_btn" style="background:#0066A4;width:50%;" type="submit" class="btn btn-primary" name="login">Login</button>

</center>

</div>
</form>
		
		</div>

    </div>


    </div>
	</div>
<br><br>
	
</body>
</html>