<?php
 $con=mysqli_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysqli_select_db($con,'register');

 if (isset($_GET['del_id'])) {
	$id= $_GET['del_id'];

	mysqli_query($con, "DELETE FROM data WHERE id=".$id);
	header('location: todoo.php');
}

?>