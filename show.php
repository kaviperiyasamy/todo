<?php 
session_start();

$con=mysqli_connect('localhost','root','') or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysqli_select_db($con,'register');
?>
<?php 
		// select all tasks if page is visited or refreshed
		$tasks = mysqli_query($con, "SELECT * FROM data where userid=".$_SESSION['id']."");
        echo "<table border='1'>
		<tr>
		<th>TITLE</th>
		<th>DESCRIPTION</th>
		<th>CLOSE</th>
		</tr>";
		 while ($row = mysqli_fetch_array($tasks)) { ?>
			<tr>
				<td class="title"> <?php echo $row['title']; ?> </td>
				<td class="description"> <?php echo $row['description']; ?> </td>

				<td class="delete"> 
					<a href="delete.php?del_id=<?php echo $row['id'] ?>">X</a> <br/>
				</td>
			</tr>
		<?php  } ?>	