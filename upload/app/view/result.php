<?php include("header.php"); ?>

<div class="pure-g" style="margin-top: 20px;">
    <div class="pure-u-1-5" style="margin-left: 15px;">
    <div class="zf_box">
    <li class="active"><div style="float: right;"><img src="app/view/images/buy.png"></div><div style="float: right;">اضافه کردن به کارت</div><div class="clearfix"></div></li>
    <li><div style="float: right;"><img src="app/view/images/factor.png"></div><div style="float: right;">فاکتور کلی</div><div class="clearfix"></div></li>
    <li><div style="float: right;"><img src="app/view/images/pay.png"></div><div style="float: right;">پرداخت نهایی</div><div class="clearfix"></div></li>
    <div class="zf_hr"></div>
    <br>
    آی پی شما: <?php echo $zf_ip; ?><br>
    کد نشست: <?php echo $zf_hash; ?> ( <a href="?page=zfns">نشست جدید</a> )<br><span style="font-size: 10px;">با ایجاد نشست جدید تمام فاکتور های شما از دست خواهد رفت</span>
    </div>
    </div>
    <div class="pure-u-3-5">
    <div class="zf_boxwb">
	<?php
	$zf_payresult = $_GET['payresult'];
	if(empty($zf_payresult)) { header("location: ?page=zfi"); }
	else {
		if($_GET['prs']=="yes") { echo '<a href="?page=zfi"><button class="button-success pure-button">تراکنش با موفیت انجام شد! کد تراکنش: ' . $zf_payresult . '</button></a>'; }
		if($_GET['prs']=="no") { echo '<a href="?page=zfi"><button class="button-error pure-button">پرداخت شکست خورد. کد تراکنش: ' . $zf_payresult . ' | برای حل مشکل حتما کد خطا را به همراه داشته باشید و با مدیریت وبسایت تماس حاصل فرمایید</button></a>'; }
		if($_GET['prs']=="canceled") { echo '<a href="?page=zfi"><button class="button-error pure-button">عملیات پرداخت توسط شما لغو شد</button></a>'; }
	}
	?>
    </div>
    </div>
</div>

<?php include("footer.php"); ?>
