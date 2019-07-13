<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<style type="text/css">
		.id{
			font-family: "Roboto", sans-serif;
			font-size: 14px;
			background-color: blue;
		}
		.class{
			color: red;
		}
	</style>
</head>
<body>
<?php
$uname=$pwd=$unameErr=$pwdErr=$Error=$sname=$snameErr=$loc=$locErr=$email=$emailErr=$cpwd=$cpwdErr="";
$flag=0;
if(isset($_POST["submit"])){
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$sname=$_POST["sname"];
	$email=$_POST["email"];
	$loc=$_POST["loc"];
	$cpwd=$_POST["cpwd"];
	if(!preg_match("/^[A-Z][a-z ]+[a-z]$/",$sname)){
		$snameErr="Invalid School Name";
		$flag=1;
	}
	if(!preg_match("/^[a-zA-Z0-9][a-zA-Z0-9]+[@](gmail.com|yahoo.com|cbit.ac.in)$/",$email)){
			$emailErr="Invalid Location";
			$flag=1;
		}
	if(!preg_match("/^[A-Z][a-z ]+[a-z]$/",$loc)){
		$locErr="Invalid Location";
		$flag=1;
	}
	
		if(!preg_match("/^[0-9]*[0-9]$/",$uname)){
			$unameErr="Invalid Id";
			$flag=1;
		}
		if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.@$&_])/",$pwd)){
			$pwdErr="Invalid Password";
			$flag=1;
		}
		if($pwd!=$cpwd){
			$cpwdErr="Password does not match";
			$flag=1;
		}
	if($flag!=1){
		echo "Successful";
	}
}
?>
<div class="login_page">
	<div class="form">
	<form class="login" name="login" method="POST">
	<label>Enter School Name*</label>
			<input type="text" name="sname" placeholder="Name" required="" class="sname" value="<?php echo $sname;?>">
			<label class="error"><?php echo $snameErr;?></label>
			<br/><br/>
			<label>Enter School Email*</label>
			<input type="email" placeholder ="Email ID" name="email" required="" value="<?php echo $email?>"><br>
			<label class="error"><?php echo $emailErr;?></label>
			<label>Enter School Location*</label>
			<input type="text" placeholder="Location" name="loc" required="" value="<?php echo $loc;?>"><br>
			<label class="error"><?php echo $locErr;?></label>
		<label>Enter Username*</label>
		<input type="uname" placeholder ="Username" id="uname" name="uname" required="" value="<?php echo $uname;?>">
		<label class="error"><?php echo $unameErr;?></label>
		<br><br>
		<label>Enter Password*</label>
		<input type="password" placeholder ="Password" id="pwd" name="pwd" required="" value="<?php echo $pwd;?>">
		<label class="error"><?php echo $pwdErr;?></label>
		<br><br>
		<label>Confirm Password*</label>
		<input type="password" placeholder="Retype Password" name="cpwd" required="" value="<?php echo $cpwd;?>"><br>
		<label class="error"><?php echo $cpwdErr;?></label>
		<br><br>
		<input type="submit" value="submit" class="id" name="submit" style="background-color: rgba(0,0,0,0.4); font-size: 20px;color: white" >
		<br><br>
		<label class="error"><?php echo $Error;?></label>
		<p class="message" style="color: white">Not Registered?<a href="register.php" style="color: white" >Register</a></p>
	</form>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>