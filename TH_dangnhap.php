<?php
    if(isset($_POST["ten_dn"]))
	{
		$tendn = $_POST["ten_dn"];
		$matkhau = $_POST["mat_khau"];
		$caulenh = "select * from khachhang where tendn = '$tendn' and matkhau = '$matkhau'";
		include_once("ketnoi.php");
		$bangkh = taobang($caulenh);
		if(mysqli_num_rows($bangkh)>0)
		{
				$kh = mysqli_fetch_array($bangkh);
				$_SESSION["makh"] =$kh["Makh"];
				$_SESSION["tenkh"] = $kh["HoTen"];
				$_SESSION["email"] = $kh["Email"];
				if(isset($_POST["chkluu"]))
				{
						setcookie("makh",$kh["Makh"],time()+7*24*60*60);
						setcookie("tenkh",$kh["HoTen"],time()+7*24*60*60);
						setcookie("email",$kh["Email"],time()+7*24*60*60);
				}
			 echo"<script> window.open(location.reload(true)) </script>";
		}
		else 
		echo "<script>alert('thông tin đăng nhập sai');</script>";
	}
?>
<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>

<table width="300" border="0" cellpadding="0" cellspacing="2">
      <form id="form1" name="form1" method="post" action="trang_1.php">
	  <tr>
        <td colspan="2"><div align="center" class="style5">          Đăng nhập</div></td>
        </tr>
      <tr>
        <td width="46%"><p class="style10 style1">Tên đăng nhập: </p></td>
        <td width="54%"><span class="style10">
          <label>
            <input name="ten_dn" type="text" id="ten_dn" size="15" />
        </label>
        </span> </td>
      </tr>
      <tr>
        <td><p class="style10"><span class="style1">Mật khẩu: </span></p></td>
        <td><span class="style10">
          <label>
            <input name="mat_khau" type="password" id="mat_khau" size="15" />
        </label>
          </br>
          <span class="style1">
          <input name="chkluu" type="checkbox" id="chkluu" />
          <label for="chkluu">Lưu thông tin</label>
          </span></span></td>
      </tr>
      </tr>
        <td colspan="2"><div align="center">
          <label>
          <input type="submit" name="Submit" value="Đăng nhập" />
          </label>
        </div></td>
  </form>
</table>
</td>
