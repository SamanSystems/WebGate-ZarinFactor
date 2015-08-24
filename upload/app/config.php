<?php

// Web info
$zf_title = "زرین فاکتور"; // Your website title
$zf_address = "http://localhost.org"; // without "/" at the end
$zf_api = ""; // Your ZarinPal Getway code - Default is for test
$zf_zaringate = "0"; //If you have have ZarinGate set it 1 if not set it 0

// Mysql info
$zf_dbaddress = "localhost"; // Default is localhost
$zf_dbusername = "root"; // Your DB username
$zf_dbpassword = ""; // Your DB password
$zf_dbname = ""; //Your DB name

// Don't edit this part
$zf_webinfo = array("title"=>"$zf_title","desc"=>"$zf_desc");
$zf_dbcon = array("address"=>"$zf_dbadress","username"=>"$zf_dbusername","password"=>"$zf_dbpassword","name"=>"$zf_dbname");
include("mysql.php");
include("core.php");

?>
