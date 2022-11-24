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
$patientidErr = $idnumberErr = $firstnameErr =$lastnameErr = $phonenumberErr = $emailErr ="";
$patientid = $idnumber = $firstname =$lastname = $phonenumber = $email = $previousdiagnosis = $medicationprescribed = $addnewdiagnosis = $prescription = $save = $exit = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["patientid"])) {
    $nameErr = "PatientID is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if patientid only contains numbers and whitespace
    if (!preg_match('/^\d+$/',$patientid)) {
      $patientidErr = "Only numbers and white space allowed";
    }
     }
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["idnumber"])) {
      $idnumber = "ID Number is required";
    } else {
      $idnumber= test_input($_POST["id number"]);
      // check if idnumber only contains numbers and whitespace
      if (!preg_match('/^\d+$/',$idnumber)) {
        $idnumberErr = "Only numbers and white space allowed";
      }
       }
    }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
      $firstnameErr = "First Name is required";
    } else {
      $firstname = test_input($_POST["firstname"]);
      // check if first name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $firstnameErr = "Only letters and white space allowed";
      }
       }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["lastname"])) {
        $lastnameErr = "Last Name is required";
      } else {
        $name = test_input($_POST["lastname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
          $lastnameErr = "Only letters and white space allowed";
        }
         }
      }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["phonenumber"])) {
      $phonenumberErr = "Phone number is required";
    } else {
      $phonenumberErr = test_input($_POST["phone number"]);
      // check if phone number only contains numbers and whitespace
      if (!preg_match('/^\d+$/',$phonenumber)) {
        $phonenumberErr = "Only numbers and white space allowed";
      }
        }
    }    

  if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["previousdiagnosis"])) {
    $previousdiagnosis = "";
  } else {
    $previousdiagnosis = test_input($_POST["previous diagnosis"]);
  }

  if (empty($_POST["medicationprescribed"])) {
    $medicationprescribed = "";
  } else {
    $medicationprescribed = test_input($_POST["medication prescribed"]);
  }

  if (empty($_POST["addnewdiagnosis"])) {
    $addnewdiagnosis = "";
  } else {
    $addnewdiagnosis = test_input($_POST["add new diagnosis"]);
  }

  if (empty($_POST["prescription"])) {
    $prescription = "";
  } else {
    $prescription = test_input($_POST[""]);
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
<h2>Doctor Interface</h2>
<p><span class="error"> Patient information</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" style='background-color: powderblue;'>  
  PatientID: <input type="integer" name="patientid" value="<?php echo $patientid;?>" style='background-color: powderblue;'>
  <span class="error"> <?php echo $patientidErr;?></span>
  <br><br>
  ID Number: <input type="integer" name="idnumber" value="<?php echo $idnumber;?>" style='background-color: powderblue;'>
  <span class="error"> <?php echo $idnumberErr;?></span>
  <br><br>
  First Name: <input type="text" name="firstname" value="<?php echo $firstname;?>" style='background-color: powderblue;'>
  <span class="error"> <?php echo $firstnameErr;?></span>
  <br><br>
  Last Name: <input type="text" name="lastname" value="<?php echo $lastname;?>" style='background-color: powderblue;'>
  <span class="error"> <?php echo $lastnameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>" style='background-color: powderblue;'>
  <span class="error"> <?php echo $emailErr;?></span>
  <br><br>
  Previous Diagnosis: <br><textarea name="previousdiagnosis" rows="2" cols="30" style='background-color: powderblue;'><?php echo $previousdiagnosis;?></textarea>
  <br><br>
  Medication Prescribed: <br><textarea name="medicationprescribed" rows="2" cols="30" style='background-color: powderblue;'><?php echo $medicationprescribed;?></textarea>
  <br><br>
  Add New Diagnosis: <br><textarea name="diagnosis" rows="2" cols="30" style='background-color: powderblue;'><?php echo $addnewdiagnosis;?></textarea>
  <br><br>
  Prescription: <br><textarea name="prescription" rows="2" cols="30" style='background-color: powderblue;'><?php echo $prescription;?></textarea>
  <br><br>
  <input type="submit" name="save" value="Save">
  <input type="button" name="exit" value="Exit">

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
echo $email;
?>

</body>
</html>