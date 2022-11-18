<?php
session_start();
?>
 <?php
if(empty($_SESSION['sid'])){
echo "empty";
}
else
{
echo "Welcome ".$_SESSION['sid'];
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Server At Door</title>
 
</head>
<style>
	body{
  background-color:#C7D3D4FF;
}
.header{
  width:auto;
  height:450px;
  left:-3%;
  background-image: url("flow.jpg");
  border-top-left-radius:10px;
  border-top-right-radius:10px;
  border-bottom-left-radius: 50% 30%;
  border-bottom-right-radius: 50% 30%;
 

}

.s{
	text-align: center;
	font-size: 76px;
	color:white;
	font-family:matura MT script capitals;

}
.iconDetails {
margin-left:5%;
float:left; 
height:90px;
width:90px;	
} 

.container2 {
	width:auto;
	height:auto;
	padding:2%;
	top : 20px;
	left: 50px;
}

h3{
    margin:0px;
}
ul.nav
{
	display: inline;
	position: top;
	font-size: 20px;
	margin-left:1%;
	float:right;
	width : 580px;
	right: 0;
	top: 0;

}
ul.nav li
{
	display:inline-block;
	list-style-type: none;
	color: white;
	float: left;
	margin-left:30px;
	font-size: 20px;
}
ul.nav  li a
{
	color: white;
	text-decoration: none;
	padding: 2px 2px 2px 2px;
}

.blog
{


	margin-top : 3%;
}

table.table3
{
	border-collapse: separate;
	border-spacing: 35px;
}
table.table3 img
{
	border-radius: 10%;
}
footer {
  text-align: center;
  padding: 3px;
  background-color:#603F83FF;
  color: white;
  border-color: transparent;
  box-shadow: 10px 10px 5px grey;
}
.column1 {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 30px;
  }
  .row1:after {
  content: ""; display: table;
  clear: both;
}
.i{
  width: 30px;
 margin-left: 880px;
 margin-top: -30px;

}
.i1{
  width: 30px;
  margin-left: 920px;
  margin-top: -30px;
}
.i2{
  width: 30px;
  margin-left: 960px;
  margin-top: -30px;
  
}
.a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 110px;
}
.beauty{
	margin-left: 420px;
}
.div2{
          margin-left: 40px;} 
</style>
<body>
  <div class="header">
	<div class="container2">
		<div>
			<img src='websitelogo1..jpg' class='iconDetails'>
		</div>
		<ul class="nav">
			<li><a  href="home.php">Home</a></li>
			<li><a  href="fourteen.php">Register As A Professional</a></li>
			<li><a  href="signup.php">Sign Up</a></li>
			<li><a  href="third.php">Login</a></li>
		</ul>
	</div><br><br>
	<h1 class="s">Salon At Home</h1>
  </div>
  <div class="blog">
	
		<h2 class="beauty">BEAUTY / SALON SERVICES</h2>
		
	<hr/>
	<table class="table3">
		<h2 align="center">Women Section</h2>
			<tr>
				<td align="center" valign="center">
					<a href="third.php"><img src="manicure.jpg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Manicure & Pedicure</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="hairspa.jpg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Hair Spa & Texture</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="spa.jpg" alt="description here"width="350" height="200" /></a><br />
					<h3 style="color:red;">	Massages & Spas</h3>
				</td>
			</tr>
			<tr>
				<td align="center" valign="center">
					<a href="third.php"><img src="threading.jpg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;"> Threading</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="w1.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">Makeup</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="facial.jpg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Clean up & facial
				</td>
			</tr>
			<tr>
				<td align="center" valign="center">
					<a href="third.php"><img src="w2.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">Hair Cut & Styling</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="w3.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Hair Treatment</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="w4.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Waxing
				</td>
			</tr></table></div>
			<div class="blog">
<table class="table3">
	<h2 align="center">Men Section</h2>
			<tr>
				<td align="center" valign="center">
					<a href="third.php"><img src="b1.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Hair Spa & Styling</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="b2.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">Hair Cut & Styling</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="b3.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Clean up & facial
				</td>
			</tr>
			<tr>
				<td align="center" valign="center">
					<a href="third.php"><img src="b4.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">Head Massage</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="b5.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Beard Grooming</h3>
				</td>
				<td align="center" valign="center">
					<a href="third.php"><img src="b6.jpeg" alt="description here" width="350" height="200"/></a><br />
					<h3 style="color:red;">	Hair & Beard Color
				</td>
			</tr>
		</table></div>
		<div class="div2">
      <table>
      <tr>
        <td><a href="howitworks.php" class="a1"><b>How It Works</b></a></td>
        <td><a  href="review.php" class="a1"><b>Review</b></a></td>
        
          <td><a  href="terms.php" class="a1"><b>Terms & Conditions</b></a></td>
           <td><a  href="privacy.php" class="a1"><b>Privacy Policy</b></a></td>
            <td><a  href="contact.php" class="a1"><b>Contact Us</b></a></td>
      </tr>
    </table></div>
		<footer>
 <div class="row1">
  <div class="column1">
    <h2>Services at your door</h2>
  </div>
  <div class="column1">
    <h2>Serve on Door Pvt. Ltd</h2>
  </div>
  <div class="column1">
  	<a href="https://www.instagram.com/"><img src="insta.jpg" class="i"></a>
  	<a href="https://www.linkedin.com/signup/cold-join?trk=guest_homepage-basic_nav-header-join"><img src="linkdin.jpg" class="i1"></a>
  	<a href="https://www.facebook.com/"><img src="fac.jpg" class="i2"></a> </div></div></footer>
</body>
</html>