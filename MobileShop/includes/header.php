<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>موبایل هوآوی ايرانيان</title>

<link href="css/style.css" rel="stylesheet" type="text/css" />

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


<div class="divTable" >
		<div class="divTableRow">
			<div class="divTableCell">
				<header class="divTable">
						<div class="divTableRow">
							<div class="divTableCell">لوگوي سايت</div>
						</div>
				</header>
				<nav class="divTable">
						<ul class="divTableRow" style="text-align: center;">
							<li class="divTableCell"><a class="set_style_link" href="index.php">صفحه اصلي</a></li>
							<li class="divTableCell"><a class="set_style_link" href="register.php">عضويت در سايت</a></li>
                            
                    <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true) 
                         {
                    ?>
                   <li class="divTableCell"><a href="logout.php"  class="set_style_link" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a></li>
                    <?php
                         } // if  پایان
                        else
                         { 
                    ?>
                            
							<li class="divTableCell"><a class="set_style_link" href="login.php">ورود به سايت</a></li>
                            
                    <?php
                         }  //else پایان 
                    ?>						
                    
                            
							<li class="divTableCell"><a class="set_style_link" href="#">درباره ما</a></li>
							<li class="divTableCell"><a class="set_style_link" href="contact.php">ارتباط با ما</a></li>
                            
                            
                    <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin") 
                         {
                    ?>
                    <li class="divTableCell"><a href="admin_products.php"  class="set_style_link" >مدیریت محصولات</a></li>                    
                    <li class="divTableCell"><a href="admin_manage_order.php"  class="set_style_link" >مدیریت سفارشات</a></li>
                    <?php
                         } // if  پایان
                    ?>
                           
                            
						</ul>
				</nav>
				<section class="divTable">
						<section class="divTableRow">
							<aside class="divTableCell" style="width: 25%;" >بخش امكانات سايت</aside>
							<section class="divTableCell" style="width: 75%;" >