<?php
session_start();
$u=$_POST['username'];
$p=$_POST['password'];
$r=$_POST['remarks'];
$con = mysql_connect("localhost", "root", "19940119jxy");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
$sql ="INSERT INTO userinformation(UserId,UserName,PassWord,Authority,OtherInfo)VALUES(NULL,'$u','$p','1','$r')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else{
  $_SESSION["username"]=$u;
  alert("registed suc","jump","loginPage.html");
  }
function alert($tip = "", $type = "", $url = "") {
    $js = "<script>";
    if ($tip)
        $js .= "alert('" . $tip . "');";
    switch ($type) {
        
        case "jump" : //Ìø×ª
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

mysql_close($con)
?>
