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
