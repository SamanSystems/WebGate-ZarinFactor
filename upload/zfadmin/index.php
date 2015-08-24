<?php include("header.php"); ?>

<div class="pure-g" style="margin-top: 20px;">
    <div class="pure-u-1-5" style="margin-left: 15px;">
    <div class="zf_box">
به بخش مدیریت زرین فاکتور خوش آمدید! شما در این بخش می توانید تمام فاکتور ها را با فیلتر های پرداخت شده و نشده مشاهده کنید.
    </div>
    </div>
    <div class="pure-u-3-5">
    <div class="zf_boxwb">
<?php
if(empty($_SESSION["admin"])) {
?>
		<?php
		if($_GET['r']=="uw") {
		echo '
		<a href="index.php"><button class="button-error pure-button">نام کاربری اشتباه است</button></a>
		';
		}
		if($_GET['r']=="pw") {
		echo '
		<a href="index.php"><button class="button-error pure-button">رمز عبور اشتباه است</button></a>
		';
		}
		?>
		<form action="login.php" method="POST" class="pure-form">
		<fieldset class="pure-group">
        <input type="text" class="pure-input-1-2" name="username" placeholder="نام کاربری">
        <input type="password" class="pure-input-1-2" name="password" placeholder="رمز عبور">
		</fieldset>
		<input type="submit" value="ورود" class="pure-button pure-input-1-2 pure-button-primary"/>
		<br><br>
		<span style="font-size: 15px;">* تمامی ورودی ها اجباری می باشد</span>
		</form>
<?php
}
else { header("location: allfactors.php"); }
?>
    </div>
    </div>
</div>

<?php include("footer.php"); ?>
