<?php
include ("includes/header.php");


$link = mysqli_connect("localhost", "root", "vertrigo", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

if (isset($_POST['detail']))
	$detail=$_POST['detail'];

if (isset($_SESSION['username']))
	$username=$_SESSION['username'];

$query = "INSERT INTO contact (username,detail) VALUES ('$username','$detail')";

if (mysqli_query($link, $query) === true)
    echo ("<p style='color:green;'><b>کاربر گرامی پیام شما با موفقیت دریافت شد</b></p>");
else
    echo ("<p style='color:red;'><b>خطا در ارسال پیام</b></p>");

mysqli_close($link);

include ("includes/footer.php");
?>
