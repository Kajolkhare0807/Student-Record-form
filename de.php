<?php
  $conn = mysqli_connect("127.0.0.1", "root", "", "student_detail");
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Name,Guardian_name ,Roll_Number,Email ,Grade ,Branch ,Mobile_Number";
  $result = $conn->query($sql);
  if($result && $result->num_rows){
  //if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Guardian_name"] . "</td><td>"
. $row["Roll_Number"]. "</td></tr>". $row["Email"]. "</td></tr>". $row["Grade"]. "</td></tr>". $row["Branch"]. "</td></tr>". $row["Mobile_Number"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
