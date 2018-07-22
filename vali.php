<html>
<head>
<link rel="stylesheet" type="text/css" href=".\style1.css">
</head>
<body class="color">
<fieldset>
<div class="form1">
<h3>LOGIN</h3>
<form class="content" action='#' method='post'>  
Email:<br/>
<input type='email' name='email'/><br/><br/>
Password:<br/>
<input type='password' name='password'/><br/><br/>
<input type='submit' name='submit' value='Log In'/>
<div class="redirect">
<p>Need to <a href=".\welcome.php"/>SIGNUP</p>
</div>
</fieldset>
</form>

<?php
session_start();
if(isset($_POST['submit']))
{
 $con=mysqli_connect('localhost','root','') or die(mysql_error());
 $db=mysqli_select_db($con,'register') ;
 $email=$_POST['email'];
 $password=$_POST['password'];
 if($email!=''&&$password!='')
 {
   $query=mysqli_query($con,"select * from users where email='".$email."' and password='".$password."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   //print_r($res);exit;
   if($res)
   {
    $_SESSION['email']=$email;
    $_SESSION['id']=$res[0];
    header('Location:todoo.php');
   }
   else
   {
    echo'You entered username or password is incorrect';
   }
 }
 else
 {
  echo'Enter both username and password';
 }
}
?>
</div>
</body>
</html>
