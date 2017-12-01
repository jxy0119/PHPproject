<?php
session_start();
$rn=$_SESSION['roomname'];
print $rn;
$sensor=$_POST["sensor"];


$instri="¡ãC" ;
$outstr=mb_convert_encoding($instri,'UTF-8','GBK');
$datatype=array($outstr,"%","bool");



$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
for($i=0;$i<count($sensor);$i++){
	
	$sql="select idSensortype from sensortype where sensorName like '%".$sensor[$i]."%'";
	$result=mysql_query($sql,$con);
	$row=mysql_fetch_array($result);
	$idst=$row['idSensortype'];
	$sql="INSERT INTO sensor (idSensor,idRoomname,idSensortype,idHAG)VALUES(NULL,'".$_SESSION['idroomname']."','".$idst."','1')";
	$result = mysql_query($sql,$con);
	}
	

if (!$result)
  {
  die('Error: ' . mysql_error());
  }
  else{
   
  alert("operate suc,next step is setting your rooms XD");
  }

function alert($tip = "") {
    $js = "<script>";
    if ($tip)
        $js .= "alert('" . $tip . "');</script>";
    
    
    echo $js;
    
}

mysql_close($con)
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="HandleAddValue.php" method="post">
<?php
$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);	
	$sql="select idSensor from sensor where idRoomName='".$_SESSION['idroomname']."'";
	$result = mysql_query($sql,$con);

while($row=mysql_fetch_array($result)){
	$sn=$row["idSensor"];
	echo $sn;
	$instri="¡ãC" ;
	$outstr=mb_convert_encoding($instri,'UTF-8','GBK');
	if($sn=="1"){
		echo "<li>temp:<input type='text' name='".$sn."'>".$outstr."<br>";
	}else if($sn=="2"){
		echo "<li>humi:<input type='text' name='".$sn."'>".$outstr."<br>";
	}else if($sn=="3"){
		echo "<li>door:On:<input type='radio' name='".$sn."' value='on'>Off:<input type='radio' name='".$sn."' value='off'><br>";
	}else if($sn=="4"){
		echo "<li>window:On:<input type='radio' name='".$sn."' value='on'>Off:<input type='radio' name='".$sn."' value='off'><br>";
	}else{
		echo "<li>light:On:<input type='radio' name='".$sn."' value='on'>Off:<input type='radio' name='".$sn."' value='off'><br>";
		
	}
	$values[]=$sn;
	
}
$_SESSION['values']=$values;
mysql_free_result($result);
mysql_close($con)



?>
<input type="submit" value="submit">



</form>
</body>
</html>
