 <?php
include('../connect.php');
error_reporting(0);

$id = $_GET['id'];
$delete = mysqli_query($con,"DELETE FROM tbl_admission WHERE admission_id = $id ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admissions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
 .table-bordered thead tr th {background:lightsteelblue;}
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

      <div class="row">
        <div class="col-sm-6">
          <h3 style="margin-top:0px;background:steelblue;padding:10px;color:white;width:50%;border-radius:0 40px 40px 0" class="hidden-print">Admission Page</h3>
          <button class="hidden-print" onclick="print()">Print</button><br><br>
        </div>
        <div class="col-sm-3">
          </div>
        <div class="col-sm-3">
          <div class="hidden-print">
          <input class="form-control" id="myInput" type="text" placeholder="Filter Here..">
        </div>
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
           <th class="hidden-print">file</th>
           <th class="hidden-print">Allotment</th>
           <th class="hidden-print">Date</th>
           <th>Name</th>
           <th class="hidden-print">Birth Date</th>
           <th class="hidden-print">Blood Group</th>
           <th>Caste</th>
           <th>Address</th>
           <th>Contact</th>
           <th>Course</th>
           <th>Enrollment</th>
           <th class="hidden-print">Admissin Year</th>
           <th class="hidden-print">Branch</th>
           <th class="hidden-print">Examination</th>
           <th>Percentage</th>
           <th class="hidden-print">Guardian Name</th>
           <th class="hidden-print">Occupation</th>
           <th class="hidden-print">Contact</th>
           <th class="hidden-print">Address</th>
           <th class="hidden-print">Action</th>
         </tr>
       </thead>
       
       <?php
       $select = mysqli_query($con,"SELECT * FROM tbl_admission ORDER BY percentage DESC");
       $counter = 1;
       while($datarow = mysqli_fetch_assoc($select))
       {
       ?>
       <tbody id="myTable">
        
         <tr>
           <td>
               <?php echo $counter;?></td>
           <td class="hidden-print">
            <img src="<?php echo "../photos/".$datarow['file']?>" width="50">
            
          </td>
           <td class="hidden-print">
            <a href="<?php echo "../marksheet/".$datarow['file1']?>">VIEW</a>
          </td>
           <td class="hidden-print">
            <?php echo $datarow['tdate'] ?>
              </td>
           <td>
            <?php echo $datarow['name'] ?>
              </td>
           <td class="hidden-print">
            <?php echo $datarow['dob'] ?>
              </td>
           <td class="hidden-print">
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
           <td class="hidden-print">
            <?php echo $datarow['year'] ?>
              </td>
               <td class="hidden-print">
            <?php echo $datarow['branch'] ?>
              </td>
           <td class="hidden-print">
            <?php echo $datarow['exam'] ?>
              </td>
           <td>
            <?php echo $datarow['percentage'] ?>
              </td>
           <td class="hidden-print">
            <?php echo $datarow['gname'] ?>
              </td>
           <td class="hidden-print">
            <?php echo $datarow['occupation'] ?>
              </td>
           <td class="hidden-print">
            <?php echo $datarow['gcontact'] ?>
              </td>
           <td class="hidden-print">
            <?php echo $datarow['gaddress'] ?>
           </td>
           <td class="hidden-print">
            <a href="admission?id=<?php echo $datarow['admission_id'] ?>">
            <button title="Delete" class="btn btn-danger" onclick="return confirm('Sure want to delete ?')">
             <span class="glyphicon glyphicon-trash"></span>
           </button>
           </a>
           </td>
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