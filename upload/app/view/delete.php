<?php
mysql_query("DELETE FROM zf_prices WHERE ID ='$_GET[id]'");
header("location: ?page=zff&results=dyes");
?>
