<!DOCTYPE html>
<html>
    <head>
        
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>

             
              <?php include 'header.php' ?>
    	

             
             <form action="loginbob.php" method="post" align="center">
                <fieldset>
    <legend align="center" style="font-size: 2.0em">Login</legend>
                
  
    <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
     <br>
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me<br>
    </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="forgetpass.php"> <span style="color: #ff0000">password?</span></a></span>
   </div>
   

   </fieldset>
   </form>


   <?php include 'footer.php' ?>

</body>
   
   </html>
