<?php
      $con=mysqli_connect("localhost","root","","serve");

    if (!$con) 
    {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

if(isset($_POST['submit']))
  
{
 $rate=$_POST['rate'];

 $res=mysqli_query($con, "INSERT INTO RATING (rate1,rate2,rate3,rate4,rate5) VALUES('$rate','$rate','$rate','$rate','$rate')");   
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
