<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "banquets"; 

// Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname); 

if (!$conn) {  
   die("Connection failed: " .mysqli_connect_error()); 
} 
//post data
if(isset($_POST['submit'])) 
{ 
 	$name=$_POST['name']; 
 	$email=$_POST['email'];

 //insertion of data 
 $sql = "INSERT INTO ban (name,email)  	VALUES ('$name','$email')";   	
 if ($conn->query($sql) === TRUE) {   echo "Booking successful !!!"; }

else {   echo "Error: " . $sql . "<br>" . $conn->error; } 
} 



$conn->close(); 

?>
</body>
</html>