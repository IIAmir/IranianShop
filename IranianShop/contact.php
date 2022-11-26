<?php
include ("includes/header.php");
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
<script type="text/javascript">
<!--
location.replace("index.php");	 // منتقل شود index.php به صفحه
-->
</script>
<?php
} // if پایان

$link = mysqli_connect("localhost", "root", "vertrigo", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
$result = mysqli_query($link, $query);
if ($row = mysqli_fetch_array($result)) {

    $realname = $row['realname'];
    $email = $row['email'];
}


?>

  <br />
  <form name="contact" action="action_contact.php"  method="POST"  >
    <table style="width: 100%;" border="0"  style="margin-left: auto;margin-right: auto;"  >
                         
    <tr>
       <td style="width: 22%;">نام و نام خانودگي  <span style="color: red;">*</span></td>
       <td style="width: 78%;"><input type="text" id="realname" name="realname" value="<?php echo ($realname) ?>"  /></td>
    </tr>
                          
    <tr>
       <td>آدرس پست الكترونيك <span style="color: red;">*</span></td>
       <td><input type="text" style="text-align: right;" id="email" name="email" value="<?php echo ($email) ?>"  /></td>
    </tr>
                         
                         
    <tr>
       <td>متن پيام <span style="color: red;">*</span></td>
       <td><textarea id="detail" name="detail" cols="45" rows="10" wrap="virtual"  ></textarea></td>
    </tr>
                         
    <tr>
       <td><br /><br /></td>
       <td><input type="submit" value="ارسال" />&nbsp;&nbsp;&nbsp;<input type="reset" value="جديد" /></td>
    </tr>
                         
   </table>
  </form>
                    


<?php
include ("includes/footer.php");
?>
   
