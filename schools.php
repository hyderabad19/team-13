<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Resource</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styletemp.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.select-css {
    display: block;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 1.4em .5em .8em;
    width: 100%;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
}
.select-css::-ms-expand {
    display: none;
}
.select-css:hover {
    border-color: #888;
}
.select-css:focus {
    border-color: #aaa;
    box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
    box-shadow: 0 0 0 3px -moz-mac-focusring;
    color: #222; 
    outline: none;
}
.select-css option {
    font-weight:normal;
}
  </style>
</head>
<body>
<div class="container-main-wrapper">
		<header class="header-wrapper">
			<div class="container">
				<div class="header-menu-wrapper" >
					<div class="brand-logo">
						<img class="img-responsive" src="images/loop.png" alt="image">
					</div>
					<div class="main-menu">
						<ul class="nav navbar-nav ">
							<li ><a href="loop.php">HOME</a></li>
							<li ><a href="clusters.php">CLUSTERS</a></li>
							<li ><a href="schools.html">SCHOOLS</a></li>
							<li ><a href="resource.html">RESOURCE</a></li>
							<li ><a href="event.html">EVENTS</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
<h3>Lists of Clusters</h3>

<?php
ini_set( "display_errors", 0);
$res = $_POST["mySearch"];
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

$sql = "SELECT * FROM schools";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo '<table border="1" cellspacing="5" cellpadding="5" >
      <tr>
        
        <th>Name</th>
        <th>City</th>
        <th>Mandal</th>
        <th>State</th>
        <th>Cluster</th>
        <th>Category</th>
        <th>Management Type</th>
      </tr>';
    while($row = $result->fetch_assoc()) {
            $field1name = $row["sname"];
            $field2name = $row["city"];
            $field3name = $row["mandal"];
            $field4name = $row["state"];
            $field5name = $row["cid"];
            $sql1 = "SELECT * FROM cluters where cid='$field5name'";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                while($row1 = $result->fetch_assoc()) {
                    $field6name = $row["cname"];
                }
            }
            $field7name = $row["scategory"];
            $field8name = $row["smanagement"];
            echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td>
                  <td>'.$field4name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td> 
              </tr>';
          }
    echo '</table';
} else {
    echo "0 results";
}

$conn->close();
?> 


</body>
</html>
