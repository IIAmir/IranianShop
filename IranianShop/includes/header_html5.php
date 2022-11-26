<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8" />
<title>فروشگاه ايرانيان</title>

<style type="text/css">
<!--
	.set_style_link {
     text-decoration: none;
     font-weight: bold; 
     }
-->
</style>


</head>

<body>
<table dir="rtl"  style="font-family: tahoma;font-size: 13pt;width: 1024px;margin-left: auto;margin-right: auto;"   >
    <tr>
        <td>
        
            <table style="width: 100%;"  border="1"  >
                <tr>
	               <td>لوگوي سايت</td>
                </tr>
            </table>

            <table style="width: 100%;"  border="1"  >
                <tr style="text-align: center;">
                    <td><a href="index.php" class="set_style_link" >صفحه اصلي</a></td>
                    <td><a href="register.php"  class="set_style_link" >عضويت در سايت</a></td>
                    <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true) 
                         {
                    ?>
                    <td><a href="logout.php"  class="set_style_link" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a></td>
                    <?php
                         } // if  پایان
                        else
                         { 
                    ?>
                    <td><a href="login.php"  class="set_style_link" >ورود به سايت</a></td>
                    <?php
                         }  //else پایان 
                    ?>
                    <td><a href="#"  class="set_style_link" >درباره ما</a></td>
                    <td><a href="contact.php"  class="set_style_link" >ارتباط با ما</a></td>
                    
                    <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin") 
                         {
                    ?>
                    <td><a href="admin_products.php"  class="set_style_link" >مدیریت محصولات</a></td>                    
                    <td><a href="admin_manage_order.php"  class="set_style_link" >مدیریت سفارشات</a></td>
                    <?php
                         } // if  پایان
                    ?>
                    
                </tr>
            </table>

<table style="width: 100%;"  border="1"  >
                <tr>
                    <td style="width: 25%;">بخش امكانات سايت</td>
                    <td style="width: 75%;">