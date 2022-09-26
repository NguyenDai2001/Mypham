<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$updata_banchay = new data();

    $updata_thembanchay = $updata_banchay->them_banchay($_GET['thembanchay']);
    if ($updata_thembanchay)
        {
            echo "<script>window.location='admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";

        }
 
?>