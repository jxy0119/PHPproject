<?php
session_start();
$rn=$_SESSION['roomname'];
$idsn=$_GET['idsn'];

//print_r($values);

$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);

$sql="INSERT INTO sensordata (idSensor,Data)VALUES('".$idsn."','".$_POST[$idsn]."')";	
$result=mysql_query($sql,$con);

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
<br /><a href="Find.php">check sensor information</a>
