<?php

session_start();
    $user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
	// session_destroy();
	

include("../control.php");
$delete_Post = new data();
$delete = $delete_Post ->delete_giothang($_GET["delete_giothang"]);
if ($delete)
    {
        echo '<script> window.location="../gioHang.php?id_user='.$user['id_user'].'"</script>';

    }
    else 
    {
        echo "<script>alert('xoa không thanh cong')</script>";
    }
?>