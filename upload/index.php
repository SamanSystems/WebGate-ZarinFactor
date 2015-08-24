<?php
include("app/config.php");
$zf_page = $_GET['page'];
if(empty($zf_page)) { header("location: ?page=zfi"); }
else {
$zf_ipage = array("zfi"=>"index","zfns"=>"newsession","zfa"=>"addprice","zfd"=>"delete","zff"=>"factor","zfp"=>"pay","zfypay"=>"gate/request","zfvp"=>"gate/verify","zfpr"=>"result");
include('app/view/' . $zf_ipage["$zf_page"] . '.php');
}
?>
