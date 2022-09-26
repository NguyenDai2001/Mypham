<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$delete = new data();

    $delete2 = $delete->xoa_donhang($_GET['id']);


    
    if ($delete2)
        {
            echo "<script>window.location='Hoa_don_xoa-giohang3.php?id=".$_GET['id']."&&SDT=".$_GET['SDT']."&&idramdom=".$_GET['idramdom']."'</script>";

        }
    
?>