<!DOCTYPE html>
<html><style>
body{
  background-color:#C7D3D4FF;
}
.header{
  width:auto;
  height:300px;
  left:-3%;
  
 background-image: url('elec2.jpg');
  background-size:100% 100%;
  animation:slider 10s infinite ease;
  border-top-left-radius:10px;
  border-top-right-radius:10px;
  border-bottom-left-radius: 50% 30%;
  border-bottom-right-radius: 50% 30%;
 

}@keyframes slider{
			0%{background-image: url('elec2.jpg');}
			25%{background-image: url('elec.jpeg');}
			50%{background-image: url('paint1.jpg');}
		             75%{background-image:url('pest1.jpg');}
                                      100%{background-image:url('carpe4.jpg');}
                     }

.s{
	text-align: center;
	font-size: 46px;
	color:  #5CDB95;
	font-family:matura MT script capitals;

}
.a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 130px;
}
.div2{
          margin-left: 40px;}  

.rates {
    float: left;
    height: 46px;
    padding: 0 10px;
    margin-left: 100px;
}
.rates:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rates:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
     cursor:pointer;
    font-size:30px;
    color:black;
}
.rates:not(:checked) > label:before {
    content: '★ ';
}
.rates > input:checked ~ label {
    color: #ffc700;    
}
.rates:not(:checked) > label:hover,
.rates:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rates > input:checked + label:hover,
.rates > input:checked + label:hover ~ label,
.rates > input:checked ~ label:hover,
.rates > input:checked ~ label:hover ~ label,
.rates > label:hover ~ input:checked ~ label {
    color: #c59b08;
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
  content: "";
   display: table;
  clear: both;
}
.submit{
  margin-top: 130px;
  margin-left: -115px;
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
.comm{
	margin-left: 750px;
	height: 80px;
}
.rev{
  margin-left:750px;
  margin-top: -120px;
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
  <form method="POST">
  <div class="rates">
  	<h1 align="center"> Give your ratings</h1>
    <input type="radio" id="star5" name="rate" value="5" / >
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" / >
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" / >
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" / >
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" / >
    <label for="star1" title="text">1 star</label>
  </div>
  <input type="submit" name="submit" class="submit">
  </form>
	<h1 class="rev"><b>Write a review</h1>	
		<div class="comm">
		<form method="POST">
<textarea name="review" placeholder="Add your reviews here...." row=10 col=20 required></textarea><br>
<input type=submit name="submit" placeholder="ADD MY REVIEW">
</form>
</div>
<div class="div2">
      <table>
      <tr>
        <td><a href="aboutus.php" class="a1"><b>About Us</b></a></td>
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

<?php 
include('rating.php');
include('comm.php');
 ?>




