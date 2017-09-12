<?php
include_once 'connection.php'; //database connection page
if(!isset($_SESSION["id"]))
{
	ssheader('location:home.php');
}
else
{
$id=$_SESSION['id'];

?>
<html>
<head>
<style>
div.new {
    float: right;
	width: 50%;
    height: 20px;
    border: 3px solid red;
}
div.d {
   background-color: lightgrey;
    margin-top: 20px;
    margin-bottom: 50px;
    margin-right: 20px;
    margin-left: 20px;
    width: 100%;
    
   
}
div.absolute {
  background-color: white;
  text-align: right;
    position: absolute;
    top: 150px;
    right: 50;
    width: 50%;
    height: 50px;
}
div.sis1 {
  background-color: white;
    position: absolute;
    top: 300px;
    width:100%;
    height: 500px;
}
div.sis3{
  background: transparent ;
    position: absolute;
    top: 450px;
    right: 100px;
    width: 20%;
    height: 150px;
       
}
div.sis2 {
  background: transparent ;
    position: absolute;
    top: 330px;
    right: 0;
 margin-left:70px;
    margin-right:0px;
    width: 20%;
    height: 150px;
       
}
div.aa
{	
	
	position:absolute;
    	width:1250;
	height:200px;
	top:220px;
	left:70px;
	background-color:rgba(0,0,0,0.3);
	margin: 0 auto;
	margin-top:40px;
	padding-top:10px;
	padding-left:20px;
	border-radius:15px;
	-webkit-border-radius:15px;
	-o-border-radius:15px;
	-moz-border-radius:15px;
	color:white;
	font-weight:bolder;
}
.aa input[type="text"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left;5px;
	-moz-border-radius:5px;
}
.aa input[type="password"]
{
	width:200px;
	height:35px;
	border:0px;
	border-radius:5px;
	webkit-border-radius:5px;
	-o-border-radius:5px;
	padding-left;5px;
	-moz-border-radius:5px;
}
.aa input[type="submit"]
{
	width:100px;
	height:35px;
	border:0px;
	border-radius:5px;
	-webkit-border-radius:5px;
	-o-border-radius:5px;
	-moz-border-radius:5px;
	background-color:skyblue;
	font-weight:bolder;
	box-shadow:inset -4px -4px rgb(0,0,0,0.3)
	font-size;18px;
}
       
}
img.i
{
float:right;
 top: 150px;
    right: 70px;
}

</style>

<title>STUDENT HOME</title>
<link rel="stylesheet" href="saps.css" type="text/css">


</head>
<body style="background-image:url(.jpg); background-size:cover; backgorund-">
<br>
<div style="color:#555555;font-family:Agency FB;font-size:351%;margin-right:0px;">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<img src="IMM.jpg" height="100px" width="150px">
<BR>
<span style="color:black;font-family:Calibri Light (Headings);font-size:40%;"><b><pre>
</PRE></b></span></div>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
  <ul>
  <li><a class="" href="userhome.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp;
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp;
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
HOME</a></li>
    <li><a href="useredit.php">EDIT</a></li>
	<li><a href="new.php">CHANGE PASSWORD</a></li>
  
  <li><a href="newlogin.php">LOGOUT</a></li>
  
</ul>
<br><br>
<center>
<div class="bb">

<div class="aa

<h2>DETAILS</h2>
<form action="viewstudents.php" method="post" name="my">
<?php
 $sql="select * from registration where email='$id'"; //value querried from the table
	//echo $sql;
$res=mysqli_query($con,$sql);  //query executing function
	//echo '$res';
if($fetch=mysqli_fetch_array($res))
	{?>
		<table border="1"><tr>
<td>FIRST NAME</TD><td>LASTNAME</TD><td>EMAIL</TD><td>ADDRESS</TD><td>PINCODE</TD>
</TR>
<?php

$results= mysqli_query($con,"select * from TBL_registration where email='$id'");
$i=1;
while($row=mysqli_fetch_array($results))
{
	?>
	<tr>
	
	<td><?php echo $row['fname'];?></td>

	<td><?php echo $row['lname'];?></td>
<td><?php echo $row['email'];?></td>
	
	
	<td><?php echo $row['address'];?></td>


	<td><?php echo $row['PIN'];?></td>

	
	</tr></table>
	<?php
}

}

?></form>
</div>
</div>


</body>
</html><?php } ?>