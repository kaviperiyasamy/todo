<html>
<head>
	<link rel="stylesheet" type="text/css" href=".\todoo.css">
</head>
<body class="animation">
	<div class="heading">
	<h2 style="font-style: 'Hervetica';">ToDo List</h2>
	</div>
	<form method="post" action="index.php" name="clickdata" id="clickdata">
		<a href="show.php" class="view">View List</a><br/><br/>
		<div class="border">
		<input type="text" name="title" placeholder="Title.." class="title_input"><br/><br/>
		<input type="text" name="description" placeholder="Description.." class="description_input" style="width: 400px";>
		<button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
	    </div>	
	</form>
	<div class="image">
	<img src="3D-cartoon-HD-wallpaper.jpg" height="420px" width="750px">
    </div>
</body>
</html>