<?php 
include_once("ketnoi.php");
$ploai= taobang ("select * from loaisach");
while($loai=mysqli_fetch_array($ploai))
	
	echo "<a href='#' onClick='HienThiSach(".$loai["Maloai"].")';> ".$loai["Tenloai"]."</a><br>";

?>
