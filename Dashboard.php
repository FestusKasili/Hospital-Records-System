<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
    .class {
       display:flex;
       font size: 20px;
       margin: right 20px;
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
    <h2>DASHBOARD</h2>
  <input type="button" name="Reception" value="Reception">
  <br><br>
  <input type="button" name="doctor" value="Doctor">
  <br><br>
  <input type="button" name="interface" value="Interface">
  <br><br>
</form>
</div>
  </div>
</div>
</div>
<?php
?>

</body>
</html>