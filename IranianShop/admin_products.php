<?php
include ("includes/header.php");
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] ==
    "admin")) {
?>
<script type="text/javascript">
<!--
location.replace("index.php");	 // منتقل شود index.php به صفحه
-->
</script>
<?php
} // if پایان

$link = mysqli_connect("localhost", "root", "vertrigo", "shop_db");  // اتصال به پايگاه داده shop_db

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$url = $pro_code = $pro_name = $pro_qty = $pro_price = $pro_image = $pro_detail = "";

$btn_caption="افزودن كالا";
if (isset($_GET['action']) && $_GET['action'] == 'EDIT') {
    $id = $_GET['id'];
    $query = "SELECT * FROM products WHERE pro_code='$id'";
    $result = mysqli_query($link, $query);
    if ($row = mysqli_fetch_array($result)) {
        $pro_code = $row['pro_code'];
        $pro_name = $row['pro_name'];
        $pro_qty = $row['pro_qty'];
        $pro_price = $row['pro_price'];
        $pro_image = $row['pro_image'];
        $pro_detail = $row['pro_detail'];
        $url = "?id=$pro_code&action=EDIT";
        $btn_caption="ويرايش كالا";

    }
		
}
?>

  <br />
  <form name="add_product" action="action_admin_products.php<?php if (!empty($url)) echo($url); ?>"  method="POST" enctype="multipart/form-data" >
    <table style="width: 100%;" border="0"  style="margin-left: auto;margin-right: auto;"  >
                         
    <tr>
       <td style="width: 22%;">کد کالا <span style="color: red;">*</span></td>
       <td style="width: 78%;"><input type="text" id="pro_code" name="pro_code" value="<?php echo ($pro_code) ?>"    /></td>
    </tr>
                          
    <tr>
       <td>نام کالا <span style="color: red;">*</span></td>
       <td><input type="text" style="text-align: right;" id="pro_name" name="pro_name" value="<?php echo ($pro_name) ?>"   /></td>
    </tr>
                         
    <tr>
       <td>موجودی کالا <span style="color: red;">*</span></td>
       <td><input type="text" style="text-align: left;" id="pro_qty" name="pro_qty" value="<?php echo ($pro_qty) ?>"   /></td>
    </tr>
                         
    <tr>
       <td>قیمت کالا <span style="color: red;">*</span></td>
       <td><input type="text" style="text-align: left;" id="pro_price" name="pro_price" value="<?php echo ($pro_price) ?>"   />ریال</td>
    </tr>
                         
    <tr>
       <td>آپلود تصویر کالا <span style="color: red;">*</span></td>
       <td><input type="file" style="text-align: left;" id="pro_image" name="pro_image"  size="30" />
       <?php if (!empty($pro_image))
    echo ("<img src='images/products/$pro_image' width='80' height='40' />"); ?>
       </td>
    </tr>
                         
    <tr>
       <td>توضیحات تکمیلی کالا <span style="color: red;">*</span></td>
       <td><textarea id="pro_detail" name="pro_detail" cols="45" rows="10" wrap="virtual"  >
       	<?php echo ($pro_detail) ?>
       </textarea></td>
    </tr>
                         
    <tr>
       <td><br /><br /></td>
       <td><input type="submit" value="<?php echo ($btn_caption) ?>" />&nbsp;&nbsp;&nbsp;<input type="reset" value="جديد" /></td>
    </tr>
                         
   </table>
  </form>
                    
<?php

$query = "SELECT * FROM products";
$result = mysqli_query($link, $query);

?>

<table border="1px" style="width: 100%;" >
<tr>
	<td>كد كالا</td>
	<td>نام كالا</td>
	<td>موجودي كالا</td>
	<td>قيمت كالا</td>
	<td>تصوير كالا</td>
	<td>ابزار مديريتي</td>
</tr>

<?php
while ($row = mysqli_fetch_array($result)) {
?>
<tr>
	<td><?php echo ($row['pro_code']) ?></td>
	<td><?php echo ($row['pro_name']) ?></td>
	<td><?php echo ($row['pro_qty']) ?></td>
	<td><?php echo ($row['pro_price']) ?>&nbsp; ريال</td>
	<td><img src="images/products/<?php echo ($row['pro_image']) ?>" width="150px" height="50px" /></td>
	<td>
     <b><a href="action_admin_products.php?id=<?php echo ($row['pro_code']) ?>&action=DELETE" style="text-decoration: none;">حذف</a></b>    
     &nbsp;|&nbsp;
     <b><a href="admin_products.php?id=<?php echo ($row['pro_code']) ?>&action=EDIT" style="text-decoration: none;">ويرايش</a></b>    
    </td>
</tr>
<?php
} //while
?>

</table>



<?php
include ("includes/footer.php");
?>
   
