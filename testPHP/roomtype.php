<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="welcome2.css">
<link rel="stylesheet" href="registration.css" type="text/css">
<title>Adding Room</title>
</head>
<body>
	<?php
	session_start();
	$username=$_SESSION['username'];
	$id=$_SESSION['id'];
	$idhouse=$_SESSION['idhouse'];
	print "<h3>"."Welcome"." ".$_SESSION["username"]."</h3>"."<br>";										// printing username that value store in session variable
	//print "<h3>"."Welcome"." ".$_SESSION["id"]."</h3>"."<br>";												Checking id value is coming or not
	echo "<br>"."<ul>";
	echo "<li>"."<a href='profile.php'>"."Edit Profile"."</a>"."</li>";
	echo "<li>"."<a href='addhomepage1.html'>"."Add New Home"."</a>"."</li>";
	echo "<li>"."<a href='edithomedetail.php'>"."View Home Detail"."</a>"."</li>";
	echo "<li>"."<a href='login.html'>"."Logout"."</a>"."</li>";
	echo "</ul>";
	$dbname='appproject';
	$conn=mysqli_connect('localhost','root','',$dbname);
	if(!$conn){
		die("Connection failed". mysqli_connect_error());
	}
	$roomtype=$_POST['roomtype'];
	$roomname=$_POST['roomname'];
	$sql1 = "SELECT idTyperoom FROM typeroom WHERE typename= '$roomtype'";
	$result = mysqli_query($conn, $sql1);
	while ($row = mysqli_fetch_assoc($result)) {
		$idtyperoom=$row['idTyperoom'];
		$_SESSION['idtyperoom']=$idtyperoom;
	}
	$sql="INSERT INTO roomname (roomname,idHouse,idTyperoom) VALUES('$roomname','$idhouse','$idtyperoom')";
	if(mysqli_query($conn,$sql)){
		echo "<script>alert('Room added successfully');location.href=''</script>";
	}
	else{
		echo "Error creating database". mysqli_error($conn);
	}
	mysqli_close($conn);
	
	?>