<!DOCTYPE html>
<html><style>
body{
  background-color:#C7D3D4FF;
}
.header{
  width:auto;
  height:300px;
  left:-3%;
  
  background-image: url('carpe2.jpg');
  background-size:100% 100%;
  animation:slider 10s infinite ease;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
  border-bottom-left-radius: 50% 30%;
  border-bottom-right-radius: 50% 30%;
 

}@keyframes slider{
			0%{background-image: url('carpe2.jpg');}
			25%{background-image: url('carpe4.jpg');}
			50%{background-image: url('carpe3.jpg');}
		             75%{background-image:url('carpe.jpg');}
                                      }

.s{
	text-align: center;
	font-size: 46px;
	color: #5CDB95;
	font-family:matura MT script capitals;

}
.iconDetails {
margin-left:5%;
float:left; 
height:90px;
width:90px;	
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
	color: white;float: left;
	margin-left:30px;
	font-size: 20px;
}
ul.nav  li a
{
	color: white;
	text-decoration: none;
	padding: 2px 2px 2px 2px;
}
.container2 {
	width:auto;
	height:auto;
	padding:2%;
	top : 20px;
	left: 50px;
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
  margin-left: 930px;
  margin-top: -200px;
  margin-bottom: 12px;

}
.i1{
  width: 30px;
  margin-left: 965px;
  margin-top: -250px;
  margin-bottom: 30px;
}
.i2{
  width: 30px;
  margin-left: 1000px;
  margin-top: -300px;
   margin-bottom: 48px;
}
.q{
	text-align: center;
	background-color: #5CDB95;
	border-radius: 10px;
	margin-top: -30px;
	width: 500px;
	margin-left: 330px;
	height: 450px;
}

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
			<li><a  href="signup.php" >Signup</a></li>
			<li><a  href="third.php" > Login</a></li>
		</ul>
	</div><br><br>
	<h1 class="s"> <b>Services At your DoorStep</b></h1></div>
<div class="q">
<h1 align=center><b>CARPENTERS AVAILABLE</b></h1>
<table style="border-color:red;border-style:outset; margin-left: 40px;">
<tr><td><b>CARPENTERS</td></tr>
<tr><td>CONTACT:8528425125</td></tr>
<tr><td>ADD.: 7,A1 block,near ghanta ghar,shahdra,Delhi-110029</td></tr>
</tr>
</table><br><br><br>
<table style="border-color:red;border-style:outset; margin-left: 95px;">
<tr><td><b>WOODEN WORKS</td></tr>
<tr><td>CONTACT:8130745878</td></tr>
<tr><td>ADD.: A-50,LODHI 
	ROAD,Delhi-110098</td></tr>
</tr>
</table>
<br><br><br>
<table  style="border-color:red;border-style:outset; margin-left: 95px; ">
<tr><td><b>WOODEN HI WOODEN</td></tr>
<tr><td>CONTACT:8757764829</td></tr>
<tr><td>ADD.: 74,A-17,KUNJ vihar,Delhi-110085</td></tr>
</tr>
</table>
</div>
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
  	<a href="https://www.facebook.com/"><img src="fac.jpg" class="i2"></a>
    </div></div></footer>
</body>
</html>
