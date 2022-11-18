<!DOCTYPE html>
<html><style>
body{
  background-color:#C7D3D4FF;
}
.header{
  width:auto;
  height:300px;
  left:-3%;
  
  background-image: linear-gradient(#603F83FF,#603F83FF);
  border-top-left-radius:10px;
  border-top-right-radius:10px;
  border-bottom-left-radius: 50% 30%;
  border-bottom-right-radius: 50% 30%;
 

}

.s{
	text-align: center;
	font-size: 46px;
	color: silver;
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
}.i{
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
.circle{
		position: relative; 
		border: 2px solid #999; 
		border-radius: 100%; 
		width: 50px; line-height: 
		50px; text-align: center; 
		margin-top: 50px; 
		background-color: #fff; 
		z-index: 2;
		margin-left: 250px;
		margin-right: 100px;
	}
	.circle:first-child 
	{
		margin-top: 0;
	}
	.circle:before 
	{
		position: absolute; 
		border: 1px solid #999; 
		width: 0; 
		height: 50px; 
		display: block; 
		content: ''; left: 50%; 
		z-index: 1; 
		top: -54px; 
		margin-left: -1px;
	}
	.circle:first-child:before 
	{
		display: none;
	}
	.table2{
		text-align: left;
	margin-left: 120px;
		background-color: #5CDB95;
		width: 80%;
		border-radius: 10px;
		height: 100%;
	}
	.a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 110px;
}
.div2{
          margin-left: 40px;
margin-top: 15px;
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
	<h1 class="s"> <b>Salon At Home</b></h1></div>
	<div>
			<table class="table2">
				<tr>
					<th colspan="2"><h1 style="margin-left: 400px;">How it Works</h1></th>
				</tr>
				<tr>
					<td rowspan="3" style="width:200px;">
						<div class="circle">Step 1</div>
						<div class="circle">Step 2</div>
						<div class="circle">Step 3</div>
					</td>
					<td>
						<p style="align:left;font-size:20px;"><b>Choose a Salon Service</b></p>
						Select from Various Salon Packages & Services<hr>
						</td>
				</tr>
				<tr>
					<td>
						<p style="align:left;font-size:20px;"><b>Choose a Time Slot Service</b></p>	Select from Various Salon Packages & Services<hr>
					</td>
				</tr>
				<tr>
					<td>
						<p style="align:left;font-size:20px;"><b>Relax & Enjoy Salon Service</b></p>
						Select from Various Salon Packages & Services<hr>
					</td>
				</tr>
			</table>
		</div><div class="div2">
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
  	<a href="https://www.facebook.com/"><img src="fac.jpg" class="i2"></a>
    </div></div></footer>
</body>
</html>





