<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location:loginPage.html");
	exit();
}

print "hello!".$_SESSION["username"]."please set your house information first!";/*
 * Created on 2016Äê12ÔÂ16ÈÕ
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<form action="HandleAdd.php" method="post">
HouseNo:<input type="text" name="houseno" size="20"><br>
Street:<input type="text" name="street" ><br>
City:<input type="txt" name="city"><br>
Country:<input type="text" name="country" ><br>
PinCode:<input type="text"  name="pincode"><br>
<input type="submit" name="submit" value="submit">
</form>
