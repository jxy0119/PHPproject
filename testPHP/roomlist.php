<?php
session_start();
$con = mysql_connect("localhost", "root", "19940119jxy");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);

if(isset($_GET['id']))
{
	$flag=$_GET['id'];
}
if($flag==1){
$sql="INSERT INTO roominformation (Id,idHouse,RoomName)VALUES(NULL,'$a','bedroom') ";

}else if($flag==2){
	
}else if($flag==3){
	
}else if($flag==4){
	
}else{
	
}
?>
