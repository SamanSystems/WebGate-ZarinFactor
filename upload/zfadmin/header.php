<?php
session_start();
include("config.php");
?>
<html dir="rtl" lang="fa">
<head>
<title>مدیریت زرین فاکتور</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="container">
<?php
if(empty($_SESSION["admin"])) {
?>
<header>
<div style="float: right;"><h1>مدیریت زرین فاکتور</h1></div>
<div style="float: left; margin-top: 20px;">
<a class="pure-button" href="login.php">ورود</a>
</div>
<div class="clearfix"></div>
<div class="zf_hr"></div>
</header>
<?php
}
else {
?>
<header>
<div style="float: right;"><h1>مدیریت زرین فاکتور</h1></div>
<div style="float: left; margin-top: 20px;">
<a class="pure-button" href="allfactors.php">تمام فاکتور ها</a>
<a class="pure-button" href="payedfactors.php">فاکتور های پراخت شده</a>
<a class="pure-button" href="notpayedfactors.php">فاکتور های پرداخت نشده</a>
<a class="pure-button" href="passc.php">تغییر رمز عبور</a>
<a class="pure-button" href="exit.php">خروج</a>
</div>
<div class="clearfix"></div>
<div class="zf_hr"></div>
</header>
<?php
}
?>
