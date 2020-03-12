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
<th width="10%" height="50px">Room No</th>
<th width="10%" height="50px">Room Type</th>
<th width="10%" height="50px">Price</th>
<th width="10%" height="50px">Status</th>
</tr>
<?php 
$q1="select * from room";
$run=mysqli_query($a,$q1);
while($row=mysqli_fetch_array($run))
{
	$roomno=$row['roomno'];
	$rtype=$row['rtype'];
	$rprice=$row['rprice'];
	$status=$row['status'];
	
?>
<tr>
<td width="10%" height="50px"><center><?php echo $roomno;?></center></td>
<td width="10%" height="50px"><center><?php echo $rtype;?></center></td>
<td width="10%" height="50px"><center><?php echo $rprice;?></center></td>
<td width="10%" height="50px"><center><?php echo $status;?></center></td>

</tr>
<?php
}
?>
</table>
</div>
</div>
</div>
</html>