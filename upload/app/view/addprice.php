<?php
if(empty($_POST[fullname])) { header("location: ?page=zfi&result=ef"); }
if(empty($_POST[email])) { header("location: ?page=zfi&result=ef"); }
if(empty($_POST[price])) { header("location: ?page=zfi&result=ef"); }
if(empty($_POST[desc])) { header("location: ?page=zfi&result=ef"); }
else {
mysql_query("INSERT INTO `zf_prices`(`ID`, `fullname`, `email`, `price`, `desc`, `session`, `type`, `trcode`) VALUES ('', '$_POST[fullname]', '$_POST[email]', '$_POST[price]', '$_POST[desc]', '$zf_hash', 'nopay', '')");
header("location: ?page=zff&results=yes");
}
?>
