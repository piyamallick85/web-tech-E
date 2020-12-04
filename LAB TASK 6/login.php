<?php  
 
 session_start();  
 if(isset($_POST["sub"]))  
 {  

      $_SESSION["name"] = $_POST["name"];  
      $_SESSION['last_login_timestamp'] = time();  
      header("location:index.php");       
 }  
 ?>  

 <?php
session_start();  
 if(isset($_POST["sub"]))  
 {  
    if(isset($_POST["remember"]))
      setcookie("name",$_POST["name"],time()+60*60);
      setcookie("pass",$_POST["pass"],time()+60*60);
       
      header("location:index.php");       
 }  
 else{
  setcookie("name",$_POST["name"],time()-60*60);
      setcookie("pass",$_POST["pass"],time()-60*60);
      header("location:index.php"); 
 }

 function setValue($field){
  if(isset($_COOKIE[$field]))
  {
    echo $_COOKIE[$field];
  }

  function setValue($field){
  if(isset($_COOKIE[$field]))
  {
    echo "checked='checked'";
  }
 }
 ?>
 <!DOCTYPE html>  
 
 <html>  
      <head>  

           <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
               <?php include 'header.php' ?>  
      </head>  
      <body>  
        <fieldset>
    <legend align="center" style="font-size: 2.0em">Login</legend>
           <div class="container">  
                 
                <form method="post" align="center">  
                     Username :<input type="text" name="name" id="name" placeholder="Enter Username" class="form-control" value="<?php setValue("name")?>" required="name" /><br />  
                    Password : <input type="password" name="pass" id="pass" placeholder="Enter Pass" class="form-control" value="<?php setValue("pass")?>" required="pass" /><br />  
                     <input type="submit" name="sub" id="sub" class="btn btn-info" value="Submit" />  
           <br><br>


           
      <div class="container" style="background-color:#f1f1f1">

        <input type="checkbox" name="remember" value="<?php setValue("name")?>">
    <br>
    <span class="psw">Forgot <a href="forgetpass.php"> <span style="color: #ff0000">password?</span></a></span>
   </div>
                </form>  
                <br /><br />  
           </div>  
           <?php include 'footer.php' ?>
            </fieldset>
          </form>
      </body>  
 </html>  