<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<form id="form1" name="form1" method="post" action="">
<script language="javascript" type="text/javascript">
function thongbao()
{
	return confirm("Bạn có muốn xóa không");
}
</script>
<?php
	$tongtien=0;
	$giohang=array();
	if(isset($_SESSION["giohang"]))
	{
			$giohang = $_SESSION["giohang"];
			if(isset($_REQUEST["mabanhxoa"]))
			{
				unset($giohang[$_REQUEST["mabanhxoa"]]);
				$_SESSION["giohang"] = $giohang;
			}
	if(isset($_POST["capnhat"]))
	{
		foreach($giohang as $m =>$sach)
		{
			if(is_long($_POST["sl$m"]*1)&& $_POST["sl$m"]*1>0)
			{
				$sach["soluong"]=$_POST["sl$m"];
				$giohang[$m] =$sach;
			}
		}
		$_SESSION["giohang"]= $giohang;
	}
	if(isset($_POST["muahang"]))
	{
		if(isset($_SESSION["makh"]))
		{
			$thongtin = "" ;
			include_once("ketnoi.php");
			$ngaydh = date("Y-m-d");
			$diachi =$_POST["diachigh"];
			$makh = $_SESSION["makh"];
			$thongtin = "<p align='center' style='font-size:20px'> Hóa Đơn Mua Hàng<br>Ngày Mua : $ngaydh</br> Khách hàng".$_SESSION["tenkh"]."</p><table><tr>
			<td>STT</td> 
					<td>Tên hàng</td>
					<td>Số lượng</td>
					<td>Đơn giá</td>
					<td>Thành tiền</td></tr>";

			$caulenh = "insert into dondh(makh,ngaydh,Dia_chi)
			value('$makh', '$ngaydh','$diachi')";
			taobang($caulenh);
			$caulenh="select max(sodh) as sodhthem from dondh";
			$bangdh = taobang($caulenh);
			$donhang= mysqli_fetch_row($bangdh);
			$sodh = $donhang[0];
			$caulenh="insert into ctdondh(sodh,masach,soluong,dongia)value";
			$stt = 1;
			foreach($giohang as $m => $sach)
			{
			$caulenh.="($sodh,$m,".$sach["soluong"].
			",".$sach["dongia"]."),";
			$thongtin = "<tr><td>$stt</td><td>".$sach["tensach"]."</td>
			<td>".$sach["soluong"]."</td><td>".$sach["dongia"]."</td><td>".number_format($sach["soluong"]*$sach["dongia"])."</td></tr>";
			$tongtien+=$sach["soluong"]*$sach["dongia"]; 
			$stt++;
			}
			$thongtin.="<tr><td colspan='5' align='right'>Tổng tiền:".number_format($tongtien)."Vnđ</td></tr></table>";
			$caulenh=substr($caulenh,0,strlen($caulenh)-1);
			taobang($caulenh);
			unset($giohang);
			unset($_SESSION["giohang"]);
			 echo"<script>alert('Bạn Đã Đặt Hàng Thành Công , Xin vui lòng trở lại Trang Chủ');</script>";			
		}
		else 
		echo "<script>alert('Bản phải đăng nhập trước khi mua hàng');</script>";
	}	
		if(isset($giohang))
		{
			if(count($giohang)>0)
			{
					$stt = 1;
					$tongtien = 0;
					echo"<table width='100%' border='1' cellpadding='0' cellspacing='0'>";
					echo"<tr><td width='10%'>STT</td>
					<td width='45%'>Tên Hàng</td> 
					<td width='10%'>SL</td>
					<td width='15%' >ĐG</td>
					<td></td></tr>";
					  foreach($giohang as $m=>$sach)
					  {
						  	echo "<tr><td>$stt</td>
							<td>".$sach["tensach"]."</td>
							<td>
							<input type='text' size='2'
							name='sl$m' id='sl$m'
							value='".$sach["soluong"]."'>
							<td>".number_format($sach["dongia"])."</td>
							<td>
							  <a href='trang_1.php?mabanhxoa=$m'
							  onclick='return thongbao();'>Xóa</a> </td>
							  </tr>";
							$stt ++ ;
							$tongtien+=$sach["soluong"]*$sach["dongia"];
					  }
					  echo" <tr>
    <td colspan='5' align=
    'right'>Tổng tiền :".number_format($tongtien)."vnđ
	</td>  </tr> ";
	echo "<tr> <td colspan='5' align='right'><input type='submit' name='capnhat' value='Cập Nhật'> </td></tr>";

	echo "<tr> <td></td> <td>Địa chỉ: </td> <td colspan='5' align='right'><input type='text' size='30'  name='diachigh' id='diachigh'> </td></tr>";
	echo "<tr> <td colspan='5' align='right'><input type='submit' name='muahang' id='muahang' value='Mua Hàng'> </td></tr>";
					  
					  echo"</table>";	
			}	
			}
	}
	
?>
</form>