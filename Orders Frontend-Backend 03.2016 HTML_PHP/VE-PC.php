<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}
/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds the other divs ~~ */
.container {
	width: 960px;
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
.header {
	background-color: #ADB96E;
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/

.content {

	padding: 10px 0;
}

/* ~~ The footer ~~ */
.footer {
	padding: 10px 0;
	background-color: #CCC49F;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>

<div class="container">
  <div class="content">
    <ul id="MenuBar1" class="MenuBarHorizontal">
      <li><a href="MB-home1.php">สมาชิก</a></li>
      <li><a href="VE-product.php">บริการ</a></li>
      <li><a href="VE-D.php">ตัวแทน</a></li>
      <li><a href="VE-AU.php">เกี่ยวกับเรา</a></li>
    </ul>
    <p>&nbsp;</p>
    <table width="961" border="0">
      <tr>
        <td width="199"><a href="HOME.php"><img src="Image/honda.png" alt="" width="199" height="71" /></a></td>
        <td width="182"><a href="HomeVE.php"><img src="Image/HomeVW.png" width="191" height="69" /></a></td>
        <td width="179"><a href="VE-PC.php"><img src="Image/Comments.png" width="181" height="67" /></a></td>
        <td width="186"><a href="VE-BB.php"><img src="Image/Bulletin.png" width="185" height="69" /></a></td>
        <td width="193"><a href="VE-CH.php"><img src="Image/contact.png" width="182" height="67" /></a></td>
      </tr>
    </table>
    <h1><?php 
 //คำสั่งเชื่อมต่อฐานข้อมูล
 $con=mysql_connect("localhost","root","1234") 
or die ("ไม่สามรถเชื่อมต่อได้".mysql_error());
mysql_db_query("pro","SET NAMES UTF8");
//ดึงข้อมูลทั้งหมด
$sql="select* from dbpost";
//รัน query
$result=mysql_query($sql)
//ดักเอ๋อเร๋อ
or die ("select error".mysql_error());
while($rs=mysql_fetch_array($result))
{
 ?>&nbsp;</h1>
    <table width="960" height="167" border="0">
      <tr>
        <td><table width="892" height="293" border="0">
          <tr>
            <td width="47" height="32"><h3>&nbsp;</h3></td>
            <td width="163" bgcolor="#FFFF99"><h3>ผู้โพส </h3></td>
            <td width="668" bgcolor="#FFFF99"><p><?php $rs["postID"]?><?php echo $rs["UserLogin"]?></p></td>
          </tr>
          <tr>
            <td height="81"><h3></h3>
              <h3>&nbsp;</h3></td>
            <td bgcolor="#FFFF99"><h3>หัวข้อกระทู้ </h3></td>
            <td bgcolor="#FFFF99"><p><?php echo $rs["Heading"]?></p></td>
          </tr>
          <tr>
            <td height="172">&nbsp;</td>
            <td bgcolor="#FFFF99"><h3>รายละเอียด </h3></td>
            <td bgcolor="#FFFF99"><p><?php echo $rs["fine"]?></p></td>
          </tr>
        </table></td>
      </tr>
    </table><?php }?>
    <h1>&nbsp;</h1>
  <!-- end .content --></div>
  <div class="footer">
    <p>&nbsp;</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
