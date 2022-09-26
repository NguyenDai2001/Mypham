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
                <li class="active">
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
				<li>
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
							
							<a class="navbar-brand" href="#">QUẢN LÝ TRANG CHỦ VÀ SẢN PHẨM</a>
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

		<form method="post" enctype="multipart/form-data">	
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card">

								<div class="header">
									<h4 class="title">QUẢN LÝ SLIDE TRANG CHỦ</h4>
								
								</div>
								<div class="content">
											<div class="nut_quanly">
												
												<a href="#"  class="btn btn-info btn-lg">
													<span class="glyphicon glyphicon-plus-sign"></span> <input type="submit" name ="themslide" value="Thêm">
												</a>
												<input type="file" name="hinhanh" id="upanh">
												<?php 
													include("../control.php");
													$insert = new data();

													if(isset($_POST['themslide'])&&($_POST['themslide']))
													{
														$uphinh = basename($_FILES['hinhanh']['name']);
														$target_dir = "../images/TrangChu_slider/";
														$target_file = $target_dir . $uphinh;
														if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file))
														{
																echo "up file thành công";
														}

														$anh_slider=$uphinh;
														$upanh=$insert->insert_anh($anh_slider);


													}
													echo $user['name'];
												?>
											</div>




											<div class="quanly_slider">
														<table>
															<tr>
																<th><h5>Hình ảnh</h5></th>
																<th><h5>Xóa</h5></th>
															
															
															</tr>
															<?php
																
																$insert = new data();
																$selectslide = $insert->select_slide();
																 
																foreach($selectslide as $se)
																{

																	echo '
																	<tr>
																		<td align="center" > <img src="../images/TrangChu_slider/'.$se['name_slider'].'" width="100px"></td>
																		<td align="center" > <button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash"></span> <a href="xoaSlide.php?delete='.$se['id_slider'].'">Xóa</a></button> </td>
																	</tr>
																	';
																}

															?>
																	
																	

															
															
															
														</table>
												</div>
								
								</div>
							</div>
						</div>



								<!-- QUẢN LÝ BÁN CHẠY -->


								<?php


									?>
						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">QUẢN LÝ SẢN PHẨM</h4>
								</div>
								<div class="content">
									<div id="chartHours" class="ct-chart">
																
																<div class="nut_chucnang"><a href="SanPham_QuanLy.php?mk=<?php echo md5($user['password'])."".md5($user['name']);?>"><button type="button" name="nut_them" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span> Thêm</button></a></div>
									

											<table>	
													<tr>
														
														<th>Ảnh</th>
														<th>Tên</th>
														<th>Giá cũ</th>
														<th>Giá mới</th>
														<th>Ngày Nhập</th>
														<th>Loại</th>
														<th>Trạng thái</th>
														<th>Bán chạy</th>
														<th>Sửa</th>
														<th>Xóa</th>
													</tr>					
												<?php
													$insert = new data();
													$selectSanpham = $insert->select_ALL_sanpham();
												
													foreach($selectSanpham as $seSP)
													{
												?>
													<tr>
														
														<td> <img src="../images/SanPham_anh/<?php echo $seSP['Anh_sanpham'];?>" alt="" width="50px"> </td>
														<td> <?php echo $seSP['Ten_SanPham']; ?> </td>
														<td> <?php echo number_format($seSP['Gia_cu'],0,' ','.');  ?> </td>
														<td> <?php echo number_format($seSP['Gia_moi'],0,' ','.');  ?> </td>
														<td> <?php echo $seSP['Ngay_nhap'];  ?> </td>
														<td> <?php echo $seSP['Phan_loai'];  ?> </td>
														<!-- Trạng thái -->
														<?php 
																if($seSP['Trang_thai']==1)
																		{
															?>
																		<td><a href="SanPham_Trangthai_0.php?trangthaihethang=<?php echo $seSP['id_SanPham']?>"><i class="fa-regular fa-circle-check"></i></a></td>
															<?php				
																		}  
																else 
																	{
															?>
																		<td><a href="SanPham_Trangthai_1.php?trangthaiconhang=<?php echo $seSP['id_SanPham']?>"><i class="fa-regular fa-circle"></i></a></td>					
															<?php
																	} 
																	
															?> 

														
																	<!-- Sản phẩm bán chạy -->
															<?php 
																if($seSP['Ban_chay']==0)
																		{
															?>
																		<td><a href="SanPham_BanChay_Them.php?thembanchay=<?php echo $seSP['id_SanPham']?>"><i class="fa-regular fa-circle"></i></a></td>
															<?php				
																		}  
																else 
																	{
															?>
																		<td><a href="SanPham_BanChay_bo.php?bobanchay=<?php echo $seSP['id_SanPham']?>"><i class="fa-regular fa-circle-check"></i></a></td>					
															<?php
																	} 
															?> 


																<!-- SỬa sản phẩm -->
																<td><a href="SanPham_Sua_sanpham.php?updataSanphamId=<?php echo $seSP['id_SanPham'].'&&mk='.md5($user['password'])."".md5($user['name']);?>"><i class="fa-regular fa-pen-to-square"></i></a></td>



																	<!-- xóa sản phẩm -->
														<td><a href="SanPham_Xoa.php?deleteSanpham=<?php echo $seSP['id_SanPham']?>"><i class="fa-solid fa-trash"></i></a></td>	
														



														
													</tr>
												<?php
													}
													
												?>
											</table>
											
											 
											
									</div>
									
									

									<div class="footer">
										<hr>
										<div class="stats">
											<i class="fa fa-history"></i> Updated 3 minutes ago
										</div>
									</div>
								</div>


							</div>
						</div>
					</div>



					

							


        

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
