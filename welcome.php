<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href=".\style.css">
  <title>Welcome!</title>
  <!--jquery-->
  <script src="jquery-1.12.4.js"></script>
  <!-- jquery UI -->
  <link rel="stylesheet" href="jquery-ui.css">
 
  
</head>
<body class="form">
  <form method="post" action="enter.php" name="enterdata" id="enterdata" >
  <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href=".\vali.php">Log In</a></li>
  </ul>
  <fieldset>
  <div class="signup">   
  User Name:<br>
  <input type="text" name="username" pattern="[a-zA-Z0-9\s]+" required><br><br>
  Email:<br>
  <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
  Password:<br>
  <input type="password" name="password" required><br><br>
  <input type="submit" value="SignUp" name="submit"><br>
  </div>
  </div>
  </fieldset>
  </form>    
      
</body>
</html>
