<?php
session_start();

$_SESSION['reg_id'];
if(empty($_SESSION['reg_id']))
{
  header("location:index");
}

$_SESSION['name'];
if(empty($_SESSION['name']))
{
  header("location:index");
}

$_SESSION['year'];
if(empty($_SESSION['year']))
{
  header("location:index");
}
?>
<style>

#menus {border-radius:0px;background:#0066A4;margin-top:-34px;border:none;}
#mmm li:hover {background:lightblue;}
#mmm li a {color:white;font-size:17px;}
#mmm li a:hover {color:black;}

#mmm .dropdown li a:hover {background:lightblue;color:black;}
</style>



<nav id="menus" style="" class="navbar navbar-inverse">
 

    <div class="navbar-header">
      <button style="border:1px solid white;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a style="color:black;font-variant:small-caps;background:lightgray;font-weight:bold;" class="navbar-brand" href="dashboard">
        <span class="glyphicon glyphicon-home"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul id="mmm" class="nav navbar-nav">
          <li><a href="profile">Profile</a></li>
          <li><a href="leave">Leave Application</a></li>
         
      </ul>
      <ul id="menu_right" class="nav navbar-nav navbar-right">
        <li style="background:#232F3F;"><a style="color:white;" href="logout"><span class="glyphicon glyphicon-off"></span> <b>Logout</b></a></li>
        
      </ul>
    </div>

</nav>