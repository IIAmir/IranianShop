<?php
include ("includes/header.php");   // اضافه كردن پرونده header.php 
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
<script type="text/javascript">
<!--
location.replace("index.php");	 // منتقل شود index.php به صفحه
-->
</script>
<?php
} // if پایان


$pro_code = $_POST['pro_code'];
$pro_name = $_POST['pro_name'];
$pro_qty = $_POST['pro_qty'];
$pro_price = $_POST['pro_price'];
$total_price = $_POST['total_price'];

$realname = $_POST['realname'];

$email = $_POST['email'];

$mobile = $_POST['mobile'];
$address = $_POST['address'];

$username = $_SESSION['username'];

$link = mysqli_connect("localhost", "root", "vertrigo", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());




$query = "INSERT INTO orders 
    (id,
     username,
     orderdate,
     pro_code,
     pro_qty,
     pro_price,
     mobile,
     address,
     trackcode,
     state
     ) VALUES
      ('0',
       '$username',
       '".date('y-m-d')."',
       '$pro_code',
       '$pro_qty',
       '$pro_price',
       '$mobile',
       '$address',
       '000000000000000000000000',
       '0')";
/*
0 تحت بررسی
1 آماده برای ارسال
2 ارسال شده 
3 سفارش لغو شده است
*/



if (mysqli_query($link, $query) === true) {
    echo ("<p style='color:green;'><br/><b>سفارش شما با موفقیت در سامانه ثبت شد</b></p>");

    echo ("<p style='color:brown;'><br/><b>کاربر گرامی آقا/خانم $realname</b></p>");
    echo ("<p style='color:brown;'><br/><b>محصول $pro_name با کد $pro_code به تعداد/مقدار $pro_qty با قیمت پایه $pro_price ریال را سفارش داده‌اید</b></p>");
    echo ("<p style='color:red;'><br/><b>مبلغ قابل پرداخت برای سفارش ثبت شده $total_price ریال است</b></p>");
 
    echo ("<p style='color:blue;'><b>پس از بررسی سفارش و تایید آن با شما تماس گرفته خواهد شد</b></p>");
    echo ("<p style='color:blue;'><b>محصول خریداری شده از طریق پست جمهوری اسلامی ایران طبق آدرس درج شده ارسال خواهد شد</b></p>");
    echo ("<p style='color:blue;'><b>در هنگام تحویل گرفتن محصول آن را بررسی و از صحت و سالم بودن آن اطمینان حاصل کنید سپس مبلغ کالا را طبق فاکتور ارائه شده به مامور پست تحویل دهید</b><br/><br/></p>");
    
    $query = "UPDATE products SET pro_qty=pro_qty-$pro_qty WHERE pro_code='$pro_code'";
    mysqli_query($link, $query);

} else
    echo ("<p style='color:red;'><b>خطا در ثبت سفارش</b></p>");


mysqli_close($link);

include ("includes/footer.php");
?>
