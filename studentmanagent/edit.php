<?php 

include("conn.php");
$id=$_GET['id'];

$query=mysqli_query($con,"SELECT * FROM students WHERE id='$id'");

if(mysqli_num_rows($query)>0){

while($row=mysqli_fetch_array($query)){


?>
<form method="post">

		<label>Student name: </label><input type="text" name="name" placeholder=" First name" value="<?php  echo $row[1];  ?>"><br><br>
		<label> Student Email:</label><input type="email" name="email" placeholder="Enter Email" value="<?php  echo $row[2];  ?>"><br><br>
		<label>Student marks </label><input type="number" name="mark" placeholder="Enter marks"value="<?php  echo $row[3];  ?>"><br><br>
		<input type="submit" name="edit" value="edit">
		</form>

<?php

if(isset($_POST['edit'])){


	$studentname=$_POST['name'];
	$studentemail=$_POST['email'];
	$studentmarks=$_POST['mark'];
	$q=mysqli_query($con,"UPDATE  students set name='$studentname',email='$studentemail',grade='$studentmarks'");
	if($query){
		echo "<script>alert('Student Edited successfully');
		window.location.href='dashboard.php'</script>";
	}
}






}





}



?>
 

	

