<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Server At Door</title>
  <link rel = "stylesheet" type = "text/css" href = "style1.css" />
  <style>
	.circle{
		position: relative; 
		border: 2px solid #999; 
		border-radius: 100%; 
		width: 50px; line-height: 
		50px; text-align: center; 
		margin-top: 50px; 
		background-color: #fff; 
		z-index: 2;
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
		content: ''; 
		left: 50%; 
		z-index: 1; 
		top: -54px; 
		margin-left: -1px;
	}
	.circle:first-child:before 
	{
		display: none;
	}
	
  </style>
</head>
<body>
  <div class="header">
	<div class="container2">
		<ul class="nav">
			<li><a  href="blog.html">Blog</a></li>
			<li><a  href="Login/login.html">Register As A Professional</a></li>
			<li><a  href="login.html">Login / Sign Up</a></li>
		</ul>
	</div><br><br>
	<div class="content">
		<div class="left">
			<p style="font-size:50px;"><b> Salon at Home in Delhi</b>
			<ul class="nav1">
				<li>Select from Various salon packages & Services</li>
				<li>Select from Various salon packages & Services</li>
				<li>Select from Various salon packages & Services</li>
			</ul></p>
			</br></br></br></br>
			<p class="pagination">
				<a href="#" >&laquo;</a>
				<a href="salonwork.html" >How it works</a>
				<a href="#">Beauticians</a>
				<a href="#">Customers Reviews</a>
				<a href="#">Blogs</a>
				<a href="salonques.html" >Frequently Asked Questions</a>
				<a href="aboutSalon.html"" >About</a>
				<a href="#" >&raquo;</a>
			</p>
		</div>
		<br><br>
		<div class="right">
			<table class="selectiontable">
				<tr>
					<th>View All Beautiful</th>
				</tr>
				<tr>
					<td style="text-align:center">
						<img src="exclusive packages.jpg" alt="description here" width="50" height="50"/>
						<a href="#"><span style="font-size: 20px;">Exclusives  & Packages</style></a>
					</td>
				</tr>
				<tr>
					<td style="text-align:center">
						<img src="threading.jpg" alt="description here" width="50" height="50"/>
						<a href="#"><span style="font-size: 20px;">Waxing & threading</style></a>
					</td>
				</tr>
				<tr>
					<td style="text-align:center">
						<img src="manicure.jpg" alt="description here" width="50" height="50"/>
						<a href="#"><span style="font-size: 20px;">Manicure & pedicure</style></a>
					</td>
				</tr>
				<tr>
					<td style="text-align:center">
						<img src="facial.jpg" alt="description here" width="50" height="50"/>
						<a href="#"><span style="font-size: 20px;">Facial & Hair Services</style></a>
					</td>
				</tr>
			</table>
		</div>
		<div>
			<table class="table2">
				<tr>
					<th colspan="2">How it Works</th>
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
						<p style="align:left;font-size:20px;"><b>Choose a Time Slot Service</b></p>
						Select from Various Salon Packages & Services<hr>
					</td>
				</tr>
				<tr>
					<td>
						<p style="align:left;font-size:20px;"><b>Relax & Enjoy Salon Service</b></p>
						Select from Various Salon Packages & Services<hr>
					</td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>