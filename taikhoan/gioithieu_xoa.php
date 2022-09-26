<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$delete_Post = new data();
$delete = $delete_Post ->delete_gioithieu($_GET["deletegioithieu"]);
if ($delete)
    {
        echo "<script>window.location='gioithieu_quanly.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";

    }
 
?>