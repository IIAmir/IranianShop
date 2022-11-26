<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>فروشگاه ايرانيان</title>

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



<div class="divTable"  >
	<div class="divTableBody">
		<div class="divTableRow">
			<div class="divTableCell">
				<div class="divTable">
					<div class="divTableBody">
						<div class="divTableRow">
							<div class="divTableCell">لوگوي سايت</div>
						</div>
					</div>
				</div>
				<div class="divTable" style="text-align: center;">
					<div class="divTableBody">
						<div class="divTableRow">
							<div class="divTableCell"><a class="set_style_link" href="index.php">صفحه اصلي</a></div>
                    <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true) 
                         {
                    ?>
                   <div class="divTableCell"><a href="logout.php"  class="set_style_link" >خروج از سایت <?php echo(" ({$_SESSION["realname"]}) ") ?></a></div>
                    <?php
                         } // if  پایان
                        else
                         { 
                    ?>

					<div class="divTableCell"><a class="set_style_link" href="register.php">عضويت در سايت</a></div>
                    <div class="divTableCell"><a href="login.php"  class="set_style_link" >ورود به سايت</a></div>
                    <?php
                         }  //else پایان 
                    ?>						
                    
							<div class="divTableCell"><a class="set_style_link" href="#">درباره ما</a></div>
							<div class="divTableCell"><a class="set_style_link" href="contact.php">ارتباط با ما</a></div>
                     <?php
                        if (isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin") 
                         {
                    ?>
                    <div class="divTableCell"><a href="admin_products.php"  class="set_style_link" >مدیریت محصولات</a></div>                    
                    <div class="divTableCell"><a href="admin_manage_order.php"  class="set_style_link" >مدیریت سفارشات</a></div>
                    <?php
                         } // if  پایان
                    ?>
                           
                            
						</div>
					</div>
				</div>
				<div class="divTable" >
					<div class="divTableBody">
						<div class="divTableRow">
							<div class="divTableCell" style="width: 25%;" >بخش امكانات سايت</div>
							<div class="divTableCell" style="width: 75%;" >