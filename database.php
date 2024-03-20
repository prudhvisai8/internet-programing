<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="Hotel";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){  

  die('Could not connect: '.mysqli_connect_error());  

}  
echo 'Connected successfully<br/>';

$stmt = $conn->prepare("INSERT INTO reservation VALUES(?,?,?,?)");
$stmt->bind_param("ssis", $u,$e,$ph, $p);
$u=$_GET["username"];
$e=$_GET["email"];
$ph=$_GET["phno"];
$p=$_GET["pass"];

$stmt->execute();
 echo "Record inserted successfully";  
$stmt->close();
$conn->close();
header("refresh:3; url=signin.html");
?>