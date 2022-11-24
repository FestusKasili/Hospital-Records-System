<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style>
</style>
</head>
<body style='background-color: powderblue;'>  
<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password =  $login = $clear = $exit = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
      $usernameErr = "User Name is required";
    } else {
      $username = test_input($_POST["username"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $usernameErr = "Only letters and white space allowed";
      }
       }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["password"])) {
        $passwordErr = "password is required";
      } else {
        $password = test_input($_POST["password"]);
        if (!preg_match('/^\d+$/',$password)) {
          $passwordErr = "Only numbers and white space allowed";
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
					<h2>Login form</h2>
				</div>
				<div class="card-body">
					<form action="login.php" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" id="text" class="form-control" name="Username" />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="Password" />
						</div>
						<input type="Login" class="btn btn-primary w-100" value="Login" name="">
					</form>
				</div>
			</div>
		</div>
	</div>
<?php
echo "<h2></h2>";
echo $username;
echo "<br>";
echo $password;
?>
</div>
</body>
</html>