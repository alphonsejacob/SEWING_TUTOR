<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["state_name"];
$b=$_POST["district_name"];  
$sql1="INSERT INTO `tbl_district`(`sateid`, `district_name`) VALUES ('$a','$b')";
$result1=mysqli_query($con,$sql1);
}
?>
<html>
    <head>
        
        <title>state</title>
    </head>
		<body>
			</br></br></br></br></br></br></br></br>

				<form action="#" name="myform" id="myform" method="post">
					<fieldset>
						<legend>ADD DISTRICT</legend>
						<table border="0">
						<td>STATE NAME&nbsp&nbsp</td>
						<td><select name="state_name">
						<?php  
						$results= mysqli_query($con,"select stateid,statename from tbl_state");
						$i=1;
						while($row=mysqli_fetch_array($results))
						{ ?>
						<option value="<?php echo $row['stateid']; ?>"><?php echo $row['statename']; ?></option>

						<?php }
						?>
						<tr><td>DISTRICT NAME:</TD><TD><INPUT TYPE="TEXT" NAME="district_name"></td></tr>

					</FIELDSET>
						<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
						&nbsp&nbsp</td>
						<td><input type="submit" name="submit" value="ADD"></td>
						</tr>
						</table></form></div>
</body></html>
<script>
function validateForm() {
    var fname = document.myForm.state_name.value;
    if (fname == null || fname == "") {
        alert("State Name can't be blank");
        return false;
    }
  </script>
