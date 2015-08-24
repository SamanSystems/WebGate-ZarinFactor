<?php
session_start();
include("config.php");
if($_SESSION["admin"]=="true") {
	$passwordone = $_POST['passo'];
	$passwordtwo = $_POST['passt'];
if($passwordone=="$passwordtwo") {
	$hashpassword = md5($passwordone);
	mysql_query("UPDATE zf_admin SET password='$hashpassword' WHERE username='admin'");
	header("location: exit.php");
}

else {
	header("location: passc.php?r=tw");
}

}
else { header("location: index.php"); } 
?>

