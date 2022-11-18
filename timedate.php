<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background: #C7D3D4FF;
}

.topnav {
  overflow: hidden;
  background-color:#5CDB95 ;
  border-bottom: 1px  solid black;
  margin-top: 30px;
}
.fo{
	text-align: center;
	margin-top: 40px;
}
.h{
	height: 500px;
	width: 500px;
	border:1px solid black;
	border-radius: 30px;
	margin-left: 400px;
	margin-top: 50px;
  background-color:#5CDB95 ;
}
</style>
</head>
<body>
  <div style="background-image: url('back.png.jpg');">
	<div class="h">
<div class="topnav">
<h1 align="center">Salon At Home</h1>
</div>

<div class="fo">
<form method="POST" onsubmit="return confirm()">
  <label for="phone"><b>Enter A Date:</b></label><br><br>
  <input type="date"  name="date1"><br><br>

  <label for="appt"><b>Select a time:</b></label><br><br>
  <input type="time" name="time1"><br><br>
  <input type="submit" name="submit">
</form>
</form>
</body>
</html>


<?php
$con=mysqli_connect("localhost","root","","serve");
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
if(isset($_POST['submit']))
{
$sql="INSERT INTO TIMEDATE(dates,timings) VALUES('".$_POST['date1']."','".$_POST['time1']."')";
$a = mysqli_query($con,$sql);
if($a) 
{
  
    echo"SUCCESS";
}
else{
    echo "FAILURE";
}

}
mysqli_close($con);
?>
<script >
  function confirm(){
    alert('Are you sure to confirm this booking?');
  }
</script>



