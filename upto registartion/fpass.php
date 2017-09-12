<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["email"];
$k=$_POST["drop1"];
$l=$_POST["seqans"];
$m=$_POST["password"];
$n=$_POST["repassword"];
echo $a;
if($m!=$n)
 {
	echo"not equal";
 }
else
 {
$sql="SELECT * FROM `tbl_registration` WHERE `email`='$a' and `seq_qus`='$k' and `seq_ans`='$l'";
//echo $sql;
$res=mysqli_query($con,$sql);
echo '$res';
if($row=mysqli_fetch_array($res))
{		//echo 'aa';
$res=mysqli_query($con,"UPDATE `tbl_login` SET `password`='$m' WHERE email='$a'");

	}
 }
}

?><html>
<head><style>
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
	height:300px;
	top:50px;
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



</head>



 

  </li>
</ul>
<br><br>
<center>
<div class="bb">

<div class="aa">

<form action="#" method="post" name="a">
<fieldset>
<legend>PASSWORD SETTING</legend>
<table border="0"width="400" style="width:80%;color:black;font-family:Calibri Light(Hedaings);font-size:80%;">
<tr class="spaceUnder"><td>ENTER YOUR EMAIL</TD><TD><INPUT TYPE="TEXT" NAME="email" required></td></tr><br>
  <tr class="spaceUnder"><td>SECURITY QUESTION</td><td><select name="drop1">
  <option value="pet name">pet name</option>
  <option value="Nick name">Nick name</option>
  </td></tr>
  <tr class="spaceUnder"><td>SECURITY ANSWER</td><td><input type="text" name="seqans" required></td></tr>
<tr class="spaceUnder"><td>PASSWORD</TD><TD><INPUT TYPE="TEXT" NAME="password"></td></tr>
<tr class="spaceUnder"><td>RE-ENTER Password</TD><TD><INPUT TYPE="TEXT" NAME="repassword"></td></tr>

<tr class="spaceUnder"><td><input type="submit" value="submit" name="submit" onsubmit="return validate()" class="button button5"></td></tr>
</table></form>

</BODY>
</html>
