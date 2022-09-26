<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$updatahethang = new data();

    $updata_hethang = $updatahethang->het_hang($_GET['trangthaihethang']);
    if ($updata_hethang)
        {
            echo "<script>window.location='admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";

        }
 
?>