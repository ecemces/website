<?php	
header('Content-Type: text/html; charset=utf-8');
$servername = "192.168.0.27";
$username = "dev";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername;dbname=personel;charset=utf8", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  /*echo "Connected successfully";*/
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
 $conn ->exec("SET NAMES UTF8");
 ?>