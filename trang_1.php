<?php 
	session_start();
	if(isset($_REQUEST["thoat"]))
	{
			unset($_SESSION["makh"]);
			unset($_SESSION["tenkh"]);
			unset($_SESSION["email"]);
			unset($_SESSION["giohang"]);
			if(isset($_COOKIE["makh"]))
			{
						setcookie("makh","",time()-7*24*60*60);
						setcookie("tenkh","",time()-7*24*60*60);
						setcookie("email","",time()-7*24*60*60);
			}
			echo"<script>windows.location = 'trang_1.php'</script>";
			
	}
	if(!isset($_SESSION["makh"]))
	{
			if(isset($_COOKIE["makh"]))
			{
					$_SESSION["makh"]=$_COOKIE["makh"];
					$_SESSION["tenkh"]=$_COOKIE["tenkh"];
					$_SESSION["email"]=$_COOKIE["email"];
					echo"<script>windows.location = 'trang_1.php'</script>";
					
			}
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>shoppe</title>
<style type="text/css">
<!--
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
.style5 {
	font-size: smaller;
	font-weight: bold;
	color: #009933;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
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
.style12 {font-size: smaller}
-->
</style>

<script type="text/javascript" >
function HienThiLoaiSach(){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("dvloaihoa").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","TH_Loaisach.php",true);
	xmlhttp.send();
}

function HienThiSach(maloai) {
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("dvhoa").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET","TH_sach.php?maloai="+maloai, true);
	xmlhttp.send();
}

HienThiLoaiSach();
HienThiSach(0);
</script>

</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr bgcolor="#F4FBEB">
    <td width="21%" valign="top"><img src="hinh_anh/logobook_shoppe.png" width="277" height="99"></td>
    <td width="28%" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="2">
      <tr>
        <td><span class="style5">0969527458</span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" /><a href="https://mail.google.com/mail/u/0/#inbox">14520502@gm.uit.edu.vn</a></span></td>
      </tr>
      <tr>
        <td><span class="style10"><img src="hinh_anh/online0.gif" width="18" height="18" />shoppe.com.vn</span></td>
      </tr>
    </table></td>
    <td width="27%" valign="top">
	<?php 
	if(isset($_SESSION["makh"]))
	 include_once("TH_dangxuat.php");
	else
	 include_once("TH_dangnhap.php");
	?>	</td>
    <td width="24%" valign="top"><table width="100%" border="0">
      <tr>
        <td valign="top"><div align="center" class="style5">          Có thể thanh toán bằng</div></td>
      </tr>
      <tr>
        <td valign="top"><div align="center" class="style10">
		<img src="hinh_anh/IconCardMasterCard.gif" width="37" height="23" />
		<img src="hinh_anh/IconCardVisaE.gif" width="37" height="23" />
		<img src="hinh_anh/IconCardVisa.gif" width="37" height="23" /></div></td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top"><div align="left" class="style10"></div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#D3F4CE"><span class="style3">&nbsp;Danh mục sách</span></td>
    <td colspan="3" valign="top" background="hinh_anh/nen.jpg"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr align="center" class="style10" bgcolor="#CCFFCC">
        <td width="25%" height="23" bgcolor="#CCFFCC"><strong><a href="trang_1.php"><strong>Trang chủ</strong> </a></td>
        <td width="25%"><strong><a href="trang_2.php"><strong>Tìm kiếm sách</strong></a></td>
        <td width="25%"><strong><a href="trang_dang_ky.php">Đăng ký mới</a></strong></td>
        <td width="25%"><strong>
        <?php
			if (isset($_SESSION["makh"]))
			{
				 echo "<a href='trang_giao_hang.php?makhdonhang=".$_SESSION["makh"]."'class='style17'>Quản Lý Đơn Hàng</a>";
			}
		 ?>
        </td>
      </tr>
    </table></td>
  </tr>
  <tr bgcolor="#F4FBEB">
    <td valign="top" bgcolor="#F4FBEB"><table width="100%" border="0" cellpadding="0" cellspacing="0" background="hinh_anh/nen.jpg">
      <tr>
        <td bgcolor="#C7EAB0"><table width="100%" border="0" bgcolor="#F4FBEB">
            <tr>
              <td> <div id="dvloaihoa"></div>	</td>
            </tr>
            <tr>
              <td> <?php include_once("TH_giohang.php");?> </td>
            </tr>
            <tr>
              <td><strong><a href="th_Themloaisach.php"><strong>THÊM LOẠI SẢN PHẨM</strong></a></td>
            </tr>
          </table>		  </td>
      </tr>
      <tr>
        <td valign="bottom" bgcolor="#F4FBEB"><img src="hinh_anh/ba-ang-may-troi-dat-xu-beo_72312_1.jpg" width="250" height="355"></td>
      </tr>
    </table>    </td>
    <td colspan="4" valign="top" bgcolor="#FFFFFF">
	 <div id="dvhoa"></div>	</td>
  </tr>
  <tr>
    <td valign="top" bgcolor="#d3f4ce"><span class="style2"><br />
    Công ty sách Shoppe</span></td>
    <td valign="top" bgcolor="#d3f4ce">&nbsp;</td>
    <td valign="top" bgcolor="#d3f4ce">&nbsp;</td>
    <td bgcolor="#d3f4ce"><span class="style10"><img src="hinh_anh/IconMail.gif" width="16" height="16" /><a href="https://mail.google.com/mail/u/0/#inbox">14520502@gm.uit.edu.vn</a><br />
      <img src="hinh_anh/online0.gif" width="18" height="18" />shoppe.com.vn</span></td>
  </tr>
</table>
</body>
</html>
