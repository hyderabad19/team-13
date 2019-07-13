<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Resource</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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

<h3>Search for Resource</h3>
<form method="post">
<select name="mySearch" id="mySearch" class="select-css">
  <option value="library">library</option>
  <option value="playground">Playground</option>
  <option value="computerlab">computerlab</option>
</select><br><br>

<button class="btn btn-default">Search</button>
</form>
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

$sql = "SELECT * FROM material_resource where type='$res' AND isavailable=1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  echo '<table border="1" cellspacing="5" cellpadding="5" >
      <tr>
        
        <th>Resource Type</th>
        <th>Resource Capacity</th>
        <th>Available from</th>
        <th>Available till</th>
        <th>Book</th>
      </tr>';
    while($row = $result->fetch_assoc()) {
            $field1name = $row["type"];
            $field2name = $row["capacity"];
            $field3name = $row["fromtime"];
            $field4name = $row["totime"];
            echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Book Resource</button><div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Conformation</h4>
        </div>
        <div class="modal-body">
          <p>Resource Booked Successfully.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div></td>
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
