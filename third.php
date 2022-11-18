<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>thirdpage</title>
            <style type="text/css">
              body {
 background-color:#C7D3D4FF;

}
     .container{
         padding: 16px;
  background-color:#5CDB95;
  width: 50%;
  margin-left: 300px;
  border-radius: 15px;
  text-align: center;
  height: 400px;


              }
              .c1{
                text-align: center;
                margin-top: 15px;
              }
              
              .head{
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
}ul.nav  li a
{
  color: white;
  text-decoration: none;
  padding: 2px 2px 2px 2px;
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
.li{
  margin-top: 15px;

}
.registerbtn{
    margin-top: 15px;
    width: 80px;
    height: 30px;
}    
.a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 110px;
}
.div2{
          margin-left: 30px;} 
</style>

</head>
<body>
 <div class="head">
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
  <h1 class="s"> <b>Services At your DoorStep</b></h1>
  </div>  
    <form  method="POST"   style="border:1px solid #ccc">
  <div class="container">
    <h1>Log In</h1>
    <hr>
       <label for="email"><b>Email Address</b></label>
    <input type="text" placeholder="Enter Email" class="li" name="email1" id="email" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" class="li" name="psw" id="psw" required>
    
   <p class="li"><a href ="forgot.php">Forgot Password</p>

    <button type="submit" name="submit" class="registerbtn"> Log In</button>


      <p class="c1">Don't have an account? <a href="signup.php">Sign Up</a></p>
        
      </div>
                </form>
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
    <a href="#"><img src="linkdin.jpg" class="i1"></a>
    <a href="https://www.facebook.com/"><img src="fac.jpg" class="i2"></a>
    </div>

</div>
</footer>
 </body>
</html>
 
  <?php
if(isset($_POST['submit']))
{

$con=mysqli_connect("localhost","root","","serve");
$sql="select * from register where email='".$_POST['email1']."' and pass='".$_POST['psw']."' ";
$f=0;
if ($result=mysqli_query($con,$sql))
{
while ($row=mysqli_fetch_row($result))
{
$f=1;
}
}
if($f==1){
  echo "login success";
$_SESSION['sid']=$_POST['email1'];
 
echo "<script> location.href='blog1.php'; </script>";
die(); 
}else{
echo"login failed";

}

}

?>


