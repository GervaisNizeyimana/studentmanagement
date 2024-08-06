<?php 

session_start();
session_destroy();
echo "<script>alert('Do you really wanna logout?');
		window.location.href='admin.php'</script>";




 ?>