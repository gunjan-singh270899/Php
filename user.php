<?php


$conn = mysqli_connect('localhost','root','','office');
if (mysqli_connect_error()) {
	echo "Error";
} else {
	echo "Successfully Connected !!";
	echo "<br>";
}

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_POST['submit'])){ /*{ 
if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "Username or Password is invalid"; 
  } 
  else{*/
$query="INSERT INTO user (username,password) VALUES ('$username','$password')";
$result= mysqli_query($conn,$query);


}
?>


<!-- z -->




