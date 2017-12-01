<?php
session_start();
if(isset($_GET['$row1']))
{
	$a=$_GET['$row1'];
}
?>
<html>
<body>
<form>
Bedroom:<input type="button" name="bed" onclick="windows.location.href='roomlist.php?id=1'" value="add"><br>
Living Room:<input type="button" name="liv" onclick="windows.location.href='roomlist.php?id=2'" value="add"><br>
Kitchen:<input type="button" name="kit" onclick="windows.location.href='roomlist.php?id=3'" value="add"><br>
BathRoom:<input type="button" name="bat" onclick="windows.location.href='roomlist.php?id=4'" value="add"><br>
Dining Room:<input type="button"  name="din" onclick="windows.location.href='roomlist.php?id=5'" value="add"><br>
HAG:<input type="button"  name="hag" onclick="windows.location.href='roomlist.php?id=6'" value="add"><br>
</form>

</body>
</html>

