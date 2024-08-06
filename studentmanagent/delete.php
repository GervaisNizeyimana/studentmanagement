<?php 
include("conn.php");

if(isset($_POST['delete'])){


$id=$_GET['id'];


$q=mysqli_query($con,"DELETE from students where id='$id'");
if($q){

	echo"<script>alert('Student deleted successfully');window.location.href='dashboard.php'</script>";
}






}

if(isset($_POST['return'])){

	header('location: dashboard.php');
}








 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
 </head>
 <body>
 	<form method="POST">
 		<label><h2>Return back</h2></label>
 		<input type="submit" name="return" value="Back"><br><br><br>
 		<label><h2>Delete Student</h2></label>
 		
 		<input type="submit" name="delete" value="Delete">
 		
 	</form>
 
 </body>
 </html>
 