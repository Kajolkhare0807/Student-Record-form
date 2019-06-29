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
<title>Student Details</title>
<style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     }
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
  body
    {
      background-image: url("blue.jpg");


       height: 100%;


       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
    }
 </style></head>

<body>
  <h1><u><b>Student Record</b></u></h1>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Guardian_name</th>
    <th>Roll_Number</th>
      <th>Email</th>
        <th>Grade</th>
          <th>Branch</th>
            <th>Mobile_Number</th>

  </tr>

  <?php
    $conn = mysqli_connect("127.0.0.1", "root", "", "student_detail");
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT Name,Guardian_name ,Roll_Number,Email ,Grade ,Branch ,Mobile_Number from details";
    $result = $conn->query($sql);
    if($result && $result->num_rows){
    //if ($result->num_rows > 0) {
     // output data of each row

       while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Guardian_name"] . "</td><td>"
. $row["Roll_Number"]. "</td><td>". $row["Email"] . "</td><td>". $row["Grade"] . "</td><td>". $row["Branch"] . "</td><td>". $row["Mobile_Number"] . "</td></tr>";
}

  echo "</table>";
  } else { echo "0 results"; }
  $conn->close();
  ?>

</table>
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {

    echo "User logged in as : " . $_COOKIE[$cookie_name];
}
?>





</body>
</html>
