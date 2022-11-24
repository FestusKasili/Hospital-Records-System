<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
</style>
</head>
<body style='background-color: powderblue;'> 
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['save']))
  {
    $staffid=$_POST['Staff ID'];
    $name=$_POST['Name'];
   $designation=$_POST['Designation'];
    $query=mysqli_query($con, "insert into user(Staff ID,Name,Designation)Value('$staffid','$name','$designation')");
  }
    if ($query) {
echo "<script>alert('User has been added.');</script>"; 
 } else {
echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
} 
?>
<?php
// define variables and set to empty values
$staffidErr = $nameErr = $designationErr= "";
$staffid = $name = $designation=  $addnew= $edit= $delete= $save= $exit= "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Staff ID"])) {
      $staffidErr = "Staff ID is required";
    } else {
      $staffid= test_input($_POST["Staff ID"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $staffidErr = "Only letters and white space allowed";
      }
       }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "name is required";
      } else {
        $name = test_input($_POST["name"]);
        if (!preg_match('/^\d+$/',$name)) {
          $nameErr = "Only numbers and white space allowed";
        }
         }
      }

	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["Designation"])) {
		  $designationErr = "designation is required";
		} else {
		  $designation = test_input($_POST["Designation"]);
		  if (!preg_match('/^\d+$/',$designation)) {
			$designationErr = "Only numbers and white space allowed";
		  }
		   }
		}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-primary text-white">
<h2>Manage Users</h2>
<form method="post" action="connection.php" method="post">  
  Staff ID: <input type="text" name="staff id" value="<?php echo $staffid;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $staffidErr;?></span>
  <br><br>
  Name: <input type="text" name="name" value="<?php echo $name;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $nameErr;?></span>
  <br><br>
  Designation: <input type="text" name="designation" value="<?php echo $designation;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $designationErr;?></span>
  <br><br>
  <input type="submit" name="save" value="ADD NEW">
  <input type="button" name="exit" value="EDIT">
  <input type="submit" name="save" value="DELETE">
  <input type="submit" name="save" value="SAVE">
  <input type="submit" name="save" value="EXIT">
</form>
        </div>
      </div>
    </div>
</div>
<?php
echo "<h2></h2>";
echo $staffid;
echo "<br>";
echo $name;
echo "<br>";
echo $designation;
?>
</body>
</html>