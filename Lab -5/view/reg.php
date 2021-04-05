<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mycss.css">
    <script src="../js/reg.js"></script>
</head>

<body>

    <h2>Registration Form</h2>



    <p id="show"></p>

    <form name="regForm" action="" onsubmit="return validateForm()" method="post">
        <table>

            <tr>
                <td>Name</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>


            <tr>
                <td>Email</td>
                <td><input type="text" name="email" id="email"></td>
            </tr>

            <tr>
                <td>Username</td>
                <td><input type="text" name="uname" id="uname"></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="pass" id="pass"></td>
            </tr>

            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpass" id="cpass"></td>
            </tr>
            </table>
           
            <h3>Genter</h3>
            Male <input type="radio" name="gender" id="male">
            Female <input type="radio" name="gender" id="female">
            Other <input type="radio" name="gender" id="other">

            <h3>Date of Birth</h3>
            <input type="date" name="date" id="date"><br><br>


            <input type="submit" value="login" name="login">
            <input type="reset" value="Reset">


      

    </form>
    <br>





</body>

</html>