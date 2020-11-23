<?php
include("connection.php");
error_reporting(0);
 $n= $_GET['name'];
 $e= $_GET['email'];

?>


<!DOCTYPE html>
<html>
    <head>
        
        <title>Edit</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <style>
.error {color: #FF0000;}
</style>
    </head>
    <body>

    <?php
// define variables and set to empty values



$name = $email  =   "";
$nameErr = $emailErr  =  "";


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
    <legend align="center" style="font-size: 2.0em">Edit</legend>
             <form action="edit.php" method="get" align="center">

               

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
  Name: <input type="text" name="name" value="<?php echo "$n" ?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo "$e"?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

  <input type="submit" name="update" value="Update">  
 
</form>
</table>
  </fieldset>
   

     <?php include 'footer.php' ?>
</html>

<?php
 
 if($_GET['update'])
 {
  $me = $_GET['name'];
  $el = $_GET['email'];

  $query = "update registration_db set name='$me', email='$el' where name= '$me'";
  $data = mysqli_query($conn,$query);

  if($data)
  {
    echo"<script>alert('Record Updated')</script>";
  }

  else{
    echo"Failed to update database";
  }


 }

?>

