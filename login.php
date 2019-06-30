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
	<title> Login Form</title>
	<link rel="stylesheet" href="log.css">
	<link rel="stylesheet"  href="font-awesome.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
	<img src="im.png"/>
		<form method ="post" action = "form.php">
		<div class="form-input">
		<input type="text" name="u_name" placeholder="Enter the User Name">
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password" required>
		</div>


		<input type="submit" type="submit" value="LOGIN" class="btn-login" required>

		</form></div>
    //<?php
  //  if(!isset($_COOKIE[$cookie_name])) {
      //  echo "Cookie named '" . $cookie_name . "' is not set!";
  ////  } else {
      //   echo "User logged in as : " . $_COOKIE[$cookie_name];
  //  }
  //  ?>
</body>
</html>
