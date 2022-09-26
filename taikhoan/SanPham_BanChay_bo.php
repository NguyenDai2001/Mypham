<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$updata_banchay2 = new data();

    $updata_bobanchay = $updata_banchay2->xoa_banchay($_GET['bobanchay']);
    if ($updata_bobanchay)
        {
           
            echo "<script>window.location='admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";

        }
 
?>