<?php
include("../control.php");
$delete_Post = new data();
$delete = $delete_Post ->delete_user($_GET["deleteUser"]);
if ($delete)
    {
        echo "<script> window.location='user_quaLy.php'</script>";

    }
 
?>