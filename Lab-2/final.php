
<!DOCTYPE html>
<html>
<head>
<body 


<?php
$validatename="";
$validatepassword="";
$validateemail="";
$validatecpassword="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"];
    $cpassword=$_REQUEST["cpassword"];

    $name = $_POST ["name"];
    $length = strlen ($name);  
if (!preg_match ("/^[a-zA-z,_,-]*$/", $name) ) {  
    $ErrMsg = "alpha numeric characters,period,dash or uderscore only";  
             echo $ErrMsg;  
} else if ( $length < 5) {  
  $ErrMsg = "name must have 5 characters.";  
          echo $ErrMsg;  
} else {  
  echo "Your  name is: " .$name;  
}
 
$email = $_POST ["email"];  
$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
if (!preg_match ($pattern, $email) ){  
    $ErrMsg = "Email is not valid.";  
            echo $ErrMsg;  
} else {  
    echo "Your valid email address is: " .$email;  
}  

}
?>

<h1><b>REGISTRATION</b></h1>
<form action="<?php  echo $_SERVER["PHP_SELF"];?>" method="post">

<table>
<tr>
<td>Name: </td>
<td><input type="text" name="name" ><?php echo $validatename; ?></td></tr>
<br>
<br>

<tr>
<td>Email: </td>
<td><input type="text" name="email"></td></tr>
<br>
<br>

<tr>
<td>User Name: </td>
<td><input type="text" name="username"></td></tr>
<br>
<br>

<tr>
<td>Password: </td>
<td><input type="password" name="password"></td></tr>
<br>
<br>

<tr>
<td>Confirm Password: </td>
<td><input type="Password" name="cpassword"></td></tr>
<br>
<br>

<tr>
<td> Gender: </td></tr>
<br>
<tr><td>  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label></td>
  <td>  <input type="radio" id="female" name="gender" value="female">
  <label for="female">female</label></td>
  <td>  <input type="radio" id="other" name="gender" value="other">
  <label for="other">other</label></td>
<br>
<tr>
<td> Date Of Birth: </td></tr>
<tr><td><input type="date" id="birthday" name="birthday"></td>
</tr>
<br>
<br>
<tr>
<td><input type="submit" value="Submit"></td>
<td><input type="reset" value="Reset"></td></tr>

</form> 


</body>
</html>