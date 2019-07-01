<?php
$conn=mysqli_connect('localhost','root','','office');
if(mysqli_connect_errno()){
	echo "Error";
	
	}
	else{
		echo "connected";
	}

$query="INSERT INTO emp(name,age,sal) VALUES('Jay',20,12000)";
$result=mysqli_query($conn,$query);

	/*$query="SELECT * FROM emp";
$result=mysqli_query($conn,$query);
$emp=mysqli_fetch_all($result,MYSQLI_ASSOC);
print_r($emp);*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Database</title>
</head>
<body>

<?php foreach($emp as $i ): ?>
<h3> <?php echo $i['name']; ?> </h3>
<h3> <?php echo $i['age']; ?> </h3>
<h3> <?php echo $i['sal']; ?> </h3>

<?php endforeach ; ?>
</body>
</html>

