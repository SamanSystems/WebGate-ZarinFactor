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

<!--فاکتور-->

<table class="pure-table pure-table-horizontal">
    <thead>
        <tr>
            <th align="right">نام و نام خانوادگی</th>
            <th align="right">ایمیل</th>
            <th align="right">مبلغ ( تومان )</th>
			<th align="right">توضيحات</th>
			<th align="right">نوع</th>
			<th align="right">کد تراکنش</th>
        </tr>
    </thead>
	<tbody>
<?php
$result = mysql_query("SELECT * FROM zf_prices WHERE type = 'payed'");

while($row = mysql_fetch_array($result)){

echo '
        <tr>
            <td>' . $row[fullname] . '</td>
            <td>' . $row[email] . '</td>
            <td>' . $row[price] . '</td>
            <td>' . $row[desc] . '</td>
            <td>' . $row[type] . '</td>
            <td>' . $row[trcode] . '</td>
        </tr>
';
}

?>
    </tbody>
</table>

<!--فاکتور-->

    </div>
    </div>
</div>

<?php
include("footer.php");
}
else { header("location: index.php"); } 
?>

