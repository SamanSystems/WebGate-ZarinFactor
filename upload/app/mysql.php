<?php

$zf_mysqlcon = mysql_connect("$zf_dbcon[address]","$zf_dbcon[username]","$zf_dbcon[password]");
if (!$zf_mysqlcon)
{
  die('
  <html dir="rtl" lang="fa">
  <head>
  <title>مشکل در اتصال به پایگاه داده</title>
  </head>
  <body>
  
  <span style="font-size: 30px;">متاسفیم! مشکلی در اتصال به پایگاه داده به وجود آمده است!</span>
  <li>شاید مشکل از فایل app/config.php باشد</li>
  <li>شاید مشکل از خود پایگاه داده است</li>
  <li>شاید مشکل از فایل app/mysql.php است</li>
  
  </body>
  </html>
  ');
}
mysql_select_db("$zf_dbcon[name]", $zf_mysqlcon);
?>
