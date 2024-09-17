<?php 
$con = mysqli_connect('localhost','root','');
if($con)
{
	mysqli_select_db($con,'clg_hostel');
	//echo "Yes Connect !..";
}
?>