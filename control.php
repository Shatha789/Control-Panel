<?php

$ro1 = $_POST['sl1'];
$ro2 = $_POST['sl2'];
$ro3 = $_POST['sl3'];
$ro4 = $_POST['sl4'];
$ro5 = $_POST['sl5'];
$ro6 = $_POST['sl6'];

// connection

$conn = new mysqli('localhost', 'root' , '' ,'robot');
if($conn->connect_error){
  die('Connection Failed  :'.$conn->connect_error);

}else {

  if(isset($_POST['save'])){

  $stmt = $conn->prepare("insert into sliders_1(sl1,sl2, sl3, sl4, sl5, sl6)
  values(?,?,?,?,?,?)");
  $stmt->bind_param("iiiiii",$ro1,$ro2,$ro3,$ro4,$ro5,$ro6);
  $stmt->execute();
  echo "Save successfully........";
  $stmt->close();
  $conn->close();
}
}

  