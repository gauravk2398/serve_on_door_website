<?php
$con=mysqli_connect("localhost","root","","serve");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit']))
{
 $city=$_POST['city'];
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['email'];
 $profession=$_POST['profession'];

  $res=mysqli_query($con, "INSERT INTO REGASPRO(City,Name,Phone,Email,Profession) VALUES('$city','$name','$phone','$email','$profession')");
  if($res)
  {

  echo "data inserted successfuly";
  } 

  else {
  
       echo "unsuccessfull data";
  
  
         }
         mysqli_close($con);
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
  color: #5CDB95;
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
  position: top
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
table.table1{
  border-radius: 25px;
  background: #5CDB95;
  padding: 10px; 
  width: 1000px;
  height: 100px;
  margin-left: 10%;
  margin-top: -70px;
}
table.table1 img
{
  width: 70px;
  height: 70px;
  float : center;

}
.content1
{
  margin-left: 5%;
  width : 600px;
  text-align: justify;
  float : left;
}
.pic1
{
  float : right;
  width : 25%;
  margin-top: 40px;
  margin-right: 150px;

}


table.table2{
  border-radius: 25px;
  background: white;
  padding: 20px; 
  width: 1300px;
  height: 50px;
  margin-left: 7%;
  float: center;
  border-collapse:separate; 
  border-spacing:0 15px; 
}
table.table2 th
{
  font-size: 20px;
  float: left;
}
table.table2 input{
  border-radius: 25px;
  display:inline-block;
}
table.table2 label{
  font-size: 20px;
  color:red;
}


.blog
{
  margin-left : 10%;
  margin-right:10%;
  margin-top : 3%;
}
ul.nav1
{
  display: inline;
  position: top;
  font-size: 20px;
  float: center;
  
}
ul.nav1 li
{
  display:inline-block;
  color: white;
  float: center;
  font-size: 20px;
  margin-left:6%;
}
ul.nav1 li a
{
  color: white;
  text-decoration: none;
  padding: 3px 3px 3px 3px; 
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

.c{
  text-align: center;
  border-radius: 5px;
}
.f{
  text-align: center;
  border-radius: 5px;
  margin-left: 10px;
}
.e{
  text-align: center;
  border-radius: 5px;
  margin-left: 25px;
  
}
.p{
  text-align: center;
  border-radius: 5px;
}
.g{
  text-align: center;
  border-radius: 5px;
  width: 200px;
  background-color: yellow;
  height: 30px;
}

.pr{
  text-align: center;
  border-radius: 5px;

}
   
.a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 130px;
}
.div2{
  margin-top: 50px;
  margin-right: 100px;
}
.w{
  margin-top: 300px;
  text-align: center;
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
  height: 80px;
  }
  .row1:after {
  content: "";
  display: table;
  clear: both;
}
.i{
  width: 30px;
 margin-top: 20px;


}
.i1{
  width: 30px;
 
}
.i2{
  width: 30px;
  height: 30px;

 
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
			<li><a  href="signup.php"> Sign Up</a></li>
      </li>
      <li><a  href="third.php"> Login</a></li>
		</ul>
	</div><br><br>
	<h1 class="s"><strong> Join our team of professionals</strong></h1>
  </div>  

		 <div class="b">
  <form method="POST">
      <table width="50" border="0" cellpadding="0" class="table1">
      <tr>
        <td align="center"  valign="center" >
    <input type="text" name="city" class="c" placeholder="Enter your city"></td>
  <td>
    <input type="text"  name="name" class="f" placeholder="Full name"></td>
  <td>
    <input type="text" name="phone" class="p" placeholder="Phone number"></td></tr>
  <tr><td>
    <input type="text" name="email" class="e" placeholder="E-mail address">
  </td>  
  <td>
    <input type="text" name="profession" class="pr" placeholder="Profession">
  </td><td>
    <input type="submit" name="submit" class="g" >
    

</td>
      </tr>
    </table>
  </form>
	<div>
		<div class="content1">
			<p> 
				<h1>Join hands with us for a better tomorrow</h1>
				<p> &nbsp &nbsp &nbsp We understand that trust takes years to build and forever to repair. We stand for the highest standards of skills in all our professionals. While we train we also verify the backgrounds of our professionals. Our Professionals are trained in the manner that we don't comprise with our standard.</p>
				<p> &#10004 On time service</p>
				<p> &#10004 Safety is our priority</p>
				<p> &#10004 100% customer satisfaction</p>
			</p>
		</div>
		<div class ="pic1">
			<img src="tomm.jpeg" alt="description here" height= "200" width="300"/><br />
		</div>
	</div>

	<div class="w">
		<h1>DON'T WAIT FOR THE OPPURTUNITY<br> CREATE IT</h1>
	</div>
	<div class="div2">
      <table>
      <tr>
        <td><a href="fifthpage.html" class="a1"><b>About Us</b></a></td>
        <td><a  href="review.html" class="a1"><b>Review</b></a></td>
      
          <td><a  href="sixth.html" class="a1"><b>Terms & Conditions</b></a></td>
           <td><a  href="eleventh.html" class="a1"><b>Privacy Policy</b></a></td>
            <td><a  href="contactUs.html" class="a1"><b>Contact Us</b></a></td>
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
    </div>
</div>
</footer>
</body>
</html>