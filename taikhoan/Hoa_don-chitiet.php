<!doctype html>
<?php
	session_start();
	$user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
	
if(isset($_SESSION['user'])){
	if(isset($_GET['mk'])){
		if((md5($user['password'])."".md5($user['name']))==$_GET['mk'])
		{
			?>
			<!-- ============================================================================================================================ -->
			<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Quản lý trang chủ</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- bootstrapW3 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/7f4a8e96ee.js" crossorigin="anonymous"></script>

    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

	<link href="assets/css_admin/quanly_trangchu.css" rel='stylesheet' type='text/css'>
    <link href="assets/css_admin/ChiTiet_hoaDon.css" rel='stylesheet' type='text/css'>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    
		<!-- MỤC MENU -->
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="../index.php" class="simple-text">
                    VỀ TRANG CHỦ
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="admin.php?mk=<?php echo md5($user['password']).md5($user['name']); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>TRANG CHỦ VÀ SẢN PHẨM </p>
                    </a>
                </li>
                <li>
                    
                    <a href="">
                        <i class="pe-7s-user"></i>
                        <p>QUẢN LÝ NGƯỜI DÙNG</p>
                    </a>
                </li>
				<li class="active">
                    <a href="Hoa_don.php?mk=<?php echo md5($user['password']).md5($user['name']); ?>">
						<i class="pe-7s-news-paper"></i>
                        <p>QUẢN LÝ HÓA ĐƠN</p>
                    </a>
                </li>
                <li>
                    <a href="gioithieu_quanLy.php?mk=<?php echo md5($user['password']).md5($user['name']); ?>">
						<i class="fa-solid fa-bars-progress"></i>
                        <p>QUẢN LÝ GIỚI THIỆU</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="pe-7s-science"></i>
                        <p>QUẢN LÝ PHẢN HỒI</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    
	<!-- QUẢN LÝ -->
	<div class="main-panel">
				<!-- HEAD -->
				<nav class="navbar navbar-default navbar-fixed">
					<div class="container-fluid">
						<div class="navbar-header">
							
							<a class="navbar-brand" href="#">Chi Tiết</a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="logout.php">
										<p>ĐĂNG XUẤT</p>
									</a>
								</li>
								<li class="separator hidden-lg"></li>
							</ul>
						</div>
					</div>
				</nav>
           <style>
              
               Table
               {
                  display: inline-block;
                  margin:50px 0px 50px 0px;
               }
               table tr th
               {
                    padding: 5px 20px;
               }
        
           </style> 
           
           <?php
                    include('../control.php');
                    $data = new data();
                    $select = $data-> select_HoaDon_chiTiet($_GET['id']);

                    foreach($select as $se)
                         {
                            
                           
                             
                     ?>
        <div id="quanly_user">
                 
            <?php
                if($se['role_hoadon']==1){
                    
                    
            ?>
             <button type="button" onclick="window.location.href='Hoa_don_role-2.php?id=<?php echo $_GET['id'] ?>'" class="btn btn-info">Gửi hàng</button>
             <?php
                }
             ?>
             <button type="button" onclick="window.location.href='Hoa_don_xoa.php?id=<?php echo $_GET['id'].'&&SDT='.$se['SDT'].'&&idramdom='.$se['id_ramdomHD'];?>'" class="btn btn-info">Xóa Đơn hàng</button>
             
             <br>
            <div id="bangThongTin_hoaDon">
                    <h3>Thông tin khách hàng</h3>
                <Table >
                    

                    
                     <tr>
                        <th>ID</th>
                        <td><?php echo $se['id_hoadon'] ?></td>
                    </tr>
                    <tr>
                        <th>Ngày mua</th>
                        <td><?php echo $se['ngaythang'] ?></td>
                    </tr>
                    <tr>
                        <th>Họ tên</th>  
                        <td><?php echo $se['hoTen'] ?></td>                      
                    </tr>
                    <tr>
                        <th>SĐT</th>
                        <td><?php echo $se['SDT'] ?></td>                        
                    </tr>
                    <tr>
                        <th>Tỉnh Thành</th> 
                        <td><?php echo $se['Tinh'] ?></td>                       
                    </tr>
                    <tr>
                        <th>Quận/Huyện</th>   
                        <td><?php echo $se['Quan'] ?></td>                     
                    </tr>
                    <tr>
                        <th>Xã/Phường</th>    
                        <td><?php echo $se['XaPhuong'] ?></td>                    
                    </tr>
                    <tr>
                        <th>Số nhà</th>   
                        <td><?php echo $se['SoNha'] ?></td>                     
                    </tr>

                      

                    <?php
                         
                        }
                    ?>
                </Table>
            </div>



             <div id="bangSanPham_hoaDon">   
                    <h3>Sản Phẩm Đặt Mua</h3>
                <Table >
                                 <tr>
                                    <th>ID SP</th>
                                    <th>Sản Phẩm</th>
                                    <th>SL</th>
                                    <th>Ảnh</th>
                                    <th>Giá</th>
                                    
                                </tr>
                     <?php
                    $tongtien=0;
                    $selectSP = $data-> select_HoaDon_chiTiet_sanpham($_GET['id']);
                    foreach($selectSP as $seSP)
                         {      
                            
                     ?>
                                
                            
                                <tr>
                                    <td><?php echo $seSP['id_SanPham'] ?></td>
                                    <td><?php echo $seSP['Ten_SanPham'] ?></td>
                                    <td><?php echo $seSP['SoLuong'] ?></td>
                                    <td><img src="../images/SanPham_anh/<?php echo $seSP['Anh_sanpham'] ?>" width="100px"></td>
                                    <td><?php echo  number_format(($seSP['Gia_moi']*$seSP['SoLuong']),'0','.','.'); ?></td>
                                </tr>


                    


                    <?php

                            
                           $tongtien=$tongtien+($seSP['Gia_moi']*$seSP['SoLuong']); 

                         }
                         echo '<b>Tổng Tiền: </b>'. number_format($tongtien,'0','.','.');
                    ?>
                </Table>
                </div>
        </div>
        
		


       


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
			<!-- ============================================================================================================================ -->
            <?php
		}
		else{
			echo "Erron";
		}
	}
	else{
		echo "Erron";
	}
}
else{
	echo "Erron";
}

?>