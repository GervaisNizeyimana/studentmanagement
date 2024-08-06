
<?php 

include('conn.php');

if(isset($_POST['add'])){

	$studentname=$_POST['name'];
	$studentemail=$_POST['email'];
	$studentmarks=$_POST['mark'];
	if($studentname==""){
		$_COOKIE['studentname']=$studentname;
		setcookie("studentname",$studentname,time()+2);
		echo "<script>alert('All student information required');
		window.location.href='addstudent.php'</script>";
	}elseif ($studentemail=="") {
		
		$_COOKIE['studentemail']=$studentemail;
		setcookie("studentemail",$studentemail,time()+2);
		echo "<script>alert('All student information required ');
		window.location.href='addstudent.php'</script>";
	}elseif ($studentmarks=="") {
		
		
		
		$_COOKIE['studentmarks']=$studentmarks;
		
		
		setcookie("studentmarks",$studentmarks,time()+2);

		echo "<script>alert('All student information required');
		window.location.href='addstudent.php'</script>";

	}else{

		$query=mysqli_query($con,"insert into students (name,email,grade) values('$studentname','$studentemail','$studentmarks')");
	if($query){
		echo "<script>alert('Student added successfully');
		window.location.href='dashboard.php'</script>";
		
	}
}

	}


	







 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Insertion page</title>
</head>
<body>
	<form method="post">

		<label>Student name: </label><input type="text" name="name" placeholder="Enter name
		" value="<?php if(isset($_COOKIE['studentname'])){
			echo $_COOKIE['studentname'];
		} ?>">
		<br><br>
		<label> Student Email:</label><input type="email" name="email" placeholder="Enter Email"value="
		<?php
		if(isset($_COOKIE['studentemail'])){
			echo $_COOKIE['studentemail'];
		}
		?>
		"><br><br>
		<label>Student marks </label><input type="number" name="mark" placeholder="Enter marks"value="
		<?php
		if(isset($_COOKIE['studentmarks'])){
			echo $_COOKIE['studentmarks'];
		}
		?>
		"><br><br>
		<input type="submit" name="add" value="Add student">
		

	</form>
	

</body>
</html>