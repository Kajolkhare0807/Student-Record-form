<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "student_detail";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Name = $_POST['name'];
$Guar_name = $_POST['guar_name'];
$Rollno = $_POST['rollno'];
$E_mail = $_POST['email'];
$G_rade = $_POST['grade'];
$B_ranch = $_POST['branch'];
$Mobno = $_POST['mobno'];

$sql = "INSERT INTO details(Name,Guardian_name ,Roll_Number,Email ,Grade ,Branch ,Mobile_Number)
VALUES ( '$Name','$Guar_name','$Rollno','$E_mail','$G_rade','$B_ranch','$Mobno')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<script> location.href='showdetail.php'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
