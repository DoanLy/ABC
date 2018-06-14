<?php
if(isset($_REQUEST["ten"]))
  {
    $tensach=$_REQUEST["ten"];
	include_once("ketnoi.php");
	$caulenh="select * from sach where tensach like '%$tensach%'";
	$ploai= taobang($caulenh);
	$vt=0;
	echo"<table width='800px'>";
	while($sach=mysqli_fetch_array($ploai))
	{
	  if($vt%2==0)
	  echo"<tr>";
	   echo"<td>";
	     echo"<table width='400px'>";
	  		echo"<tr>";
	 	 echo"<td width='200px'>";
		  echo"<img src='hinh_anh/".$sach["hinh"]."' width='200px' height='200px'/>";
	 	 echo"</td>";
	  echo"<td>";
		  echo"<h1><b>".$sach["tensach"]."</h1></b>";
		  echo"<i>Gia Ban :</i>".number_format($sach["dongia"])." vnd<br>";
		  echo"<i>Noi dung:</i>".$sach["mota"]."<br>";
	 	 echo"<a href='trang_1.php?maloai=".$sach["maloai"]."'>Trở Về Trang Chủ</a>";
	  echo"</td>";
	  echo"</tr>";	 
	   echo"</table>";
	   echo"</td>";
	   echo"</tr>";
	}
	echo"</table>";	
  }
?>
	  