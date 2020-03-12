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
<li><a href="ahome.php">Home</a></li>
<li><a href="room.php">Room Update</a></li>
<li><a href="booking.php">Booking</a></li>
<li><a href="rd.php">Room Details</a></li>
<li><a href="">Help Line</a></li>
</ul>
</div>
<form action="room.php" method="post">
<center><table>
<tr>
<td style="color:white;">Statas</td>
<td style="color:white;">Available</td>

</tr>
<tr>
<td style="color:white;">Room no::</td>
<td> <input type="text" name="room" placeholder="Enter the Room No"></td>
</tr>
<tr>
<td style="color:white;">Room type::</td>
<td> <input type="text" name="type" placeholder="Enter the Room type"></td>
</tr>
<tr>
<td style="color:white;">Room price::</td>
<td> <input type="text" name="price" placeholder="Enter the Room price"></td>
</tr>
<tr>
<td style="color:white;">Status::</td>
<td> <input type="text" name="status" placeholder="Enter the Room status"></td>
</tr>
<tr>
<td style="color:white;">Submit::</td>
<td> <input type="submit" name="submit" value="submit"></td>
</tr>
</table></center>
</form>
<?php 
if(isset($_POST['submit']))
{
	 $room=$_POST['room'];
	 $type=$_POST['type'];
 $price=$_POST['price'];
 $status=$_POST['status'];
 if(mysqli_query($a,"insert into room(roomno,rtype,rprice,status) value('$room','$type','$price','$status')"))
 {
	 
 }
}
?>
</div>
</div>
</div>