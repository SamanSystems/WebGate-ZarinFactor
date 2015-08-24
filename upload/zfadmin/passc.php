<?php
session_start();
if($_SESSION["admin"]=="true") {
include("header.php");
?>
<div class="pure-g" style="margin-top: 20px;">
    <div class="pure-u-1-5" style="margin-left: 15px;">
    <div class="zf_box">
به بخش مدیریت زرین فاکتور خوش آمدید! شما در این بخش می توانید تمام فاکتور ها را با فیلتر های پرداخت شده و نشده مشاهده کنید.
    </div>
    </div>
    <div class="pure-u-3-5">
    <div class="zf_boxwb">
		<?php
		if($_GET['r']=="tw") {
		echo '
		<a href="index.php"><button class="button-error pure-button">تکرار رمز عبور اشتباه است</button></a>
		';
		}
		?>
		<form action="passc2.php" method="POST" class="pure-form">
		<fieldset class="pure-group">
        <input type="password" class="pure-input-1-2" name="passo" placeholder="رمز جدید">
        <input type="password" class="pure-input-1-2" name="passt" placeholder="تکرار رمز جدید">
		</fieldset>
		<input type="submit" value="تغییر رمز" class="pure-button pure-input-1-2 pure-button-primary"/>
		<br><br>
		<span style="font-size: 15px;">* تمامی ورودی ها اجباری می باشد</span>
		</form>

    </div>
    </div>
</div>

<?php
include("footer.php");
}
else { header("location: index.php"); } 
?>

