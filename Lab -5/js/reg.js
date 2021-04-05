function validateForm() {


    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var uname = document.getElementById("uname").value;
    var pass = document.getElementById("pass").value;
    var cpass= document.getElementById("cpass").value;
    

    if (name == "") {
        document.getElementById("show").innerHTML="Please enter Name";
        return false;
      }
      if (email == "" ) {
        document.getElementById("show").innerHTML="Please enter Email";
        return false;
      } 
   
    if (uname == "") {
      document.getElementById("show").innerHTML="Please enter UserName";
      return false;
    }
    if ( pass.length < 8) {
      document.getElementById("show").innerHTML="Please enter password";
      return false;
    }

    if (cpass.length < 8 ) {
        document.getElementById("show").innerHTML="Please enter Confirm Password";
        return false; 
      }
   
  
    if (document.getElementById("male").checked == false &&  document.getElementById("female").checked == false)
    {
      document.getElementById("show").innerHTML="select gender";
      return false;
    }
  }