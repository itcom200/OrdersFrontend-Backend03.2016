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
	color: #00F;
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
.container .content #form1 table tr td label {
	color: #F00;
}
.container .content #form1 table tr td {
	color: #00F;
}
-->
</style></head>

<body>

<div class="container">
  <div class="content">
    <table width="940" border="0">
      <tr>
        <td width="26">&nbsp;</td>
        <td width="898" bgcolor="#FFCC66"><h1>สมัครสมาชิก</h1></td>
      </tr>
    </table>
    <h3>&nbsp;</h3>
    <form id="form1" name="form1" method="post" action="MB-homeAdd2.php">
      <table width="933" border="0">
        <tr>
          <td width="28">&nbsp;</td>
          <td width="101"><h4>Username</h4></td>
          <td width="10"><h4>:</h4></td>
          <td width="779"><h4>
            <label>
              <input name="username" type="text" id="username" size="20" />
              *
              <input name="accesslevel" type="text" id="accesslevel" value="User" size="2" readonly="readonly" />
            </label>
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><h4>Password</h4></td>
          <td><h4>:</h4></td>
          <td><h4>
            <input name="password" type="text" id="password" size="20" />
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><h4>Firstname</h4></td>
          <td><h4>:</h4></td>
          <td><h4>
            <input name="firstname" type="text" id="firstname" size="30" />
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><h4>Lastname</h4></td>
          <td><h4>:</h4></td>
          <td><h4>
            <input name="lastname" type="text" id="lastname" size="30" />
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><h4>Address</h4></td>
          <td><h4>:</h4></td>
          <td><h4>
            <label>
              <textarea name="Address" id="Address" cols="45" rows="5"></textarea>
            </label>
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><h4>Tel.</h4></td>
          <td><h4>:</h4></td>
          <td><h4>
            <input name="Tel" type="text" id="Tel" size="30" />
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><h4>Email</h4></td>
          <td><h4>:</h4></td>
          <td><h4>
            <input name="Email" type="text" id="Email" size="30" />
          </h4></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><h4>
            <input type="submit" name="button" id="button" value="ยืนยันการสมัครสมาชิก" />
          </h4></td>
        </tr>
      </table>
  <p>&nbsp;</p></form></div>
  <div class="footer">
    <p><a href="HOME.php">กลับสู่หน้าหลัก</a></p>
  <!-- end .footer --></div>
<!-- end .container --></div>
</body>
</html>