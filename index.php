<!doctype html>
<html>
<head>
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styletemp.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
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
							<li ><a href="loop.html">HOME</a></li>
							<li ><a href="login.php">Login</a></li>
							<li ><a href="register.php">Register</a></li>
							<li ><a href="clusters.php">CLUSTERS</a></li>
							<li ><a href="schools.html">SCHOOLS</a></li>
							<li ><a href="resource.html">RESOURCE</a></li>
							<li ><a href="event.html">EVENTS</a></li>

						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="content-main-wrapper">

				<form method="post" align="center">
			<label for="cluster">Create CLuster:</label>
			<input type="text" name="clustername" align="center">
			<br>
			<label for="mandal" align="center">Cluster Region:</label>
			<input type="text" name="region" align="center">
			<br>
			<label for="state" align="center">state:</label>
			<input type="text" name="state" align="center">
			<br>
			<input type="submit" name="update" value="Create">
			<br>
			<input type="submit" name="ShowClusters" value="Show Clusters" align="center">
			</form>
			<?php
					if (isset($_POST['ShowClusters'])) {

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

				$sql = "INSERT INTO clusters (cname,mandal,state) VALUES ('$name','$mant','$st') ";

			if (mysqli_query($con, $sql)) {
					echo "New record created successfully";
			} else {
					echo "Error: " . $sql . "<br>" . mysqli_error($con);
			}

			mysqli_close($con);

					}
			?>
				</div>
		<footer class="footer-main-wrapper">
			<div class="footer-links-wrapper">
				<div class="container">
					<div class="footer-links">
						<h2>Contact Deatils</h2><br>
						<ul>

							<li>Loop Education Foundation</li>
							<li>Hyderabad,Telangana</li>
							<li>Call us: +91 8886171701</li>
							<li class="special">Email:conatact@loopeducation.org</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copy">
				<div class="container">
					<p>Copyright &copy; Domain <span> TEAM 13<sapn></p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
