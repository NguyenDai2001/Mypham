<?php
    session_start();
    unset($_SESSION['giohang']);
    echo '<script>window.location="gioHang.php"</script>';
?>