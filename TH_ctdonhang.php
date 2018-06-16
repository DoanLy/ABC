<?php
include_once("ketnoi.php");
if(isset($_REQUEST["chitiet"]))
{
	$sodh=$_REQUEST["chitiet"];
	echo"<p align='center' style='font-size:24'> Chi Tiết Đơn Hàng $sodh</p>";
	$caulenh="select ctdondh.*,tensach from ctdondh join sach on ctdondh.masach=sach.masach where sodh=$sodh ";
	echo"<table width='100%' border='1' cellpadding='0' cellspacing='0'><tr><td width='5%'>STT</td><td width='30%'>Tên Sách</td><td width='10%'>Số Lượng</td><td width='10%'>Đơn Giá</td></tr>";
	$bangct=taobang($caulenh);
	$stt=1;
	$tongtien=0;
	while($ct=mysqli_fetch_array($bangct))
	{
		$tenbanh=$ct["tensach"];
		$dg=$ct["Dongia"];
		$sl=$ct["Soluong"];
		$tt=$sl*$dg;
		$tongtien+=$tt;
		echo"<tr><td>$stt</td><td>$tenbanh</td><td>$sl
		</td><td>$dg</td><td>".number_format($tt)."</td></tr>";
		
	}
	echo"<tr><td colspan='5' align='right'>Tổng Tiền:".number_format($tongtien)." vnd</td></tr></table>";
}

?>