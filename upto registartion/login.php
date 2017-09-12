<?php
include_once 'connection.php';
//SESSION_start(); //database connection page
if(isset($_POST["submit1"]))
{
	echo "Invalid username or password";
	$username=$_POST["email"];   //username value from the form
	$password=$_POST["password"];	//password value from the form 
	//echo $username;//
	$sql="SELECT * FROM `tbl_login` WHERE email='$username' and password='$password'";//value querried from the table
	echo $sql;
	$res=mysqli_query($con,$sql);  //query executing function

	if($fetch=mysqli_fetch_array($res))
	{
		if($fetch['status']==1) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["email"]=$username;	// setting username as session variable
			header("location:state.php");	//home page or the dashboard page to be redirected
		}
		else if($fetch['status']==0) // role means admin or user , for admin set to 0 and for user set to
		{
			$_SESSION["email"]=$username;	// setting username as session variable
			header("location:district.php");

		}

	}


}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="css_login/reset.css">
<link rel="stylesheet" type="text/css" href="css_login/structure.css">

</head>

<body>
<form class="box login" method="post" name="submit">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input type="text" tabindex="1" placeholder="enter the username" name="email" required>
	  <label><a href="fpass.php" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input type="password" placeholder="enter the password"  name="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <input type="submit" class="btnLogin" value="Login" name="submit1">
	</footer>
</form>
<footer id="main">
  
</footer>
</body>
</html>