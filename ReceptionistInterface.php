
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
$patientidErr = $idnumberErr = $firstnameErr= $lastnameErr= $phonenumberErr= $emailaddressErr="";
$patientid = $idnumber = $firstname=  $lastname= $phonenumber= $emailaddress= $new= $clear= $save= $exit = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["Staff ID"])) {
      $patientidErr = "Patient ID is required";
    } else {
      $patientid= test_input($_POST["Patient ID"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$patientid)) {
        $patientErr = "Only letters and white space allowed";
      }
       }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["id number"])) {
        $IdnumberErr = "id number is required";
      } else {
        $idnumber = test_input($_POST["id number"]);
        if (!preg_match('/^\d+$/',$idnumber)) {
          $IdnumberErr = "Only numbers and white space allowed";
        }
         }
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["firstname"])) {
          $firstnameErr = "First Nameis required";
        } else {
          $firstnameid= test_input($_POST["First Name"]);
          if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
            $FirstnameErr = "Only letters and white space allowed";
          }
           }
        }  

	  if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["Last Name"])) {
		  $lastnameErr = "last name is required";
		} else {
		  $lastname = test_input($_POST["Last Name"]);
		  if (!preg_match('/^\d+$/',$lastname)) {
			$lastnameErr = "Only numbers and white space allowed";
		  }
		   }
		}

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["Phone Number"])) {
              $phonenumberErr = "Phone Number is required";
            } else {
              $phonenumber = test_input($_POST["Phone Number"]);
              if (!preg_match('/^\d+$/',$phonenumber)) {
                $phonenumberErr = "Only numbers and white space allowed";
              }
               }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["Email Address"])) {
                  $emailaddressErr = "Email Address is required";
                } else {
                  $emailaddress = test_input($_POST["Email Address"]);
                  if (!preg_match('/^\d+$/',$emailaddress)) {
                    $emailaddressErr = "Only numbers and white space allowed";
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
<h2>Personal Details</h2>
<div class="container">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Patient ID: <input type="varchar" name="patient id" value="<?php echo $patientid;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $patientidErr;?></span>
  <br><br>
  ID Number: <input type="number" name="idnumber" value="<?php echo $idnumber;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $idnumberErr;?></span>
  <br><br> 
  First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $firstnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="name" value="<?php echo $lastname;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $lastnameErr;?></span>
  <br><br>
  Phone Number: <input type="number" name="phonenumber" value="<?php echo $phonenumber;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $phonenumberErr;?></span>
  <br><br>
  Email Address: <input type="varchar" name="email" value="<?php echo $emailaddress;?>" style='background-color: powderblue;'>
  <span class="error"><?php echo $emailaddressErr;?></span>
  <br><br>
  <input type="submit" name="save" value="NEW">
  <input type="submit" name="save" value="CLEAR">
  <input type="submit" name="save" value="SAVE">
  <input type="submit" name="save" value="EXIT">
</form>
</div>
        </div>
      </div>
    </div>
<?php
echo "<h2></h2>";
echo $patientid;
echo "<br>";
echo $idnumber;
echo "<br>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $phonenumber;
echo "<br>";
echo $emailaddress;
echo "<br>";
?>

</body>
</html>