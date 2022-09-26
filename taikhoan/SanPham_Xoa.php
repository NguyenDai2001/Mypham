<?php
include("../control.php");
session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
$delete_Post = new data();
$delete = $delete_Post ->delete_sanpham($_GET["deleteSanpham"]);
if ($delete)
    {
        echo "<script>window.location='admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";

    }
    else 
    {
        echo "<script>alert('xoa không thanh cong')</script>";
    }
?>