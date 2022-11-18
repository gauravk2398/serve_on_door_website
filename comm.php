<?php
      $con=mysqli_connect("localhost","root","","serve");

    if (!$con) 
    {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

if(isset($_POST['submit']))
{
 
     $r=$_POST['review'];

  $res=mysqli_query($con, "INSERT INTO REVIEW (review) VALUES('$r')");   
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