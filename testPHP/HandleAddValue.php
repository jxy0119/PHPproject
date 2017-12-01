<?php
session_start();
$rn=$_SESSION['roomname'];
$values=$_SESSION['values'];
//print_r($values);

$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
for($i=0;$i<count($values);$i++){
$sql="INSERT INTO sensordata (idSensor,Data)VALUES('".$values[$i]."','".$_POST[$values[$i]]."')";	
$result=mysql_query($sql,$con);
}



/*$sql="select SensorName,Data,DataType from sensordata WHERE Id IN (SELECT max(Id) FROM sensordata WHERE RoomName='".$rn."'group by SensorName)";
$result = mysql_query($sql,$con);
while($row=mysql_fetch_array($result)){
	$sn=$row["SensorName"];
	$data=$row["Data"];
	$type=$row["DataType"];
	//$instri="¡ãC" ;
	//$outstr=mb_convert_encoding($instri,'UTF-8','GBK');
	
		echo "<li>sensorName:".$sn."Data:".$data.$type."</li>";
		
	
	
	
}*/if (!$result)
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
<br /><a href="Find.php">check sensor information</a>
