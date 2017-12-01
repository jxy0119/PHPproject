<?php
session_start();
$id=$_GET['id'];
$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
if($id=='1'){
$sql="SELECT sensor.idSensor,sensordata.*,roomname.roomname,typeroom.typename,sensortype.sensorname,sensortype.Units,roomname.idHouse FROM sensordata LEFT join sensor ON sensor.idSensor=sensordata.idSensor LEFT JOIN roomname ON sensor.idRoomname=roomname.IdRoomname LEFT JOIN sensortype ON sensor.idSensortype=sensortype.IdSensorType left JOIN typeroom ON roomname.idTyperoom=typeroom.idTyperoom WHERE typename='".$_POST['typename']."'AND idHouse='".$_SESSION['idHouse']."'";	
//$sql="SELECT SensorName, Data,DataType FROM sensordata WHERE Id IN (SELECT max(Id) FROM sensordata WHERE RoomName='".$_POST['RoomName']."'group by SensorName)";	
}else{
$sql="SELECT sensor.idSensor,sensordata.*,roomname.roomname,typeroom.typename,sensortype.sensorname,sensortype.Units,roomname.idHouse FROM sensordata LEFT join sensor ON sensor.idSensor=sensordata.idSensor LEFT JOIN roomname ON sensor.idRoomname=roomname.IdRoomname LEFT JOIN sensortype ON sensor.idSensortype=sensortype.IdSensorType left JOIN typeroom ON roomname.idTyperoom=typeroom.idTyperoom WHERE sensorname='".$_POST['sensorname']."'AND idHouse='".$_SESSION['idHouse']."'";	
//$sql="SELECT RoomName, Data,DataType FROM sensordata WHERE Id IN (SELECT max(Id) FROM sensordata WHERE SensorName='".$_POST['SensorName']."'group by RoomName)";
}
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result)){
	
	$type=$row["Units"];
	$data=$row["Data"];
	$idsn=$row["idSensor"];
	$time=$row["Date"];
	if($id=='1'){
		$sn=$row["sensorname"];

		echo "<li>sensorName:".$sn."Data:".$data.$type.$time."</li><a href='update.php?idsn=$idsn'>change data</a>";
		}	
	else{
		$sn=$row["roomname"];
		
	    echo "<li>RoomName:".$sn."Data:".$data.$type."</li>";
		}	
	}	
	
if (!$result)
  {
  die('Error: ' . mysql_error());
  }
  else{
   
  alert("operate suc, XD");
  }

function alert($tip = "") {
    $js = "<script>";
    if ($tip)
        $js .= "alert('" . $tip . "');</script>";
    
    
    echo $js;
    
}

mysql_close($con);
?>
