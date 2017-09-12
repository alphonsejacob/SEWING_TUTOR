<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["address"];
$d=$_POST["contactno"];
$e=$_POST["pin"];
$f=$_POST["state"];
$g=$_POST["district"];
$h=$_POST["email"];
$i=$_POST["password"];
$j=$_POST["repassword"];
$k=$_POST["seq_qus"];
$l=$_POST["seq_ans"];

if($i!=$j)
{
	echo"not equal";
}
else
{

//
$sql2="SELECT * FROM tbl_registration WHERE email='$h'";
$result2=mysqli_query($con,$sql2);
if($res=mysqli_fetch_array($result2))
{
echo "ALREADY INSERTED";
}
else
{			//
$sql="INSERT INTO `tbl_registration`(`fname`, `lname`, `address`, `stateid`, `districtid`, `contactno`, `seq_qus`, `seq_ans`, `pin`, `email`) VALUES ('$a','$b','$c','$f','$g','$d','$k','$l','$e','$h')";
$result=mysqli_query($con,$sql);  //
$sql1="INSERT INTO `tbl_login`(`email`, `password`, `status`) VALUES ('$h','$i',1)";
$result1=mysqli_query($con,$sql1);
echo "successfully inserted";
}
}}
?>
<!DOCTYPE html>

<html lang="en">

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
    	width:500px;
	height:900px;
	top:220px;
	left:500px;
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

<body>
<table>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
	<tr><td>&nbsp</td></tr>
</table>



              
<form action="#" name="myform" id="myform" method="post">
<fieldset>
<legend>REGISTRATION FORM</legend>
<table border="0" width="400" style="width:80%;color:black;font-family:Calibri Light (Headings);font-size:80%;">
<tr class="spaceUnder"><td>FIRST NAME:</TD><TD><INPUT TYPE="TEXT" NAME="firstname" required></td></tr><br>
<tr class="spaceUnder"><td>LAST NAME:</TD><TD><INPUT TYPE="TEXT" NAME="lastname" required></td></tr>
<tr class="spaceUnder"><td>ADDRESS</td><td><input type="text" name="address" required></td></tr>
<tr class="spaceUnder"><td>CONTACT NO:</td><td><input type="text" name="contactno" required></td></tr>
<tr class="spaceUnder"><td>PIN CODE:</td><td><input type="text" name="pin" required></td></tr>
<tr class="spaceUnder"><td>STATE</td><td><select name="state" style="width:90%;color:black;font-family:Calibri Light (Headings);font-size:90%;">
<?php
$results= mysqli_query($con,"select stateid,statename from tbl_state");
$i=1;
while($row=mysqli_fetch_array($results))
{
?>
	<option value="<?php echo $row['stateid']; ?>"><?php echo $row['statename']; ?></option>
	
<?php 
}

?>
</select></td></tr>
<tr class="spaceUnder"><td>DISTRICT</td><td><input type="text" name="district" required>
</td></tr>

<tr class="spaceUnder"><td>EMAIL</td><td><input type="email" name="email" required></td></tr>

<tr class="spaceUnder"><td>PASSWORD</TD><TD><INPUT TYPE="password" NAME="password"></td></tr>
<tr class="spaceUnder"><td>RE-ENTER PASSWORD</TD><TD><INPUT TYPE="password" NAME="repassword"></td></tr>
  
  <tr class="spaceUnder"><td>SECURITY QUESTION</td>
		<td>
		  <select name="seq_qus" required>
			<option value="">--select--</option>
			<option value="Nick name">NICK NAME</option>
			<option value="Father's name">Father's name</option>
			<option value="pet name">pet name</option>
			<option value="Ambition">Ambition</option>
		  </select>
		 </td>
	</tr>
	
	

  
  <tr class="spaceUnder"><td>SECURITY ANSWER</td><td><input type="text" name="seq_ans" required></td></tr>


<tr class="spaceUnder"><td><input type="submit" value="submit" name="submit" onsubmit="return validate()" class="button button5"></td></tr>
</table></form>
<div class="sis4"></div>
</BODY>
</html>
</div>
       

</body>

</html>
