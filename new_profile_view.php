
<?php
include 'connection.php';
session_start();
$id=$_SESSION["email"];
//echo "$id";
$result ="SELECT * FROM tbl_registration where email='$id'";
$result3=mysqli_query($con,$result);
while($row3 = mysqli_fetch_array($result3))
{ 
$fname=$row3['fname'];
$lname=$row3['lname'];
$address=$row3['address'];
$phno=$row3['contactno'];
$email=$row3['email'];
$district=$row3['districtid'];
$place=$row3['place'];
$pin=$row3['pin'];
}
$result2 ="SELECT * FROM tbl_district where districtid='$district'";
$result4=mysqli_query($con,$result2);
while($row4 = mysqli_fetch_array($result4))
{
	$district1=$row4['district_name'];

	$state=$row4['stateid'];
	
}
$result5 ="SELECT * FROM tbl_state where stateid='$state'";
$result6=mysqli_query($con,$result5);
while($row5 = mysqli_fetch_array($result6))
{
	$state1=$row5['statename'];

}
//if(isset($_POST['submit']))
//{
//	$a=$_POST['fname'];
//	$b=$_POST['lname'];
//	$c=$_POST['address'];
//	$res=mysqli_query($con,"UPDATE `tbl_registration` SET `fname`='$a',`lname`='$b',`address`='$c' WHERE email='$email'");
//}
?>
<!DOCTYPE html>
<!--
Template Name: Lolwork
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Lolwork | Pages | Sidebar Left</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout1.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
  </div>
</div>

<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">SewOll</a></h1>
      <p>join or fasten by making stitches</p>
    </div>
   
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li><a href="user_home.php">Home</a></li>
        <!--<li><a class="drop" href="#">My Profile</a>
          <ul>
			<li><a href="#">change password</a></li>
            <li><a href="pages/gallery.php">Gallery</a></li>
            
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>-->
		<li><a class="drop" href="#">Projects</a>
          <ul>
		
            <li><a href="project_upload.php">upload member project</a></li>
            
            <li><a href="gallery.php">view member project</a></li>
            
          </ul>
        </li>
		
		<li class="active"><a href="#">profile</a></li>
		
		<li><a class="drop" href="#">how to stitch</a>
          <ul>
		
            <li><a href="kids_and_babies.php">kids and babies</a></li>
            
            <li><a href="pants.php">pants</a></li>
			<li><a href="outerwear.php">outerwear</a></li>
            
          </ul>
        </li>
		
		<li><a class="drop" href="#">tutorials</a>
          <ul>
		
            <li><a href="new_book_view.php">ebooks</a></li>
            
            <li><a href="new_course_view.php">videos</a></li>
			<li><a href="tutor_vieew.php">tutors</a></li>
			
          </ul>
        </li>
		
		<li><a href="new_changepass.php">changepassword</a></li>
        
		<li><a href="cust_machine_view.php">machines</a></li>
		<li><a href="mycart.php">cart</a></li>
		
		
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
    
  </header>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    
    <div class="sidebar one_quarter first"> 
     
      <h3 style="color:orange;">AMBASSADORS</h3>
      <nav class="sdb_holder">
        
		<img src="104.jpeg">
		<br>
		<br>
		<h6 style="color:green;">Evelyn Cheyenne</h6>
		email:evelyn@gmail.com<br><br>
		Contact no:9745669823
      </nav>
      <div class="sdb_holder">
        <img src="111.jpg">
		<br>
		<br>
		<h6 style="color:green;">Casey Beverly</h6>
		email:casey@gmail.com<br><br>
		Contact no:9634091675
      </div>
      <div class="sdb_holder">
		<img src="103.jpeg">
		<br>
		<br>
		<h6 style="color:green;">Aubrey Ashley</h6>
		email:aubrey@gmail.com<br><br>
		Contact no:9865439412
        
      </div>
      
    </div>
   
    <div class="content three_quarter"> 
	<br>
	<br><br>
	
	
		<h1 style="color:red;text-align:center;font-size:300%;">MY PROFILE</h1>
			<form action="#" name="myprofile" id="myprofile" onsubmit="return" method="post" align="centre">
<table align="center" border="0" width="50" style="width:50%;color:black;font-family:Calibri Light (Headings);font-size:15px;">
<tr><td><b>FIRST NAME:</b></TD><TD> <b><?php echo $fname ?> </b></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><B>LAST NAME:</b></TD><TD><b><?php echo $lname ?> </b></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><b>ADDRESS:</b></TD><TD><b><?php echo $address ?> </b></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><b>CONTACT NO:</b></TD><TD><b><?php echo $phno ?> </b></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><b>STATE:</b></TD><TD> <b><?php echo $state1 ?></b> </td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><b>DISTRICT:</b></TD><TD> <b><?php echo $district1 ?> </b> </td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><b>PLACE:</b></TD><TD><b><?php echo $place ?> </b></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>
<tr><td><b>PIN CODE:</b></TD><TD> <b><?php echo $pin ?> </b></td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr>

<tr><td><b>EMAIL:</b></TD><TD>  <b><?php echo $email ?> </b> </td></tr><br><tr></tr><tr></tr><tr></tr></tr><tr></tr><tr></tr><br><br><br><tr></tr><tr></tr><tr></tr><tr></tr>

<tr><td><a href="new_profile_edit.php" ><b>EDIT</b></a></td></tr>


				<!--#################################################################################
				#################################################################################
				#################################################################################
				#################################################################################-->
				</table>
				</form>
    </div>
   
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4 bgded overlay" style="background-image:url('../images/demo/backgrounds/03.png');">
  <footer id="footer" class="hoc clear"> 
   
    <div class="one_quarter first">
      <h6 class="title">Libero semper nec</h6>
      <p>Eros et magna ut vitae faucibus dui nec fermentum mauris nunc molestie venenatis metus et porttitor nisi faucibus ut cras non sem facilisis.</p>
      <p>Hendrerit ligula ut blandit sem nulla non ipsum rutrum tempor dolor non faucibus eros cras imperdiet cursus sapien.</p>
    </div>
    <div class="one_quarter">
      <h6 class="title">Nisi ornare aliquet</h6>
      <ul class="nospace linklist contact">
        <li><i class="fa fa-map-marker"></i>
          <address>
          Street Name &amp; Number, Town, Postcode/Zip
          </address>
        </li>
        <li><i class="fa fa-phone"></i> +00 (123) 456 7890<br>
          +00 (123) 456 7890</li>
        <li><i class="fa fa-fax"></i> +00 (123) 456 7890</li>
        <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Donec at tellus eu</h6>
      <ul class="nospace linklist">
        <li><a href="#">Mauris in condimentum lacus</a></li>
        <li><a href="#">Sed hendrerit est praesent</a></li>
        <li><a href="#">Tempor dapibus enim phasellus</a></li>
        <li><a href="#">Convallis lectus a tristique</a></li>
        <li><a href="#">Lectus nisi sodales sem at</a></li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">ac urna morbi rutrum</h6>
      <ul class="nospace linklist">
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">dignissim libero augue</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
            <p class="nospace">aenean non egestas urna curabitur vitae aliquam felis&hellip;</p>
          </article>
        </li>
        <li>
          <article>
            <h2 class="nospace font-x1"><a href="#">et nisl id pretium</a></h2>
            <time class="font-xs block btmspace-10" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
            <p class="nospace">eros vehicula eros nec lacinia sem tellus vel turpis vivamus&hellip;</p>
          </article>
        </li>
      </ul>
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">SewOll</a></p>
    <p class="fl_right">By <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">SewOll Group</a></p>

  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>