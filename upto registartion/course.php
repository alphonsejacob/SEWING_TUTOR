<?php
include 'connection.php';
if(isset($_POST['submit']))
	
{
$a=$_POST["course_name"];  
$b=$_POST["fee"];  
$c=$_POST["duration"];  //
$sql1="INSERT INTO `tbl_course`(`coursename`, `fee`, `duration`) VALUES ('$a','$b','$c')";
$result1=mysqli_query($con,$sql1);
echo "successfully inserted";
}
?>
<html>
    <head>
        
        <title>course</title>
    </head>

<form action="#" name="myform" id="myform" method="post">
	<fieldset>
		<legend>ADD COURSE</legend>
		<table border="0">

		<tr><td>COURSE NAME:</TD><TD><INPUT TYPE="TEXT" NAME="course_name"></td></tr>
		<tr><td>FEE:</TD><TD><INPUT TYPE="TEXT" NAME="fee"></td></tr>
		<tr><td>DURATION OF COURSE</td>
				<td>
				  <select name="duration" required>
					<option value="">--select--</option>
					<option value="Nick name">1 week</option>
					<option value="Father's name">2 week</option>
					<option value="pet name">3 week</option>
				  </select>
				 </td>
		</tr>
	</FIELDSET>
	<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp</td>
	<td><input type="submit" name="submit" value="ADD"></td>
	</tr>
	</table>
</form>
</body></html>
<script>
function validateForm() {
    var fname = document.myForm.state_name.value;
    if (fname == null || fname == "") {
        alert("State Name can't be blank");
        return false;
    }
  </script>
