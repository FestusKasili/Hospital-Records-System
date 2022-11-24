<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
    .class {
       display:flex;
       font size: 20px;
       margin: right 20px;
       alignment: center;
    }
</style>
</head>
<body style='background-color: powderblue;'>  

<?php

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
<h2>ADMIN</h2>
  <input type="button" name="Manage Patients" value="Manage Patients">
  <br><br>
  <input type="button" name="Manage Users" value="Manage Users">
  <br><br>
  <input type="button" name="EXIT" value="EXIT">

</form>
        </div>
      </div>
    </div>
</div>
</body>
</html>