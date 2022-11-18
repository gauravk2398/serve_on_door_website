<?php
session_start();
?>
<head>
<title>NEW SIGN IN</title>
</head>
<body>
<img src="logo.jpg" height=100 width=300>
</img>
<font face="algerian" size="30" color=purple>
<h align=center>NEW SIGN IN PORTAL FOR STUDENTS</HEAD><hr>
</font>
<marquee><font color=red size=5>NEW HERE!!!</MARQUEE>
<form method=POST>
<Table bgcolor="lightgreen" align=center>
<tr>
<td>ENTER FIRST NAME</td>
<td>:<input type="text" name="a1" placeholder="first name"></td><br>
</tr>
<tr>
<td>ENTER LAST NAME</td>
<td>:<input type="text" name="a2" placeholder="last name"></td><br>
</tr>
<tr>
<td>UID</td>
<td>:<input type="email" name="i" placeholder="@gmail.com"</td><br>
</tr>
<tr>
<td>PASSWORD</td>
<td>:<input type="password" name="p" placeholder="must be of 8 char."</td><br>
</tr>
<tr>
<td align=center colspan=2><input type="submit" name="s" value="sign up"></td>
</tr>
</table></form>
<br><br><br><br>
<table border=1 >
<tr bgcolor=orange width=300>
<td><h3>COURSES AVAILABLE</H3></td>
<td><h3>OUR BRANCHES</H3></td>
<td><h3>CONTACT US</H3></td>
<td><h3>CERTIFICATION</H3></TD>
<td><h3>GALLERY</h3></TD>
</tr>
<tr>
<td><ul>
<li>PHP</li>
<li>JAVA</li>
<li>C/C++</li>
<li>.NET</li>
<li>PYTHON</li>
<li>MANY MORE</LI>
</ul></td>
<td><Ul>
<li>GTB NAGAR,METRO GATE NO.1</li>
<li>256,MUKHERJEE NAGAR</li>
</Ul>
</td>
<td>WEBSITE:www.iitscl.com<br>EMAIL:iitscl@gmail.com<br>CONTACT NO.9987564120,7584612389</TD>
<td>ISO,ISI, & DSO CERTIFIED</td>
<TD><img src="pikuimg.jpg" height=200 width=300></img></td>
</tr>
</table>
</body>

<?php
$con=mysqli_connect("localhost","root","gaurav","project1");
if(isset($_POST['s']))
{
$sql="insert into student_reg values('".$_POST['a1']."','".$_POST['a2']."','".$_POST['i']."','".$_POST['p']."')";
$a = mysqli_query($con,$sql);
if($a) {
	
    echo"SUCCESS";
}
else{
    echo "FAILURE";
}

}
mysqli_close($con);
?>



