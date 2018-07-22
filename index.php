<?php 
session_start();
$con=mysqli_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,'register');
 $title = $_POST['title']; 
 $description = $_POST['description']; 
 $query = "INSERT INTO data (userid,title,description,tododate) VALUES ('".$_SESSION['id']."','$title','$description',now())";
 $data = mysqli_query ($con,$query); 
 if($data)
 {
  echo  header("Location: todoo.php"); 
  echo  header("<a href='show.php'>View List</a>");
 }
 ?>

