 <?php
include('../connect.php');
error_reporting(0);

if(isset($_POST['attendance']))
{
  $regid = $_POST['reg_id'];
$count = sizeof($regid);
   for($i=0; $i < $count; $i++){
         
             $adate = $_POST['adate'];
             $presenty = $_POST['presenty'];
             $name = $_POST['name'];
             $contact = $_POST['contact'];
             $year = $_POST['year'];
            
      foreach ($presenty as $value) {
   $temp[] =  $value;
}
  
   $insert = mysqli_query($con,"INSERT INTO tbl_attendance (`reg_id`,`adate`,`presenty`,`name`,`contact`,`year`) VALUES ('".$regid[$i]."','".$adate[$i]."','".$temp[$i]."','".$name[$i]."','".$contact[$i]."','".$year[$i]."')");


    if($insert)
     {
      echo "
      <script>
      alert('Attendance post successfully !..');
      window.location.href='attendance';
      </script>
      ";
     
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendance</title>
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
          <h3 style="margin-top:0px;background:steelblue;padding:10px;color:white;width:50%;border-radius:0 40px 40px 0">Get Attendance</h3>
        </div>
        <div class="col-sm-3">
          <?php
          $record = mysqli_query($con,"SELECT adate FROM tbl_attendance WHERE adate = '".date('Y-m-d')."' ");
          $record1 = mysqli_num_rows($record);
          if($record1 == 0)
          {
          ?>
      <button type="submit" class="btn btn-primary" name="attendance">Attendance</button>
      <?php
       }
      ?>
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
           <th>Date</th>
           <th>Action</th>
           <th>Name</th>
           <th>Contact</th>
           <th>Admissin Year</th>
         </tr>
       </thead>
       
       <?php
       $select = mysqli_query($con,"SELECT * FROM tbl_admission");
       $counter = 1;
       while($datarow = mysqli_fetch_assoc($select))
       {
       ?>
       <tbody id="myTable">
        
         <tr>
           <td>
            <input style="display:none;" type="checkbox" name="reg_id[]" value="<?php echo $datarow['reg_id'] ?>" checked>
            <?php echo $counter;?>

          </td>
           
           <td>
            <?php echo date('Y-m-d') ?>
            <input type="hidden" name="adate[]" value="<?php echo date('Y-m-d') ?>">
          </td>
          <td>
            <!--  <select style="border:none;" type="text" name="presenty[]">
               <option>Present</option>
               <option>Absent</option>
             </select> -->
             <input type="radio" name="presenty[<?php echo $datarow['reg_id'] ?>]" value="Present" checked> P
             <input type="radio" name="presenty[<?php echo $datarow['reg_id'] ?>]" value="Absent"> A
           </td>
           <td>
            <?php echo $datarow['name'] ?>
            <input type="hidden" name="name[]" value="<?php echo $datarow['name'] ?>">
              </td>
          
           <td>
            <?php echo $datarow['contact'] ?>
            <input type="hidden" name="contact[]" value="<?php echo $datarow['contact'] ?>">
              </td>
           
           <td>
            <?php echo $datarow['year'] ?>
            <input type="hidden" name="year[]" value="<?php echo $datarow['year'] ?>">
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