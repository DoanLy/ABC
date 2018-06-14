<?php
function taobang($causql)
{
$conn=mysqli_connect("localhost","root","","qlbansach");
if(!$conn)
{
  echo "khong the ket noi vao du lieu";
  exit;
}

//set utf8_decode
		mysqli_query($conn,"SET NAMES utf8");

$bang=mysqli_query($conn,$causql);
mysqli_close($conn);
return $bang;
}
?>