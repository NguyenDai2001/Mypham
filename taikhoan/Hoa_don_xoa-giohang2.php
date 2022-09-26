<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];

    

    foreach($select as $se){
        
            echo "<script>window.location='Hoa_don_xoa-giohang3.php?mk=".md5($user['password'])."".md5($user['name'])."&&SDT=".$se['id_SDT']."&&ngaythang=".$se['id_ngaythang']."'</script>";      
    }
?>