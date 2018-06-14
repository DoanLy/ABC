<?php
				session_start();
				if(isset($_REQUEST["masach"]))
	{
					$giohang = $_SESSION["giohang"];
					$masach =  $_REQUEST["masach"];
					if(isset($giohang[$masach]))
					{
								$sach =$giohang[$masach];
								$sach["soluong"]++;
								$giohang[$masach]=$sach;
							}
					else
					{
						$sach = array("tensach"=>$_REQUEST["tensach"],"dongia"=>$_REQUEST["dongia"],"soluong"=>1);
						$giohang[$masach] = $sach;
					}
					$_SESSION["giohang"] = $giohang ;
					echo"<script>window.location = 'trang_1.php?maloai=".$_REQUEST["maloai"]."';</script>";
			
	}
?>