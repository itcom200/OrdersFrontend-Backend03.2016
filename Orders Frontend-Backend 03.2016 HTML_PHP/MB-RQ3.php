<?php require_once('Connections/conpro.php'); ?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";


function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  
  $isValid = False; 

  if (!empty($UserName)) { 
   
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
   
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "MB-home.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_conpro, $conpro);
$query_Recordset1 = "SELECT * FROM dbmembers_order  WHERE username='$MM_Username'";
$Recordset1 = mysql_query($query_Recordset1, $conpro) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
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
	text-align: left;
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
	text-align: left;
}

/* ~~ this fixed width container surrounds all other elements ~~ */
.container {
	width: 960px;
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ This is the layout information. ~~ 

1) Padding is only placed on the top and/or bottom of the div. The elements within this div have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

*/
.content {
	padding: 10px 0;
	text-align: left;
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
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.container .content table tr th {
	text-align: center;
}
.container .content table {
	text-align: left;
}
.container .content h2 {
	text-align: left;
}
#apDiv1 {
	position:absolute;
	left:520px;
	top:93px;
	width:236px;
	height:142px;
	z-index:1;
}
#apDiv2 {
	position:absolute;
	left:155px;
	top:99px;
	width:346px;
	height:35px;
	z-index:2;
}
-->
</style>
</head>

<body>
<div class="container">
  <div class="content">
<table width="960" border="0">
      <tr>
        <td width="78"><a href="HOME.php"><img src="Image/honda.png" alt="" width="199" height="71" /></a></td>
        <td width="282"><h5><a href="MB-RQ1.php">RESERVATIONS OF QUEUE</a></h5></td>
        <td width="183"><h5><a href="MB-PC1.php">POST  COMMENT</a></h5></td>
        <td width="198"><h5><a href="VE-BB.php" target="new">BULLETIN BOARD</a></h5></td>
        <td width="197"><h5 align="left"><a href="VE-CH.php" target="new">CONTACT HONDA</a></h5></td>
      </tr>
    </table>
<p>
<p>
<table width="957" border="1">
  <tr><?php
  
  
  		mysql_select_db($database_conpro, $conpro);
$query_Recordset2 = "SELECT * FROM dbmembers_order  WHERE username='$MM_Username' 
and Status!='เสร็จสิ้น' ";

$Recordset2 = mysql_query($query_Recordset2, $conpro) or die(mysql_error());
$row_Recordset2 = mysql_fetch_assoc($Recordset2);
$totalRows_Recordset2 = mysql_num_rows($Recordset2);



  
  do {
		  $q2 = $row_Recordset2['mbOrderID'];
		
 ?>
    <td colspan="2" bgcolor="#66FFCC">#<?php 
	$q2 = $row_Recordset2['mbOrderID'];
	mysql_select_db($database_conpro, $conpro);
$query_Recordset3 = "SELECT * FROM dbmembers_orders_detail  WHERE mbOrderID='$q2'";
$Recordset3 = mysql_query($query_Recordset3, $conpro) or die(mysql_error());
$row_Recordset3 = mysql_fetch_assoc($Recordset3);
$totalRows_Recordset3 = mysql_num_rows($Recordset3);

echo $row_Recordset3['mbOrderID']; 

 ?>
 </td>
    </tr>
  <tr>
    <td width="137" bgcolor="#FFFFCC">วันที่นัดหมาย   <?php echo $oopio=$row_Recordset2['MembersDate']; ?></td>
    <td width="804">วันที่ลงทะเบียน :<?php echo $row_Recordset2['mbOrderDate']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">ผู้ใช้</td>
    <td><?php echo $row_Recordset2['username']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">ชื่อผู้ส่งซ่อม</td>
    <td><?php echo $row_Recordset2['Name']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">ที่อยู่</td>
    <td><?php echo $row_Recordset2['Address']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">อีเมล์</td>
    <td><?php echo $row_Recordset2['Email']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">สถานะ</td>
    <td><?php echo $row_Recordset2['Status']; ?></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#66FFCC">#<?php echo $row_Recordset3['mbProductID']; 
	
	$pa1=$row_Recordset3['mbProductID']; 
	
	mysql_select_db($database_conpro, $conpro);
$query_Recordset4 = "SELECT * FROM dbmembers_product  WHERE mbProductID='$pa1'";
$Recordset4 = mysql_query($query_Recordset4, $conpro) or die(mysql_error());
$row_Recordset4 = mysql_fetch_assoc($Recordset4);
$totalRows_Recordset4 = mysql_num_rows($Recordset4);
	
	 ?> </td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">ปัญหา</td>
    <td><?php echo $row_Recordset4['mbDetail']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">สาเหตุ*1</td>
    <td><?php echo $row_Recordset4['M1']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">สาเหตุ*2</td>
    <td><?php echo $row_Recordset4['M2']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">สาเหตุ*3</td>
    <td><?php echo $row_Recordset4['M3']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">สาเหตุ*4</td>
    <td><?php echo $row_Recordset4['M4']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">สาเหตุ*5</td>
    <td><?php echo $row_Recordset4['M5']; ?></td>
    </tr>
  <tr>
    <td bgcolor="#FFFFCC">ค่าบริการ</td>
    <td><?php echo $row_Recordset4['mbPrice']; ?></td>
    </tr>
  <tr>
    <td colspan="2" bgcolor="#0000FF">&nbsp;</td>
    </tr>
  <?php } while ($row_Recordset2 = mysql_fetch_assoc($Recordset2)); ?>
</table>
<p>
  </div>
  <table width="488" border="0">
    <tr>
      <td width="138"><h5><a href="MB-logout.php">Log Out</a></h5></td>
      <td width="183"><h5><a href="MB-changepassword.php">Change Password</a></h5></td>
      <td width="153"><h5><a href="MB-RQ3.php">Repair Status</a></h5></td>
    </tr>
  </table>
</div>
</body>
<?php
mysql_free_result($Recordset1);
?>

</html>
