<?php $idsn=$_GET['idsn'];?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<?php echo"<form action='handleupdate.php?idsn=$idsn' method='post'>" ;?>
<?php

echo "chang:<input type='text' name='$idsn'>";

?>
<input type="submit" value="submit">



</form>
</body>
</html>
