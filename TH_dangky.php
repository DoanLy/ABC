<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" type="text/javascript">
function KiemTra()
{
	loi="";
	if(document.getElementById("ten_dn").value=="")
		loi="Phải Nhập Tên Đăng Nhập";
	if(document.getElementById("mat_khau").value=="")
		loi+="\nPhải Nhập Mật Khẩu";
	if(document.getElementById("mat_khau").value!=document.getElementById("mat_khau1").value)
		loi+="\nPhải Nhập Mật Khẩu và Phải giống Mật Khẩu Trên";
	if(document.getElementById("ho_ten").value=="")
		loi+="\nPhải Nhập Họ Tên";
	if(document.getElementById("email").value=="")
		loi+="\nPhải Nhập Email";
	if(loi=="")
	return true;
	else {alert(loi);return false;}
	}
</script>
<?php
if(isset($_POST["ten_dn"]))
{
	$loi="";
	include_once("ketnoi.php");
	$tendn=$_POST["ten_dn"];
	$bangkh=taobang("select tendn from khachhang where tenDN='$tendn'");
	if(mysqli_num_rows($bangkh)>0)
		$loi="$tendn Đã Tồn Tại";
		
	$email=$_POST["email"];
	$bangkh=taobang("select email from khachhang where email='$email'");
	if(mysqli_num_rows($bangkh)>0)
		$loi+="\n$email da co";
	if($loi!="")
	echo"<script>alert('$loi');</script>";
	else
	{
	$matkhau=$_POST["mat_khau"];
	$hoten=$_POST["ho_ten"];
	$diachi=$_POST["dia_chi"];
	$dienthoai=$_POST["so_dt"];
	$caulenh="insert into khachhang(tendn,matkhau,hoten,diachi,dienthoai,email) value('$tendn','$matkhau','$hoten','$diachi','$dienthoai','$email')";
	taobang($caulenh);
	$caulenh="select Max(Makh) as khmoi from khachhang";
	$bangkh=taobang($caulenh);
	$kh=mysqli_fetch_row($bangkh);
	$_SESSION["makh"]=$kh[0];
	$_SESSION["tenkh"]=$hoten;
	$_SESSION["email"]=$email;
	echo"<script>alert('Bạn Đã Đăng Ký Thành Công');</script>";
	}
}
?>