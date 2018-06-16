<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
if(isset($_REQUEST["masach"]))
  {
    $masach=$_REQUEST["masach"];
	include_once("ketnoi.php");
	$caulenh="select*from sach where masach=$masach";
	$ploai= taobang ($caulenh);
	echo"<table width='600px'>";
	while($sach=mysqli_fetch_array($ploai))
	{
	  echo"<tr>";
	 	 echo"<td width='200px'>";
		  echo"<img src='hinh_anh/".$sach["hinh"]."' width='200px' height='200px'/>";
	 	 echo"</td>";
	  echo"<td>";
		  echo"<h1><b>".$sach["tensach"]."</h1></b>";
		  echo"<i>Gia Ban :</i>".number_format($sach["dongia"])." vnd<br>";
		  echo"<i>Thanh Phan gia Chinh :</i>".$sach["mota"]."<br>";
	 	 echo"<a href='trang_1.php?maloai=".$sach["maloai"]."'>Về Trang Chủ</a>";
	  echo"</td>";
	  echo"</tr>";	  
	}
	echo"</table>";	
  }
?>