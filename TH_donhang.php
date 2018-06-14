<script language="javascript" type="text/javascript">
function ThongBao()
{
	return confirm('Bạn Có muốn Xóa Không ???');
}
</script>
<?php
include_once("ketnoi.php");
if(isset($_REQUEST["xoadonhang"]))
{
	$sodhxoa=$_REQUEST["xoadonhang"];
	$caulenh="delete  from ctdondh where sodh=$sodhxoa";
	taobang($caulenh);
	$caulenh="delete  from dondh where sodh=$sodhxoa";
	taobang($caulenh);
	echo"<script>alert('Đã Xóa Đơn Hàng $sodhxoa')</script>";
	echo"<script>window.location = 'trang_giao_hang.php?makhdonhang=".$_SESSION["makh"]."';</script>";
}
echo"<script>windows.location = 'trang_1.php'</script>";
if(isset($_REQUEST["makhdonhang"]))
{
	$makh=$_REQUEST["makhdonhang"];
$bangdonhang=taobang("select dondh.*,HoTen from dondh join khachhang on dondh.Makh=khachhang.Makh where khachhang.makh=$makh");
echo"<table width='100%' border='1' cellpadding='0' cellspacing='0'";
echo"<tr><td width='10%'>STT</td><td width='20%'>Họ Tên</td><td width='20%'>Ngày ĐH</td><td width='30'>Địa Chỉ Giao Hàng</td><td>Trạng Thái</td></tr>";
$stt=1;
while($donhang=mysqli_fetch_array($bangdonhang))
{
	echo"<tr><td>$stt</td><td>".$donhang['HoTen']."</td><td>".$donhang['Ngaydh']."</td><td>".$donhang['Dia_chi']."</td>";
	if($donhang["dagiao"]==1)
	echo"<td>Đã Giao <a href='trang_dat_hang.php?chitiet=".$donhang['Sodh']."&&makhdonhang=$makh'>Chi Tiết</a>";
	else
	echo"<td><a href='trang_giao_hang.php?chitiet=".$donhang['Sodh']."&&makhdonhang=$makh'>Chi Tiết</a><a href ='trang_giao_hang.php?xoadonhang=".$donhang['Sodh']."' onClick='return ThongBao();'>Xóa</td></tr>";
	$stt++;
}
echo"</table>";
}
if(isset($_REQUEST["chitiet"]))
{
	include_once("TH_ctdonhang.php");
}
?>