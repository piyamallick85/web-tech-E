<?php
include("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html>
    <head>
        
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
.error {color: #FF0000;}
</style>
    </head>
    <body>

    <?php
// define variables and set to empty values



 $name = $email = $pass= $confpass = $gender =  "";
 $nameErr = $emailErr = $passErr= $confpassErr = $genderErr = "";

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$confpass=$_POST['confpass'];
$gender=$_POST['gender'];

   if($name!="" && $email!="" && $pass!="" &&$confpass!="" && $gender!=""){

$query="insert into registration_db values('$name','$email','$pass','$confpass','$gender')";

$data=mysqli_query($conn,$query);

if($data)
{
 // echo "data insert into database";
}
}
else
{
  //echo "Failed to insert data into database ";

  
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["pass"])) {
    $passErr = "Password is required ";
  } else {
    $pass = test_input($_POST["pass"]);
  }

  if (empty($_POST["confpass"])) {
    $confpassErr = "Confirm Password is required ";
  } else {
    $confpass = test_input($_POST["confpass"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  
}




function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;


}
?>
        
          <?php include 'header.php' ?>

             <fieldset>
    <legend align="center" style="font-size: 2.0em">Registration</legend>
             <form action="registration.php" method="post" align="center">

               

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
           Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  PASSWORD: <input type="password" name="pass" >
  <span class="error">* <?php echo $passErr;?></span>
  <br><br>
  CONFIRM PASSWORD: <input type="password" name="confpass">
  <span class="error">* <?php echo $confpassErr;?></span>
  <br><br>
GENDER:
  <input type="radio" name="gender" value="f">Female
  <input type="radio" name="gender" value="m">Male
  <input type="radio" name="gender" value="o">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <br><br>

  
  <br><br>

  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="Reset">  
</form>


  
  
</table>
  </fieldset>
   

     <?php include 'footer.php' ?>
</html>

