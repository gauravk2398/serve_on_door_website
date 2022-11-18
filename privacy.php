<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  margin-top: 80px;
  color: #5CDB95;
  font-family:matura MT script capitals;

}
.iconDetails {
margin-left:5%;float:left; 
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

}ul.nav li
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
.div2{
          margin-left: 40px;
        }
        .a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 130px;
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
  padding: 5px;
  height: 30px;
  }
  .row1:after {
  content: "";
  display: table;
  clear: both;
}
.i{
  width: 30px;
   }
.i1{
  width: 30px;

}

.i2{
  width: 30px;
  margin-right: -1650px;
 
  height: 30px;

}

</style>
</head>
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
  </div><br><br><h1 class="s"> <b>Services At your DoorStep</b></h1></div>

</div>
<h1 style="text-align: center;">PRIVACY POLICY</h1>
<h2>A. Collection of person information</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<h2>B. How serve on door uses the information we collect</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<h2>C. Security</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<h2>D. Links to external websites</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

<h2>E. Privacy Policy updates</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>


<div class="div2">
      <table>
      <tr>
        <td><a href="aboutus.php" class="a1"><b>About Us</b></a></td>
        <td><a  href="review.php" class="a1"><b>Review</b></a></td>
         
          <td><a  href="terms.php" class="a1"><b>Terms & Conditions</b></a></td>
           <td><a  href="privacy.php" class="a1"><b>Privacy Policy</b></a></td>
            <td><a  href="contact.php" class="a1"><b>Contact Us</b></a></td>
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
    <img src="insta.jpg" class="i">
    <img src="linkdin.jpg" class="i1">
    <img src="fac.jpg" class="i2">
    </div>
  </div>
</footer>

</body>
</html>