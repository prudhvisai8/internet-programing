<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  
echo 'Connected successfully<br/>';

$stmt = $conn->prepare("INSERT INTO signin VALUES(?,?)");
$stmt->bind_param("si",$e,$p);
$e=$_GET["email"];
$p=$_GET["pass"];
$stmt->execute();
 echo "Record inserted successfully";  
$stmt->close();
$conn->close();
header("refresh:3; url=index.html");
?>