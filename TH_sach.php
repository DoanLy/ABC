<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include_once("ketnoi.php");
$maloai=1;
if(isset($_REQUEST["maloai"]))
{
 	$maloai=$_REQUEST["maloai"];
} 
if ($maloai==0)
{
	$ploai=taobang("select * from sach");
} else 
{
	$ploai=taobang("select * from sach where maloai = $maloai");
}
echo "<table width='100%'>";
$vt=0;
while ($loaisach=mysqli_fetch_array($ploai))
{
 if($vt%4==0)
	echo "<tr>";
	echo "<td width='25%'> <a href='trang_chi_tiet_sach.php?masach=".$loaisach["masach"]."' ><img src='hinh_anh/".$loaisach["hinh"]."'width='150px' heigh='150px'/></a><br>";
	echo $loaisach["tensach"]."<a href = 'TH_xlgiohang.php?masach=".$loaisach["masach"]."&&maloai=".$loaisach["maloai"]."&&tensach=".$loaisach["tensach"]."&&dongia=".$loaisach["dongia"]."'><br><img src='hinh_anh/gio_hang.jpg'/></a><br>";
	echo "<i> Đơn Giá </i>".number_format($loaisach["dongia"])."VND </td>";
	$vt++;
    if($vt%4==0)
   echo "</tr>";
}
echo"</table>";

?>
