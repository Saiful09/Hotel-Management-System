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
<div style="background-image:url('img/img9.jpg');width:100%;height:800px;">
<div id="header">
<div id="logo">
<h1><font color="white">My project</font></h1>
</div>
<div id="nav">
<ul>
<li><a href="ahome.php">Home</a></li>
<li><a href="room.php">Room Update</a></li>
<li><a href="booking.php">Booking</a></li>
<li><a href="rd.php">Room Details</a></li>
<li><a href="">Help Line</a></li>
</ul>
</div>

</div>
<center><h1 style="color:white;">WELCOME ADMIN </h1></center>
<div style="background-color:rgba(255,255,255,0.6);">
<table>
<tr>
<th width="10%" height="50px">Name</th>
<th width="10%" height="50px">address</th>
<th width="10%" height="50px">email</th>
<th width="10%" height="50px">checkin</th>
<th width="10%" height="50px">checkout</th>
<th width="10%" height="50px">member</th>
<th width="10%" height="50px">city</th>
<th width="10%" height="50px">idno</th>
</tr>
<?php 
$q1="select * from hello";
$run=mysqli_query($a,$q1);
while($row=mysqli_fetch_array($run))
{
	$name=$row['name'];
	$address=$row['address'];
	$email=$row['email'];
	$checkin=$row['checkin'];
	$checkout=$row['checkout'];
	$member=$row['nmember'];
	$city=$row['city'];
	$idno=$row['idno'];
?>
<tr>
<td width="10%" height="50px"><center><?php echo $name;?></center></td>
<td width="10%" height="50px"><center><?php echo $address;?></center></td>
<td width="10%" height="50px"><center><?php echo $email;?></center></td>
<td width="10%" height="50px"><center><?php echo $checkin;?></center></td>
<td width="10%" height="50px"><center><?php echo $checkout;?></center></td>
<td width="10%" height="50px"><center><?php echo $member;?></center></td>
<td width="10%" height="50px"><center><?php echo $city;?></center></td>
<td width="10%" height="50px"><center><?php echo $idno;?></center></td>
</tr>
<?php
}
?>

</table>
</div>
</div>
</div>
</html>