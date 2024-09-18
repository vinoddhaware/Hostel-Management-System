 <?php
include('../connect.php');
error_reporting(0);

if(isset($_POST['admission']))
{
  $regid = $_POST['reg_id'];

   foreach($regid as $value)
    {
    $select1 = "SELECT * FROM tbl_reg WHERE reg_id = $value";
    if($result = mysqli_query($con, $select1))
      {
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
   
             $file = $row['file'];
             $tdate = $row['tdate'];
             $name = $row['name'];
             $dob = $row['dob'];
             $blood = $row['blood'];
             $caste = $row['caste'];
             $address = $row['address'];
             $contact = $row['contact'];
             $program = $row['program'];
             $enrollment = $row['enrollment'];
             $year = $row['year'];
             $branch = $row['branch'];
             $exam = $row['exam'];
             $percentage = $row['percentage'];
             $gname = $row['gname'];
             $occupation = $row['occupation'];
             $gcontact = $row['gcontact'];
             $gaddress = $row['gaddress'];
             $password = $row['contact'];
           }
        }
       
      }

   $select = mysqli_query($con,"SELECT `caste` FROM tbl_admission WHERE caste = 'OBC' ");
   $selected = mysqli_num_rows($select);

   $select1 = mysqli_query($con,"SELECT `caste` FROM tbl_admission WHERE caste = 'SC' ");
   $selected1 = mysqli_num_rows($select1);

   $select2 = mysqli_query($con,"SELECT `caste` FROM tbl_admission WHERE caste = 'Open' ");
   $selected2 = mysqli_num_rows($select2);

   $select3 = mysqli_query($con,"SELECT `caste` FROM tbl_admission WHERE caste = 'NT' ");
   $selected3 = mysqli_num_rows($select3);


   if($selected < 1 || $selected1 < 1 || $selected2 < 1 || $selected3 < 1){
  
   $insert = mysqli_query($con,"INSERT INTO tbl_admission (`reg_id`,`file`,`tdate`,`name`,`dob`,`blood`,`caste`,`address`,`contact`,`program`,`enrollment`,`year`,`branch`,`exam`,`percentage`,`gname`,`occupation`,`gcontact`,`gaddress`,`password`) VALUES ('$value','$file','$tdate','$name','$dob','$blood','$caste','$address','$contact','$program','$enrollment','$year','$branch','$exam','$percentage','$gname','$occupation','$gcontact','$gaddress','$password')");


    if($insert)
     {
      echo "
      <script>
      alert('Admission data stored successfully !..');
      window.location.href='datalist';
      </script>
      ";
     
    }
  }else{
  echo "<script>
      alert('You have completed your quota!..');
      window.location.href='datalist';
      </script>";
 }

 

}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Datalist</title>
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
      <div class="row">
        <div class="col-sm-6">
          <h3 style="margin-top:0px;background:steelblue;padding:10px;color:white;width:50%;border-radius:0 40px 40px 0">Datalist Page</h3>
        </div>
        <div class="col-sm-3">
      <button type="submit" class="btn btn-primary" name="admission">Admission</button>
        </div>
        <div class="col-sm-3">
          <input class="form-control" id="myInput" type="text" placeholder="Filter Here..">
          <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
        </div>
      </div>
      <br>

   <div class="table-responsive">
     <table class="table table-bordered">
       <thead>
         <tr>
           <th>Sr No</th>
           <th>file</th>
           <th>Allotment</th>
           <th>Date</th>
           <th>Name</th>
           <th>Birth Date</th>
           <th>Blood Group</th>
           <th>Caste</th>
           <th>Address</th>
           <th>Contact</th>
           <th>Course</th>
           <th>Enrollment</th>
           <th>Admissin Year</th>
           <th>Branch</th>
           <th>Examination</th>
           <th>Percentage</th>
           <th>Guardian Name</th>
           <th>Occupation</th>
           <th>Contact</th>
           <th>Address</th>
         </tr>
       </thead>
       
       <?php
       $select = mysqli_query($con,"SELECT * FROM tbl_reg ORDER BY percentage DESC");
       $counter = 1;
       while($datarow = mysqli_fetch_assoc($select))
       {
       ?>
       <tbody id="myTable">
        
         <tr style="
         <?php
         $sel = mysqli_query($con,"SELECT reg_id FROM tbl_admission");
         while($sel1 = mysqli_fetch_assoc($sel)){
          if($sel1['reg_id']==$datarow['reg_id']){
            echo 'background:lightsteelblue';
          }
         }
         ?>
         ">
           <td>
            <input style="<?php
         $sel = mysqli_query($con,"SELECT reg_id FROM tbl_admission");
         while($sel1 = mysqli_fetch_assoc($sel)){
          if($sel1['reg_id']==$datarow['reg_id']){
            echo 'display:none';
          }
         }
         ?>" type="checkbox" name="reg_id[]" value="<?php echo $datarow['reg_id'] ?>">
            <?php echo $counter;?></td>
           <td>
            <img src="<?php echo "../photos/".$datarow['file']?>" width="50">
            
          </td>
          <td>
            <a href="<?php echo "../marksheet/".$datarow['file1']?>">VIEW</a>
          </td>
           <td>
            <?php echo $datarow['tdate'] ?>
              </td>
           <td>
            <?php echo $datarow['name'] ?>
              </td>
           <td>
            <?php echo $datarow['dob'] ?>
              </td>
           <td>
            <?php echo $datarow['blood'] ?>
              </td>
           <td>
            <?php echo $datarow['caste'] ?>
              </td>
           <td>
            <?php echo $datarow['address'] ?>
              </td>
           <td>
            <?php echo $datarow['contact'] ?>
              </td>
           <td>
            <?php echo $datarow['program'] ?>
              </td>
           <td>
            <?php echo $datarow['enrollment'] ?>
              </td>
           <td>
            <?php echo $datarow['year'] ?>
              </td>
              <td>
            <?php echo $datarow['branch'] ?>
              </td>
           <td>
            <?php echo $datarow['exam'] ?>
              </td>
           <td>
            <?php echo $datarow['percentage'] ?>
              </td>
           <td>
            <?php echo $datarow['gname'] ?>
              </td>
           <td>
            <?php echo $datarow['occupation'] ?>
              </td>
           <td>
            <?php echo $datarow['gcontact'] ?>
              </td>
           <td>
            <?php echo $datarow['gaddress'] ?>
              </td>
          </form>
         </tr>
       
       </tbody>
       <?php
       $counter++;
        }
       ?>
       
     </table>
   </div>
 </div>
<br><br>
	
</body>
</html>