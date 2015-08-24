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
		if($_GET['result']=="ef") {
		echo '
		<a href="?page=zff"><button class="button-error pure-button">تمامی فیلد ها اجباری می باشد!</button></a>
		';
		}
		?>
		<form action="index.php?page=zfa" method="POST" accept-charset="ISO-8859-1" class="pure-form">
		<fieldset class="pure-group">
        <input type="text" class="pure-input-1-2" name="fullname" placeholder="نام و نام خانوادگی">
        <input type="email" class="pure-input-1-2" name="email" placeholder="ایمیل">
        <input type="text" class="pure-input-1-2" name="price" placeholder="مبلغ به تومان ( حداقل ۵۰۰ تومان )">
        <textarea class="pure-input-1-2" name="desc" placeholder="توضیحات" rows="10"></textarea>
		</fieldset>
		<input type="submit" value="افزودن به فاکتور کلی" class="pure-button pure-input-1-2 pure-button-primary"/>
		<br><br>
		<span style="font-size: 15px;">* تمامی ورودی ها اجباری می باشد</span>
		</form>
    </div>
    </div>
</div>

<?php include("footer.php"); ?>
