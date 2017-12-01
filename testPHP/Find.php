<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="Check.php?id=1" method="post">
<?php
session_start();

$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
$sql="select typename from typeroom ";
$result = mysql_query($sql,$con);
echo "<select name='typename'>";
while($row=mysql_fetch_array($result)){
	$sn=$row["typename"];
	echo "<option>".$sn."</option>";
	
}
echo "</select>";


if (!$result)
  {
  die('Error: ' . mysql_error());
  }
  

mysql_close($con)
?>
<input type="submit" value="submit">



</form><br>

<form action="Check.php?id=2" method="post">
<?php

$rn=$_SESSION['roomname'];
$con = mysql_connect("localhost", "root", "19940119jxy");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
$sql="select sensorname from sensortype ";
$result = mysql_query($sql,$con);
echo "<select name='sensorname'>";
while($row=mysql_fetch_array($result)){
	$sn=$row["sensorname"];
	echo "<option>".$sn."</option>";
	
}
echo "</select>";


if (!$result)
  {
  die('Error: ' . mysql_error());
  }
  

mysql_close($con)
?>
<input type="submit" value="submit">



</form>

</body>
</html>
