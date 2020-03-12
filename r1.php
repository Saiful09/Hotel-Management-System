<?php 
include("connection.php");
$r=$_GET['room'];
$ci=$_GET['ci'];
$co=$_GET['co'];
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
<form action="r1.php" method="post">
<center><table>
<?php
$q="select * from room where status='unbooked'";
$run=mysqli_query($a,$q);
$num=mysqli_num_rows($run);
 $num;
if($r<=$num)
{
	?>
	<tr>
<td style="color:white;">Statas</td>
<td style="color:white;">Available</td>

</tr>
<tr>
<td style="color:white;">Status::</td>
<td> <input type="text" name="status" value="available" disabled="disabled"></td>
</tr>
<tr>
<td style="color:white;">Name::</td>
<td> <input type="text" name="name" placeholder="Enter the name"></td>
</tr>
<tr>
<td style="color:white;">address::</td>
<td> <input type="text" name="address" placeholder="Enter address"></td>
</tr>
<tr>
<td style="color:white;">Email::</td>
<td> <input type="text" name="email" placeholder="Enter email"></td>
</tr>
<tr>
<td style="color:white;">checkin date::</td>
<td> <input type="date" name="checkin" value="<?php echo $ci;?>"></td>
</tr>
<tr>
<td style="color:white;">Check out date::</td>
<td> <input type="date" name="checkout" value="<?php echo $co;?>"></td>
</tr>
<tr>
<td style="color:white;">Number of memeber::</td>
<td> <input type="text" name="member" placeholder="pls enter the number"></td>
</tr>
<tr>
<td style="color:white;">City::</td>
<td>
<select name="city">
<option>dhaka</option>
<option>noakhali</option>
<option>comilla</option>
<option>chittagong</option>
<option>rajshahi</option>
</select>
</td>
</tr>
<tr>
<td style="color:white;">id no::</td>
<td> <input type="text" name="idno" placeholder="pls enter the number"></td>
</tr>
<tr>
<td style="color:white;">Submit::</td>
<td> <input type="submit" name="submit" value="submit"></td>
</tr>
	<?php 
}
else{
	
?>
<tr>
<td>Statas</td>
<td><input type="text" name="status" value="Not Available"disabled="disabled" title="status"></td>
</tr>
<?php
}
?>
</table>
</center></form>
<?php 
if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $address=$_POST['address'];
 $email=$_POST['email'];
 $checkin=$_POST['checkin'];
 $checkout=$_POST['checkout'];
 $member=$_POST['member'];
 $city=$_POST['city'];
 $idno=$_POST['idno'];
 if(mysqli_query($a,"insert into hello(name,address,email,checkin,checkout,nmember,city,idno) 
value('$name','$address','$email','$checkin','$checkout','$member','$city','$idno')"))
{
mysqli_query($a,"update room set status='booked' where roomno=$roomno");
header("Location:f1.php");	
}
}
?>
</div>
</div>
</body>
</html>