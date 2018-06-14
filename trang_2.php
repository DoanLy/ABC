<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cua hang Hoa Dep</title>
<style type="text/css">
<!--
.style1 {color: #FF66FF}
.style2 {
	color: #000099;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style3 {
	color: #006633;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
}
.style4 {
	font-size: larger;
	font-weight: bold;
	color: #009933;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style5 {
	color: #006633;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 16px;
}

.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
.style12 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: smaller;
	color: #009933;
	font-weight: bold;
}
.style17 {font-size: smaller}
a:link {
	color: #006633;
}
a:visited {
	color: #006633;
}
a:hover {
	color: #009900;
}
a:active {
	color: #009900;
}
-->
</style>

<script type="text/javascript">
function TimKiemHoa() {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("dvtimkiem").innerHTML = this.responseText;
		}
	};
	ten=document.getElementById("ten").value;
	xmlhttp.open("GET","TH_timkiem.php?ten="+ten, true);
	xmlhttp.send();
}
</script>

</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr bgcolor="#f4fbeb">
    <td width="21%" valign="top"><img src="hinh_anh/logobook_shoppe.png" width="277" height="83"></td>
    <td width="28%" valign="top"><table width="117%" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td><span class="style12">0969527458 </span></td>
      </tr>
      <tr>
        <td><span class="style10"> </span></td>
      </tr>
      <tr>
        <td><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" /> <a href="https://mail.google.com/mail/u/0/#inbox">14520502@gm.uit.edu.vn </a></span></td>
      </tr>
      <tr>
        <td><span class="style10"><img src="hinh_anh/online0.gif" width="18" height="18" />shoppe.com.vn</span></td>
      </tr>
    </table></td>
    <td colspan="3" valign="top">	<form name="form1" method="post" action="trang_2.php">
      <table width="100%"  border="0" cellpadding="0" cellspacing="0" bordercolor="#BBE09D">
        <tr bgcolor="#F4F8E9">
          <td colspan="2" align="center" class="style1"><span class="style4"> T&igrave;m ki&#7871;m sách</span></td>
          </tr>
        <tr>
          <td width="36%" bordercolor="#FFFFFF" bgcolor="#E8F6DC"><blockquote class="style10">
            <p>T&ecirc;n sách: </p>
          </blockquote></td>
          <td width="64%" bordercolor="#FFFFFF" bgcolor="#E8F6DC"><input name="ten" type="text" id="ten" size="30"></td>
        </tr>
        <tr>
          <td height="40" colspan="2" align="center" bgcolor="#E0F1CD">
            <input name="Submit" type="button" value="Tìm kiếm" onClick="TimKiemHoa()">         </td>
        </tr>
      </table>
    </form></td>
  </tr>
  <tr bgcolor="#F4FBEB">
    <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><table width="100%" border="0">
            <tr bgcolor="#F4FBEB">
              <td bgcolor="#C7EAB0">&nbsp;<span class="style3">Danh mục</span></td>
            </tr>
            <tr bgcolor="#F4FBEB">
              <td>&nbsp;<a href="trang_1.php" class="style10">Trang ch&#7911;</a></td>
            </tr>
            <tr bgcolor="#F4FBEB">
              <td>&nbsp;<a href="trang_2.php" class="style10">T&igrave;m ki&#7871;m sách</a></td>
            </tr>
          </table>		  </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB"><img src="hinh_anh/ba-ang-may-troi-dat-xu-beo_72312_1.jpg" width="250" height="355"></td>
      </tr>
    </table></td>
    <td colspan="3" valign="top">
	<div id="dvtimkiem"></div></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#c7eab0"><span class="style2"> <br />
    Công ty sách shoppe </span></td>
    <td valign="top" bgcolor="#c7eab0"><span class="style17"></span></td>
    <td width="27%" valign="top" bgcolor="#c7eab0"><span class="style17"></span></td>
    <td bgcolor="#c7eab0"><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" />
	    <a href="https://mail.google.com/mail/u/0/#inbox">14520502@gm.uit.edu.vn</a>
      <br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />shoppe.com.vn</span></td>
  </tr>
</table>
</body>
</html>
