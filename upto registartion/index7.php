<?php
include 'connection.php';
if(isset($_POST['submit']))
{
$a=$_POST["name"];
$b=$_POST["address"];
$c=$_POST["city_name"];
$d=$_POST["photo"];
$e=$_POST["district_name"];
$f=$_POST["contact_num"];
$g=$_POST["email_id"];
$h=$_POST["password"];
$i=$_POST["pin_num"];
$j=$_POST["seq_question"];
$k=$_POST["seq_answer"];
$l=$_POST["gender"];
$n=$_POST["repassword"];
if($h!=$n)
{
	echo"not equal";
}
else
{
  $sql2="select * from regestration where email_id='$g'";
  $result2=mysqli_query($con,$sql2);
  if($res=mysqli_fetch_array($result2))
  {
  echo "ALREADY INSERTED";
  }
  else
  {

$sql="INSERT INTO `regestration`(`email_id`, `name`, `address`, `district_id`, `city_name`, `contact_num`, `photo`, `pin_num`, `seq_question`, `seq_answer`, `gender`) VALUES ('$g','$a','$b','$e','$c','$f','$d','$i','$j','$k','$l')";
//print_r($sql);

$result=mysqli_query($con,$sql);
$sql1="INSERT INTO `login`(`email_id`, `password`, `role`) VALUES ('$g','$h',0)";
//print_r($sql1);
$result1=mysqli_query($con,$sql1);
echo "successfully inserted";
}
}}
?>
<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Blur Menu with CSS3 Transitions</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Blur Menu with CSS3 Transitions" />
        <meta name="keywords" content="css3, transitions, menu, blur, navigation, typography, font, letters, text-shadow" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style7.css" />
		<!--[if IE]>
			<link rel="stylesheet" type="text/css" href="css/styleIE.css" />
		<![endif]-->
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css' />
        <head>
        <style>
        .content input[type="submit"]
        {
        	background-color:green;
        	font-weight:bolder;
        	box-shadow:inset -4px -4px rgb(0,0,0,0.5)
        	font-size;18px;
        }


</style>
    </head>
    <body style="background-image: url(images/pattern.png), url(images/13.jpg);">
        <div class="container">
            <div class="header">
                <a href="../home1.php">
                    <strong>&laquo; Back to home: </strong>
                </a>
                <!--<span class="right">
                    <a href="http://www.flickr.com/photos/markjsebastian/" target="_blank">Images by Mark Sebastian</a>
                    <a href="http://tympanus.net/codrops/2011/10/19/blur-menu-with-css3-transitions/">
                        <strong>Back to the Codrops Article</strong>
                    </a>-->
                </span>
                <div class="clr"></div>
            </div>
            <h1>Book shop <span></span></h1>
            <div class="content">
              <form action="#" name="myForm" id="myForm" onsubmit="return validateForm()" method="post">
              <fieldset>
              <legend>REGISTRATION FORM</legend>
              <table border="0"
              <tr><td>NAME:</TD><TD><INPUT TYPE="TEXT" NAME="name"></td></tr>
                <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
                <tr>
                <td>PHOTO</td>
                <td><input type="file" name="photo" id="photo" size="30">
                </td>
                </tr>
                  <tr>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</tr>
              <tr><td></TD><td><FIELDSET><LEGEND>GENDER</LEGEND><input type="radio" name="gender" value="male" checked> Male<br>
                <input type="radio" name="gender" value="female"> Female<br>
                <input type="radio" name="gender" value="other"> Other<br><br>
                </FIELDSET></td></tr>
                  <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
                <tr><td>ADDRESS:</td><td><input type="text" name="address"></td></tr>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
                <tr><td>STATE</td>
                <td><select name="state_name">
                  <option value="">--select--</option>
                <?php
                $results= mysqli_query($con,"select state_id,state_name from state");
                $i=1;
                while($row=mysqli_fetch_array($results))
                { ?>
                  <option value="<?php echo $row['state_id']; ?>"><?php echo $row['state_name']; ?></option>

                <?php }
                ?>
              </TR>
              <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
              <tr><td>DISTRICT</td>
                <td><select name="district_name">
                  <option value="">--select--</option>
                <?php
                $results= mysqli_query($con,"select district_id,district_name from district");
                $i=1;
                while($row=mysqli_fetch_array($results))
                { ?>
                  <option value="<?php echo $row['district_id']; ?>"><?php echo $row['district_name']; ?></option>

                <?php }
                ?>
              </tr>
              <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
                <tr><td>CITY:</td><td><input type="text" name="city_name"></td></tr>
                <tr></tr>
                  <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
                <tr><td>PINCODE:</td><td><input type="number" name="pin_num"  size="30" min="1" ></td></tr>
  <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
              <tr><td>CONATACT NUMBER</TD><TD><INPUT TYPE="TEL" NAME="contact_num" min="10" max="12"></td></tr>
                <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
              <tr><td>EMAIL:</TD><TD><INPUT TYPE="email" NAME="email_id"></td></tr>
                <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
              <tr><td>PASSWORD</td>
                <td><input type="password" name="password"/> </td></tr>
                <tr class="spaceUnder"><td>RE-ENTER Password</TD><TD><INPUT TYPE="TEXT" NAME="repassword"></td></tr>

                  <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
              <tr>
                <tr><td>SECURITY QUESTION</td>
                  <td><select name="seq_question">
                  <option value="">--select--</option>
                  <option value="Nick name">Nick name</option>
                  <option value="Father's name">Father's name</option>
                  <option value="pet name">pet name</option>
                  <option value="Ambition">Ambition</option>
                </select></td></tr>
                <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>>
                <tr><td>SECURITY ANSWER:</td><td><input type="text" name="seq_answer"></td></tr>
              <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
              &nbsp&nbsp</td>
<tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td></tr>
              <tr><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td><td><input type="submit" name="submit" value="Regester"></td>
              </tr>
              </table></form>
              <script>
              function validateForm() {
                  var fname = document.myForm.fname.value;
                  if (fname == null || fname == "") {
                      alert("First Name can't be blank");
                      return false;
                  }
                  var lname = document.myForm.lname.value;
                  if (lname == null || lname == "") {
                      alert("Last Name can't be blank");
                      return false;
                  }
                  var mname = document.myForm.mname.value;
                  if (mname == null || mname== "") {
                      alert("Middle Name can't be blank");
                      return false;
                  }
                  var address = document.myForm.address.value;
                  if (address == null || address == "") {
                      alert("Address can't be blank");
                      return false;
                  }
                  var city=document.myForm.city.value;
                  if (city==null || city==""){
                    alert("ity  can't be blank");
                    return false;
                  }
              var pin=document.myForm.pin.value;
              if (pin==null || pin==""){
                alert("Pin Code can't be blank");
                return false;
              }
              var phone=document.myForm.phone.value;
              if (phone==null || phone==""){
                alert("Phone number can't be blank");
                return false;
              }
              var email=document.myForm.email.value;
              if (email==null || email==""){
                alert("Email can't be blank");
                return false;
              }

              var username=document.myForm.username.value;
              if (username==null || username==""){
                alert("User Name  can't be blank");
                return false;
              }
              var cnt=document.myForm.phone.value;
              if(phone.length!=10)
              {
                alert("Enter Phone number in currect format");
              }
              var pin=document.myForm.pin.value;
              if(pin.length!=6)
              {
                alert("Enter pin code in currect format");
              }

              var password=document.myForm.password.value;
              if (password==null || password==""){
                alert("Password can't be blank");
                return false;
              }
              }
              </script>
              </div>
              <script>
            </div>
        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </body>
</html>
