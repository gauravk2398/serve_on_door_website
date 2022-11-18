<?php 
session_start();
 ?>
<body>
 <form  method="POST" name="forgot" style="border:1px solid #ccc">
  <div class="container">
    <h1>Set New Password</h1>
    <hr>
      <label for="email"><b>Enter email</b></label>
    <input type="text" placeholder="Enter email" class="li" name="uid" required><br><br>
       <label for="password"><b>New Password</b></label>
    <input type="text" placeholder="Enter New Password" class="li" name="newpass" required><br><br>

    <label for="repsw"><b> Re-Enter Password</b></label>
    <input type="password" placeholder="Re-Enter  Password" class="li" name="renewpass"  required>

    <input type="submit" name="setpass" class="registerbtn"></div>
                </form>
</body>
<?php


 $con=mysqli_connect("localhost","root","","serve");
  $result = mysqli_query($con,"SELECT pass FROM login WHERE 
email='$uid'");
        if(!$result)
        {
        echo "The username you entered does not exist";
        }
        else if($newpass!= 0)
        {
        echo "You entered an incorrect password";
        }
if($newpass==$renewpass)
{
$sql=mysqli_query($con,"UPDATE register SET pass='".$_POST['newpass']."' WHERE email='".$_POST['uid']."'") ;

if($sql)
{
echo "record updated sucessfully";
}else
{
echo "error in recording update";
}
}
mysqli_close($con);

?>


  




