<?php
    session_start();
    $user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];

    // include('../control.php');
    // $select = new data();
    // $role = $select ->select_role_user();
    // foreach($role as $se)
    // {

     
     
            
       if($user['role']==1) //1 la admin
       {
            // echo "<script>window.location='taikhoan/admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";
         echo 'DDDDD: '.$user['role'];
        
         
       }
       else{
            // echo "<script>window.location='index.php?'</script>";
       }

    
        

?>