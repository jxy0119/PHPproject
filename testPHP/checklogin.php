<?php
session_start();
$u=$_POST['username'];
$p=$_POST['password'];
$con = mysql_connect("localhost", "root", "19940119jxy");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$db_selected = mysql_select_db("phpProject",$con);
$sql ="SELECT password from userinformation WHERE username='$u'";
$result = mysql_query($sql,$con);
if(mysql_num_rows($result)){
	$row = mysql_fetch_assoc($result);
	if($row["password"]==$_POST['password']){
	$_SESSION["username"]=$u;
	
    alert("login suc","jump","welcome.php");
    
    
	}
}else{
	alert("login failed","jump","loginPage.html");
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




mysql_close($con);



?>
