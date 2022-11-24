<?php
$con=mysqli_connect("localhost", "root", "", "hospitaldb");
if(mysqli_connect_errno()){
  echo "connection Fail".mysqli_connect_error();
}
?>