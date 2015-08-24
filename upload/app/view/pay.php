<?php include("header.php"); ?>

<div class="pure-g" style="margin-top: 20px;">
    <div class="pure-u-1-5" style="margin-left: 15px;">
    <div class="zf_box">
    <li><div style="float: right;"><img src="app/view/images/buy.png"></div><div style="float: right;">اضافه کردن به کارت</div><div class="clearfix"></div></li>
    <li><div style="float: right;"><img src="app/view/images/factor.png"></div><div style="float: right;">فاکتور کلی</div><div class="clearfix"></div></li>
    <li class="active"><div style="float: right;"><img src="app/view/images/pay.png"></div><div style="float: right;">پرداخت نهایی</div><div class="clearfix"></div></li>
    <div class="zf_hr"></div>
    <br>
    آی پی شما: <?php echo $zf_ip; ?><br>
    کد نشست: <?php echo $zf_hash; ?> ( <a href="?page=zfns">نشست جدید</a> )<br><span style="font-size: 10px;">با ایجاد نشست جدید تمام فاکتور های شما از دست خواهد رفت</span>
    </div>
    </div>
    <div class="pure-u-3-5">
    <div class="zf_boxwb">
<!--پرداخت نهایی-->

<?php

$sresult = mysql_query("SELECT price FROM zf_prices WHERE session = '$zf_hash' AND type = 'nopay'"); 

$sum = 0;
while ($row = mysql_fetch_array($sresult, MYSQL_NUM)) { 
    $sum += $row[0]; 
} 

$ft = mysql_query("SELECT COUNT(*) FROM `zf_prices` WHERE session = '$zf_hash' AND type = 'nopay'");
$row = mysql_fetch_row($ft);

?>

شما در حال پرداخت مبلغ <button class="pure-button pure-button-disabled"><?php print $sum; ?></button> تومان با احتساب <button class="pure-button pure-button-disabled"><?php echo $row[0]; ?></button> فاکتور می باشید.
<br>
آیا تایید می کنید؟
<br><br>
<a href="?page=zfypay&ft=<?php echo $row[0]; ?>"><button class="button-success pure-button">بله ( درگاه زرین پال )</button></a>
<?php if($zf_zaringate=="1") { echo '<a href="?page=zfypay&ft=' . $row[0] . '&zg=ZarinGate"><button class="button-success pure-button">بله ( درگاه بانک سامان )</button></a>'; } ?>
<br><br><a href="?page=zfi"><button class="button-error pure-button">خیر - می خواهم فاکتور جدید اضافه کنم</button></a>

<!--پرداخت نهایی-->
    </div>
    </div>
</div>

<?php include("footer.php"); ?>
