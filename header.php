<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en">
<head>
<title>Mỹ Phẩm</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/icon_lienhe.css">



<link rel="stylesheet" type="text/css" href="styles/responsive.css">


 <!-- bootstrap icon  -->
 <script src="https://kit.fontawesome.com/7f4a8e96ee.js" crossorigin="anonymous"></script>
 <!-- ----bootrap---- icon -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
 <!-- ----icon head -->
<link rel="shortcut icon" href="./images/image(2068).png">


<body>

<!-- icon liên hệ  -->

	
<div class="hotline-phone-ring-wrap">
    <div class="hotline-phone-ring">
        <div class="hotline-phone-ring-circle"></div>
        <div class="hotline-phone-ring-circle-fill"></div>
        <div class="hotline-phone-ring-img-circle"> <a href="tel:000000" class="pps-btn-img"> <img src="images/icon_lienhe/icon.png" alt="so dien thoai" width="50"> </a></div>
    </div>
   

</div>


<div class="float-icon-hotline">			
		<ul class ="left-icon hotline">
			<li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://zalo.me/"><i class="fa fa-zalo animated infinite tada"></i><span>Zalo</span></a></li>
			<li class="hotline_float_icon"><a target="_blank" rel="nofollow" id="messengerButton" href="https://www.facebook.com/messages/t/100003884149043"><i class="fa fa-messenger animated infinite tada"></i><span>Facebook</span></a></li>
		</ul>		
</div>


	

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->
	
		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left">Mỹ phẩm Trung Nhung </div>
						
						
						
					</div>
					
					<div class="col-md-6 text-right">
						
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								
							
								
							
								<li class="account">
									<a href="#">
										Tài Khoản 
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="account_selection">
										<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng Nhập</a></li>
										<!-- <li><a href="dangky.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng ký</a></li> -->
									</ul>
								</li>
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	

		<!-- Main Navigation -->
					<!-- ___________________________________________________ -->
					

			<!-- nếu ko có sesstion ------------------------------------------------------------------------------------------------->
			<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="index.php">NHU<span>NG</span></a>
						</div>
			<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.php">TRANG CHỦ</a></li>
								<li><a href="product.php">SẢN PHẨM</a></li>
								<li><a href="gioithieu.php">GIỚI THIỆU</a></li>	
							</ul>
							<ul class="navbar_user">
								

							<style>
								
							</style>

								<li>
									<?php
									include('control.php');
									$select = new data();
										
											//echo '<a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
										
									?>
							
								<li class="checkout">
										<?php

												
													

													
												
													
												
													if(isset($_SESSION['giohang']))
														{
															echo '<a href="gioHang.php">
															<i class="fa fa-shopping-cart" aria-hidden="true"></i>
															<span id="checkout_items" class="checkout_items">'.sizeof($_SESSION['giohang']).'</span>
																</a>';
														}
														else
														{
															echo '<a href="gioHang.php">
															<i class="fa fa-shopping-cart" aria-hidden="true"></i>
															<span id="checkout_items" class="checkout_items">0</span>
																</a>';
														}
												
											?>
									
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				
				<li class="menu_item has-children">
					<a href="#">
						TÀI KHOẢN
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>ĐĂNG NHẬP</a></li>
						<!-- <li><a href="dangky.php"><i class="fa fa-user-plus" aria-hidden="true"></i>ĐĂNG KÝ</a></li> -->
					</ul>
				</li>
				<li class="menu_item"><a href="index.php">TRANG CHỦ</a></li>
				<li class="menu_item"><a href="product.php">SẢN PHẨM</a></li>
				<li class="menu_item"><a href="gioithieu.php">GIỚI THIỆU</a></li>
		
			</ul>
		</div>
	</div>
