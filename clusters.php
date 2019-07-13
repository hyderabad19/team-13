<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form method="post">
<label for="cluster">Create CLuster:</label>
<input type="cname" name="clustername">
<br>
<input type="submit" name="update" value="Publish">
<br>
<input type="submit" name="Show Clusters" value="Save">
</form>
<?php
    if (isset($_POST['update'])) {
      $name=$_POST['clustername']
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loop";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO clusters VALUES ($name)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


    }
    elseif (isset($_POST['Show clusters'])) {
  $con=mysqli_connect("localhost","root","","loop");
  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $result = mysqli_query($con,"SELECT * FROM clusters");

  echo "<table border='1'>
  <tr>
  <th>cluster name</th>
  <th>Mandal name</th>
  </tr>";

  while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['cname'] . "</td>";
  echo "<td>".$row['mandal']."</td>";
  echo "</tr>";
  }
  echo "</table>";

  mysqli_close($con);

    }
?>
</body>
</html>
