<?php 
session_start();
 ?>


<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;
 background-color:#C7D3D4FF;

}
* {box-sizing: border-box}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  border-radius: 7px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

 .signupbtn {
  margin-left: 150px;
  width: 50%;
   
}

.container {
  padding: 16px;
  background-color:#5CDB95;
  width: 50%;
  margin-left: 350px;
  border-radius: 15px;

}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

@media screen and (max-width: 300px) {
   .signupbtn {
     width: 100%;
  }
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
  height: 100px;
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
  height: 30px;
  margin-top: 20px;
}
   
.a1{
  text-decoration-color: transparent;
  color: blue;
  margin-left: 130px;
}
.div2{
          margin-left: 30px;}  

</style>

<body>
  <?php
$con=mysqli_connect("localhost","root","","serve");


if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit']))
{
 $name=$_POST['name'];
   $num=$_POST['num'];
    $email=$_POST['email'];
   $password=$_POST['psw'];
    $rpassword=$_POST['repsw'];
 $res=mysqli_query($con, "INSERT INTO REGISTER(name,contact,email,pass,repass) VALUES('$name','$num','$email','$password','$rpassword')");
  
    $res=mysqli_query($con, "INSERT INTO REGISTER(name,contact,email,pass,repass) VALUES('$name','$num','$email','$password','$rpassword')");
   $sql="select email from register where email='$email'";
        $result=mysqli_query($con,$sql);
        if (mysqli_num_rows($result)>1) 
         {
  
        $row = mysqli_fetch_assoc($result);
        if($email==isset($row['email']))
        { 
          echo "Email already exists";
            
        }
        else{
       echo "alright";
           return false;
}
} 
  if($res)
  {

  echo "data inserted successfuly";
  header('location:third.php');
} 

  else {
  
    echo "unsuccessfull data";
  
  
         }
         mysqli_close($con);
}
?>
<script>  
  function myform()
 { 
  var a=document.cross.psw.value;
   var b=document.cross.repsw.value;
  if(a==b)
   {
  alert('password matching');
  
    }
   else 
   {
  alert('password not matching');
  return false;
   }  
 }
</script>
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
  <h1 class="s"> <b>Services At your DoorStep</b></h1>
  </div>  
<form name="cross" onsubmit="return myform()" method="POST" style="border:1px solid #ccc">
  <div class="container">
    <h1 style="text-align: center;">Sign Up</h1>
   <b>Name</b><br>
    <input type="text" placeholder="Enter Name" name="name" required>
 
    <b>Contact Number</b><br>
    <input type="text" placeholder="Enter Contact Number" name="num" required>
    
    <b>Email</b><br>
    <input type="text" placeholder="Enter Email" name="email" required>

    <b>Password</b><br>
   <input type="password" placeholder="Enter Password" name="psw" required>

  <b> Repeat Password</b><br>
    <input type="password" placeholder="Repeat Password" name="repsw" required>
    
    
      <input type="checkbox"  name="remember" style="margin-bottom:15px"> Remember me

    <div class="clearfix">
      <input type="submit" name="submit" class="signupbtn">
    </div>
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
    <a href="https://www.linkedin.com/signup/cold-join?trk=guest_homepage-basic_nav-header-join"><img src="linkdin.jpg" class="i1"></a>
    <a href="https://www.facebook.com/"><img src="fac.jpg" class="i2"></a>
    </div>

</div>
  
</footer>

</body>
</html>
