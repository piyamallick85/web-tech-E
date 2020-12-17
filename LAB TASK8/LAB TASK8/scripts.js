function validate(){
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;
  var phone = document.getElementById("phone").value;
  var address = document.getElementById("address").value;
  var error_message = document.getElementById("error_message");
  
  error_message.style.padding = "10px";
  
  var text;
  if(name.length < 5){
    text = "Please Enter valid Name";
    error_message.innerHTML = text;
    return false;
  }

  if(email.indexOf("@") == -1 || email.length < 6){
    text = "Please Enter valid Email";
    error_message.innerHTML = text;
    return false;
  }


  
   if(password.length == 0){
    text = "Password is required";
    error_message.innerHTML = text;
    return false;
  }



  if(password.length < 6){
    text = "Password should be atleast 6 characters long!";
    error_message.innerHTML = text;
    return false;
  }


  if(cpassword != password){
    text = "Password and Confirm password should match!";
    error_message.innerHTML = text;
    return false;
  }
  if(isNaN(phone) || phone.length != 11){
    text = "Please Enter valid Phone Number";
    error_message.innerHTML = text;
    return false;
  }
  
  if(address.length <= 20){
    text = "Please Enter More Than 20 Characters";
    error_message.innerHTML = text;
    return false;
  }
  alert("Form Submitted Successfully!");
  return true;
}