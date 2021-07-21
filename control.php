
  
<?php
$Motive1=$_POST['Motiv1'];
$Motiv2=$_POST['Motiv2'];
$Motiv3=$_POST['Motiv3']; 
$Motiv4=$_POST['Motiv4'];
$Motiv5=$_POST['Motiv5'];
$Motiv6=$_POST['Motiv6'];


$conn= new mysqli("localhost","root","","robot");

if(isset($_POST['save'])) 
{ 
$stmt=$conn->prepare("insert into angle(motor1,motor2,motor3,motor4,motor5,motor6)
values('$motor1','$motor2','$motor3','$motor4','$motor5','$motor6')");
$stmt->execute();
  
  echo "The data is inserted correctly..";
}
elseif(isset($_POST['run']))
{
$stmt=$conn->prepare("insert into run (start) values ('1')");
$stmt->execute();
	echo "The data is inserted correctly..";
}
else { echo "try again";}


?>

  