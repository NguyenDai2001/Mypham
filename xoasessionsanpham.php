<?php
	session_start();
	

	for ($i=0;$i<count($_SESSION['giohang']);$i++){

		if($_GET['deleteId']==$_SESSION['giohang'][$i][4]&&$_GET['Id']==$i){

			array_splice($_SESSION['giohang'],$i,1);
			
			echo '<script>window.location="gioHang.php"</script>';
			unset($_SESSION['SoLuong22']);
			unset($_SESSION['SoLuong33']);


		
		}
		
		
		
	}
	
?>
