<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["state_name"];  
$sql1="INSERT INTO `tbl_state`(`statename`) VALUES ('$a')";
$result1=mysqli_query($con,$sql1);
}
?>
<html>
    <head>
        
        <title>state</title>
    </head>

    <body></br></br></br></br></br></br></br></br></br></br>
<form action="#" name="myform" id="myform" method="post">
<fieldset>
<legend>ADD STATE</legend>
<table border="0">
<tr><td>STATE NAME:</TD><TD><INPUT TYPE="TEXT" NAME="state_name"></td></tr>
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
