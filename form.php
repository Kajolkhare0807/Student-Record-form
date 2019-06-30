<!DOCTYPE html>
<?php
$cookie_name = "username";
global $cookie_value;

if (isset($_POST['u_name']))
{
$cookie_value = $_POST['u_name'];
}
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>
<html>
<head>
<title>Student Registration form</title></head>
<link rel="stylesheet" href="style.css"><center>
<body>
    <h1><u><b>Enter Student Details</b></u></h1>
<center><div class = "simple-form">
  <?php
  if(!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {

      echo "User logged in as : " . $_COOKIE[$cookie_name];
  }
  ?>
  <form action ="inserts.php" method="post" id ="registration" >

      <input type = "text" name = "name" id ="button" placeholder ="Enter your name" required><br><br>


        <input type = "text" name = "guar_name" id ="button" placeholder ="Enter your Guardian name" required><br><br>


          <input type = "number" name = "rollno" id ="button" placeholder ="Enter your roll number" required><br><br>


            <input type = "text" name = "email" id ="button" placeholder ="Enter your email id" required><br><br>


              <input type = "text" name = "grade" id ="button" placeholder ="Enter your grade" required><br><br>


                <input type = "text" name = "branch" id ="button" placeholder ="Enter your branch" required><br><br>



                  <input type = "number" name = "mobno" id ="button" placeholder ="Enter your mobile no." required><br><br>




                      <input type = "submit" name = "submit" value ="submit" id = "butt">


            </form>  </div></center>







          </body>
          <center>
          </html>
