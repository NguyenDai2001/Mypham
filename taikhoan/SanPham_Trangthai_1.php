<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$updataconhang = new data();

    $updata_conhang = $updataconhang->con_hang($_GET['trangthaiconhang']);
    if ($updata_conhang)
        {
            echo "<script>window.location='admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";

        }
 
?>