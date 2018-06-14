<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Them loai sach</title>
</head>

<body>
<?php
	if(isset($_POST["txttenloai"])){
		$tenloai=$_POST["txttenloai"];
		$caulenh="insert into loaisach(Tenloai) value ('$tenloai') ";
		include_once("ketnoi.php");
		if(taobang($caulenh)==1)
			echo "Thêm thành công";
		else
			echo "Lỗi";
	}
?>
	<form id= "form1" name="form1" method ="post">
		<table width="80%" border="0" cellspacing="0" cellspacing="0">
			<tbody>
				<tr>
					<td width="27%">Tên loại</td>
					<td width="73%"><input type ="text" name="txttenloai" id="txttenloai"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td><input type="submit" name="button" id="button" value="Ghi"></td>
				</tr>
			</tbody>
		</table>
	</form>

</body>