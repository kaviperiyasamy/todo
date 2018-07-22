<?php 
$con=mysqli_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,'register');
 $username = $_POST['username']; 
 $email = $_POST['email']; 
 $password = $_POST['password'];

 $query = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')"; 
 $data = mysqli_query ($con,$query); 
 if($data) { echo  header("Location: welcome.php"); }
 ?>