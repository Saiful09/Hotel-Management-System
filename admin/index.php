<?php 
include("connection.php");
?>
<!DOCTYPE html>
<head>
<title>Hotel management</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="full">
<div style="background-image:url('img/img10.jpg');width:100%;height:800px;">
<div id="header">
<div id="logo">
<h1><font color="white">My project</font></h1>
</div>
<div id="nav">
<ul>
<li><a href="">Home</a></li>
<li><a href="">Contact Us</a></li>
<li><a href="">Book My Stay</a></li>
<li><a href="">Our Hotel</a></li>
<li><a href="">Help Line</a></li>
</ul>
</div>
<form action="" method="post">
<center><table>
<tr>
<td style="color:white;">Statas</td>
<td style="color:white;">Available</td>

</tr>
<tr>
<td style="color:white;">User name::</td>
<td> <input type="text" name="user" placeholder="Enter the username"></td>
</tr>
<tr>
<td style="color:white;">Password::</td>
<td> <input type="password" name="pass" placeholder="Enter the password"></td>
</tr>
<tr>
<td colspan="2"> <input type="submit" name="sub" value="login" style="width:100px; height:40px;"></td>
</tr>
</table>
</form>
<?php
if (isset($_POST['sub']))
{
  $user=$_POST['user'];	
  $pass=$_POST['pass'];	
  $q1="select * from admin";
  $run=mysqli_query($a,$q1);
  $row=mysqli_fetch_array($run);
  $u=$row['un'];
   $p=$row['pass'];
   if($user==$u&&$pass==$p)
   {
	   header("Location:ahome.php");
   }
   else
   {
	   header("Location:g1.php");
   }
}

?>
</center>
</div>
</div>
</div>