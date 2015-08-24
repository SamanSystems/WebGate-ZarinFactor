<?php include("header.php"); ?>

<div class="pure-g" style="margin-top: 20px;">
    <div class="pure-u-1-5" style="margin-left: 15px;">
    <div class="zf_box">
    <li><div style="float: right;"><img src="app/view/images/buy.png"></div><div style="float: right;">اضافه کردن به کارت</div><div class="clearfix"></div></li>
    <li class="active"><div style="float: right;"><img src="app/view/images/factor.png"></div><div style="float: right;">فاکتور کلی</div><div class="clearfix"></div></li>
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
if($_GET['results']=="yes") {
echo '
<a href="?page=zff"><button class="button-success pure-button">مبلغ مورد نظر با موفقیت افزوده شد!</button></a>
';
}
if($_GET['results']=="dyes") {
echo '
<a href="?page=zff"><button class="button-error pure-button">مبلغ مورد نظر با موفقیت حذف شد!</button></a>
';
}
?>

<br><br>

<!--فاکتور-->

<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th align="right">نام و نام خانوادگی</th>
            <th align="right">ایمیل</th>
            <th align="right">مبلغ ( تومان )</th>
			<th align="right">توضيحات</th>
			<th align="right">عمليات</th>
        </tr>
    </thead>
	<tbody>
<?php
$result = mysql_query("SELECT * FROM zf_prices WHERE session = '$zf_hash' AND type = 'nopay'");

while($row = mysql_fetch_array($result)){
echo '
        <tr>
            <td>' . $row[fullname] . '</td>
            <td>' . $row[email] . '</td>
            <td>' . $row[price] . '</td>
            <td>' . $row[desc] . '</td>
			<td><a href="index.php?page=zfd&id=' . $row[ID] . '"><button class="button-error pure-button">حذف</button></a></td>
        </tr>
';
}

?>
    </tbody>
</table>

<!--فاکتور-->
<br>
<?php

$sresult = mysql_query("SELECT price FROM zf_prices WHERE session = '$zf_hash' AND type = 'nopay'"); 

$sum = 0;
while ($row = mysql_fetch_array($sresult, MYSQL_NUM)) { 
    $sum += $row[0]; 
} 

?>
<button class="pure-button pure-button-disabled">کل مبلغ: <?php echo $sum; ?> تومان</button>
<a href="?page=zfp"><button class="button-success pure-button">پرداخت نهایی</button></a>
<a href="?page=zfi"><button class="button-secondary pure-button">افزودن مبلغ جدید</button></a>

    </div>
    </div>
</div>

<?php include("footer.php"); ?>
