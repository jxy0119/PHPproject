<?php
session_start();
if(!isset($_SESSION["username"])){
	header("Location:loginPage.html");
	exit();
}
print "hello!".$_SESSION["username"];
/*
 * Created on 2016Äê11ÔÂ24ÈÕ
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<br><a href="loginPage.html">log out</a>
<br /><a href="addHouseInfo.php">click here to start setting your home information</a>
