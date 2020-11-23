<!DOCTYPE html>
<html>
    <head>
        
        <title>Registation</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
.error {color: #FF0000;}
</style>
    </head>
    <body>

    <?php
// define variables and set to empty values



$name = $email = $pass= $confpass = $gender = $dateofbirth= "";
$nameErr = $emailErr = $passErr= $confpassErr = $genderErr = $dateofbirthErr= "";


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

  if (empty($_POST["dateofbirth"])) {
    $dateofbirthErr = "Date of Birth is required";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
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
    <legend align="center" style="font-size: 2.0em">Registation</legend>
             <form action="registation.php" method="post" align="center">

               

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
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <br><br>

   DATE OF BIRTH: <input type="Date" name="dateofbirth" min="1953-01-01" max="1998-01-01">
   <span class="error">* <?php echo $dateofbirthErr;?></span>
  <br><br>
  <br><br>

  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="Reset">  
</form>


  
  


<?php
echo "<h2>Your Output:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $pass;
echo "<br>";
echo $confpass;
echo "<br>";
echo $gender;
echo "<br>";
echo $dateofbirth;


?>

       
  </table>
  </fieldset>
   

     <?php include 'footer.php' ?>
</html>
