<?php
echo"<title>APPOINTMENT</title>";
echo"<form method='POST'>";
$n=$_POST['n'];
$m=$_POST['m'];
$e=$_POST['e'];
$c=$_POST['c'];
$a=$_POST['a'];
if(isset($_POST['submit']))
{
	$host="localhost";
	$user="root";
	$pass="";
	$database="interior";
	$con=mysqli_connect($host,$user,$pass,$database);
	if($con->connect_error)
	{
		echo"Connection failed";
	}
	$con=mysqli_connect("localhost","root","","interior");
	$query="INSERT INTO appointment(Name,Mobile,Email,City,Requirement)VALUES('$n','$m','$e','$c','$a')";
	mysqli_query($con,$query);
	mysqli_close($con);
}
	echo"<script type='text/javascript'>alert('Row were inserted successfully')</script>";
	echo"</form>";
	
?>