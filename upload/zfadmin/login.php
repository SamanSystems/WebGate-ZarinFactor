<?php
session_start();
$zf_postusername = $_POST['username'];
$zf_postpassword = $_POST['password'];
include("config.php");
if(empty($_SESSION["admin"])) {

$zf_adminlogin = mysql_query("SELECT * FROM zf_admin WHERE ID = '1'");

while($row = mysql_fetch_array($zf_adminlogin)) {
$zf_adminusername = $row['username'];
$zf_adminpassword = $row['password'];
}

if($zf_postusername=="$zf_adminusername") {
	$zf_adminpassword2 = md5("$zf_postpassword");
	if($zf_adminpassword2=="$zf_adminpassword") {
		$_SESSION["admin"] = 'true';
		header("location: allfactors.php");
	}
	else {
	header("location: index.php?r=pw");	
	}
}

else {
	header("location: index.php?r=uw");
}

}
else {
	header("location: allfactors.php");
}
?>
