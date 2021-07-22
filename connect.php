<?php



  if(isset($_POST['on'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot";

  $conn= mysqli_connect($servername, $username, $password,$dbname);

  $insert="insert into robot values(1)";
}


 ?>
