<?php
session_start();
$hn=$_POST['houseno'];
$str=$_POST['street'];
$c=$_POST['city'];
$cou=$_POST['country'];
$pin=$_POST['pincode'];
$con = mysql_connect("localhost", "root", "19940119jxy");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
$sql="SELECT UserId from userinformation where username='".$_SESSION["username"]."'";
$result = mysql_query($sql,$con);
$row=mysql_fetch_assoc($result);
$sql ="INSERT INTO house(idHouse,idUser,HouseNo,Street,City,Country,PinCode)VALUES(NULL,'".$row["UserId"]."','$hn','$str','$c','$cou','$pin')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else{
  
  alert("operate suc,next step is setting your rooms XD","jump","addRoomAndHAG.php");
  }

function alert($tip = "", $type = "", $url = "") {
    $js = "<script>";
    if ($tip)
        $js .= "alert('" . $tip . "');";
    switch ($type) {
        
        case "jump" : //跳转
            if ($url)
                $js .= "window.location.href='" . $url . "';";
            break;
        default :
            break;
    }
    $js .= "</script>";
    echo $js;
    if ($type) {
        exit();
    }
}

mysql_close($con)/*
 * Created on 2016年12月17日
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
