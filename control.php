<?php

$ro1 = $_POST['Motive1'];
$ro2 = $_POST['Motive2'];
$ro3 = $_POST['Motive3'];
$ro4 = $_POST['Motive4'];
$ro5 = $_POST['Motive5'];
$ro6 = $_POST['Motive6'];

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

  