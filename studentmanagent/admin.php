
<?php
session_start();

if(isset($_SESSION['username'])){

	header("location:dashboard.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		Admin Page
	</title>
</head>
<body>
	<h1>Admin login</h1>
	<form method="post" action="">
		<label>Username:</label><input type="text" name="username" placeholder="Enter Username" 


		value="<?php  if(isset($_COOKIE['username'])){
			echo $_COOKIE['username'];
		} ?>"><br><br>
		<label>Password:</label><input type="Password" name="password" placeholder="Enter Username"
value="<?php 
if(isset($_COOKIE['password'])){
	echo($_COOKIE['password']);
}
 ?>" 
		><br><br>
		<input type="submit" name="login" value="Login">

		

	</form>

</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

	$username=$_POST['username'];
	$password=$_POST['password'];
	$con=mysqli_connect("localhost","root","","student_management_db");
    $query=mysqli_query($con,"SELECT * FROM admin WHERE username='$username' and password='$password'");

    if(mysqli_num_rows($query)>0){
    	$_COOKIE['username']=$username;
    	setcookie("username",$username,time()+(86400),"/");
    	$_COOKIE['password']=$password;
    	setcookie("password",$password,time()+(86400),"/");

    	$_SESSION['username']=$username;

    	header('location: dashboard.php');

    }else{
    	echo "Invalid username or password";
    }





	}

?>