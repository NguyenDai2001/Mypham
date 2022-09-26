<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$delete = new data();
$deleteSS = new data();




    $delete3 = $deleteSS->xoa_giohang3($_GET['idramdom'],$_GET['SDT']);
    
    if ( $delete3)
        {
            echo "<script>window.location='Hoa_don.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";     

        }
        
    
?>