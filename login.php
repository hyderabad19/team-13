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
$uname=$pwd=$unameErr=$pwdErr=$Error="";
$flag=0;
if(isset($_POST["submit"])){
	$uname=$_POST["uname"];
	$pwd=$_POST["pwd"];
	$unameErr="";
	$pwdError="";
		if(!preg_match("/^[0-9]*[0-9]$/",$uname)){
			$unameErr="Invalid Id";
			$flag=1;
		}
		if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[.@$&_])/",$pwd)){
			$pwdErr="Invalid Password";
			$flag=1;
		}
	if($flag!=1){
		//header('login.html');
		echo "Success";
	}
}
//mysql_close($connection);
?>
<div class="login_page">
	<div class="form">
	<form class="login" name="login" method="POST">
		<label>Enter Username*</label>
		<input type="uname" placeholder ="Username" id="uname" name="uname" required="" value="<?php echo $uname;?>">
		<label class="error"><?php echo $unameErr;?></label>
		<br><br>
		<label>Enter Password*</label>
		<input type="password" placeholder ="Password" id="pwd" name="pwd" required="" value="<?php echo $pwd;?>">
		<label class="error"><?php echo $pwdErr;?></label>
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