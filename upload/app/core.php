<?php
session_start();
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    //check ip from share internet
        $ip=$_SERVER['HTTP_CLIENT_IP'];
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    //to check ip is pass from proxy
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    else
        $ip=$_SERVER['REMOTE_ADDR'];
        
    return $ip;
}
$zf_ip = getRealIpAddr();
if(empty($_SESSION["hash"])) {
	$_SESSION["hash"] = rand(100000000,999999999);
}
$zf_hash = $_SESSION["hash"];
?>
