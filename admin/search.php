 <?php
include('../connect.php');
error_reporting(0);

$id = $_GET['id'];
$delete = mysqli_query($con,"DELETE FROM tbl_admission WHERE admission_id = $id ");
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Records</title>
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
          <h3 style="margin-top:0px;background:steelblue;padding:10px;color:white;width:50%;border-radius:0 40px 40px 0">Search Records</h3>
        </div>
        <div class="col-sm-3">
          </div>
        <div class="col-sm-3">
          <form method="post">
          <div class="input-group">
    <input type="text" class="form-control" name="search" placeholder="Search Here" required>
    <span class="input-group-addon">
      <button style="background:none;border:none;" type="submit" name="searchbtn">
      <i class="glyphicon glyphicon-search"></i>
  </button>
    </span>
  </div>
</form>
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
           <th>Action</th>
         </tr>
       </thead>
       
       <?php
       if(isset($_POST['searchbtn']))
       {
        $search = $_POST['search'];
       $select = mysqli_query($con,"SELECT * FROM tbl_admission WHERE name LIKE '%".$search."%' or `caste` = '".$search."' or `contact` = '".$search."' or `year` = '".$search."' ");
       $counter = 1;
       while($datarow = mysqli_fetch_assoc($select))
       {
       ?>
       <tbody id="myTable">
        
         <tr>
           <td>
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
           <td>
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
        }}
       ?>
       
     </table>
   </div>
 </div>
<br><br>
	
</body>
</html>