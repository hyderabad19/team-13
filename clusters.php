<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form method="post">
<label for="cluster">Create CLuster:</label>
<input type="text" name="clustername">
<br>
<label for="mandal">Cluster Region:</label>
<input type="text" name="region">
<br>
<label for="state">state:</label>
<input type="text" name="state">
<br>
<input type="submit" name="update" value="Create">
<br>
<input type="submit" name="Show Clusters" value="Show Clusters">
</form>
<?php
    if (isset($_POST['Show Clusters'])) {

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
      <th>Mandal</th>
      </tr>";

      while($row = mysqli_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['cname'] . "</td>";
      echo "<td>" . $row['mandal'] . "</td>";
      echo "</tr>";
      }
      echo "</table>";

      mysqli_close($con);

    }
    elseif (isset($_POST['update'])) {
      $name=$_POST['clustername'];
      $mant=$_POST['region'];
      $st=$_POST['state'];
      echo "$name";
      echo "$mant";
  $con=mysqli_connect("localhost","root","","loop");
  // Check connection
  if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql = "INSERT INTO clusters (cname,mandal,state) VALUES ($name,$mant,$st) ";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);

    }
?>
</body>
</html>
