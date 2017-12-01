
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<form action="HandleAddSensor.php" method="post">
temperature:<input type="checkbox" name="sensor[]" value="temp"> <br>
humidity:<input type="checkbox" name="sensor[]" value="humi"><br>
door: <input type="checkbox" name="sensor[]" value="door"><br>
window:<input type="checkbox" name="sensor[]" value="win"><br>
light:<input type="checkbox" name="sensor[]" value="light"><br>
<input type="submit" class="submit button" name="submit" value="submit" />
<?php
session_start();
$x="bathroom";
$_SESSION["roomname"]=$x;
$_SESSION['idroomname']=1;
$_SESSION['idHouse']=1;/*
 * Created on 2017Äê1ÔÂ16ÈÕ
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
mail?>



</form>
</body>
</html>
