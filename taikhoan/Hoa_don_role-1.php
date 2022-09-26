<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$updata = new data();

    $updata_role = $updata->updata_role_1($_GET['id']);
    if ($updata_role)
        {
            echo "<script>window.location='Hoa_don-chitiet.php?id=$_GET[id]&&mk=".md5($user['password'])."".md5($user['name'])."'</script>";

        }
 
?>