<?php
$conn=mysqli_connect('localhost','root','','office');
if(mysqli_connect_errno()){
	echo "Error";
	
	}
	else{
		echo "connected";
	}

$x=$_GET['id'];
$query="SELECT * FROM emp WHERE id ='{$x}'";
$result=mysqli_query($conn,$query);
$emp=mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($emp);
?>