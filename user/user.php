<!DOCTYPE html>
<?php
session_start();
    $user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
	
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
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


 <!-- bootstrap icon  -->
 <script src="https://kit.fontawesome.com/7f4a8e96ee.js" crossorigin="anonymous"></script>
</head>

<body>

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
										<li><a href="../login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Đăng Nhập</a></li>
										<li><a href="../dangky.php"><i class="fa fa-user-plus" aria-hidden="true"></i>Đăng ký</a></li>
									</ul>
								</li>
								
								
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	

		<!-- Main Navigation -->

			<!-- Main Navigation -->
					<!-- ___________________________________________________ -->
					<?php
				if(isset($_SESSION['user']))
				{
		?>	
		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="../index.php?ID_user=<?php echo $user['id_user'] ?>">NHU<span>NG</span></a>
						</div>
					
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="../index.php?ID_user=<?php echo $user['id_user'] ?>">TRANG CHỦ</a></li>
								<li><a href="../product.php?ID_user=<?php echo $user['id_user'] ?>">SẢN PHẨM</a></li>
								<li><a href="../gioithieu.php">GIỚI THIỆU</a></li>	
							</ul>
							<ul class="navbar_user">
								
								<li>
									<?php
									include('../control.php');
									$select = new data();
										
											echo '<a href="../user/user.php?ID_user='.$user['id_user'].'"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
										 
										
									?>
							
								<li class="checkout">
										<?php

												
													

													
												
													if(isset($_GET['ID_user']))
													{
													$select_Sogiohang=$select->dem_giohang($_GET['ID_user']);
														foreach($select_Sogiohang as $se_soluong)
													{
													
													echo '<a href="../gioHang.php?id_user='.$user['id_user'].'">
													<i class="fa fa-shopping-cart" aria-hidden="true"></i>
													<span id="checkout_items" class="checkout_items">'.$se_soluong['soluong'].'</span>
														</a>';
													}
													}
													else
													{
														echo '<a href="../gioHang.php?id_user='.$user['id_user'].'">
													<i class="fa fa-shopping-cart" aria-hidden="true"></i>
													<span id="checkout_items" class="checkout_items">p</span>
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
						<li><a href="../login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>ĐĂNG NHẬP</a></li>
						<li><a href="../dangky.php"><i class="fa fa-user-plus" aria-hidden="true"></i>ĐĂNG KÝ</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="../index.php?ID_user=<?php echo $user['id_user'] ?>">TRANG CHỦ</a></li>
				<li class="menu_item"><a href="../product.php?ID_user=<?php echo $user['id_user'] ?>">SẢN PHẨM</a></li>
				<li class="menu_item"><a href="../gioithieu.php?ID_user=<?php echo $user['id_user'] ?>">GIỚI THIỆU</a></li>
		
			</ul>
		</div>
	</div>
	<?php
		}
		else{
	?>
			<!-- nếu ko có sesstion ------------------------------------------------------------------------------------------------->
			<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="../index.php">NHU<span>NG</span></a>
						</div>
			<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="../index.php">TRANG CHỦ</a></li>
								<li><a href="../product.php">SẢN PHẨM</a></li>
								<li><a href="../gioithieu.php">GIỚI THIỆU</a></li>	
							</ul>
							<ul class="navbar_user">
								
								<li>
									<?php
									include('../control.php');
									$select = new data();
										
											echo '<a href="../login.php"><i class="fa fa-user" aria-hidden="true"></i></a></li>';
										
									?>
							
								<li class="checkout">
										<?php

												
													

													
												
													
												
													if(isset($_SESSION['giohang']))
														{
															echo '<a href="../gioHang.php">
															<i class="fa fa-shopping-cart" aria-hidden="true"></i>
															<span id="checkout_items" class="checkout_items">'.sizeof($_SESSION['giohang']).'</span>
																</a>';
														}
														else
														{
															echo '<a href="../gioHang.php">
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
						<li><a href="../login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>ĐĂNG NHẬP</a></li>
						<li><a href="../dangky.php"><i class="fa fa-user-plus" aria-hidden="true"></i>ĐĂNG KÝ</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="../index.php">TRANG CHỦ</a></li>
				<li class="menu_item"><a href="../product.php">SẢN PHẨM</a></li>
				<li class="menu_item"><a href="../gioithieu.php">GIỚI THIỆU</a></li>
		
			</ul>
		</div>
	</div>



	<?php
		}
	?>
<!-- _______________________________________________________________________________________________________________ -->
	

	

	<!-- content -->
	<div class="content">
	<?php
								
								$data = new data();
								$select_user=$data-> select_User_id($_GET['ID_user']);
												
								foreach($select_user as $se)
								{

								
						?>
				<div class="header_menu">
					<div id="text_name">
						<p>Xin chào: <?php echo $se['hoten'];?></p>
					</div>
					<div id="bnt_logout">
						<a href="logout.php"><button type="button" class="btn btn-secondary">Đăng Xuất</button></a>
					</div>

				</div>	
				<div class="content_main">
					<div id="img_content">
						
											<B><h3>THÔNG TIN TÀI KHOẢN</h3></B>
							<form action="" method="post">
								<Table>
								<tr>
										<th>Họ Tên: </th>
										<td><input type="text" name="hoten" value="<?php echo $se['hoten'] ?>" ></td>
									</tr>
									<tr>
										<th>Tên đăng nhập: </th>
										<td><input type="text" name="tendangnhap" value="<?php echo $se['name'] ?>" ></td>
									</tr>
									<tr>
										<th>Mật khẩu: </th>
										<td><input type="text" name="matkhau" value="<?php echo $se['password'] ?>" ></td>
									</tr>
									<tr>
										<th>Số điện thoại:</th>
										<td><input type="text" name="dienthoai" value="<?php echo $se['phone'] ?>" ></td>
									</tr>
									<tr>
										<th>Tỉnh thành:</th>
										<td><input type="text" name="tinhthanh" value="<?php echo $se['TinhThanh'] ?>" ></td>
									</tr>	
									<tr>
										<th>Quận/Huyện:</th>
										<td><input type="text" name="quanhuyen" value="<?php echo $se['QuanHuyen'] ?>" ></td>
									</tr>
									<tr>
										<th>Xã/Phường:</th>
										<td><input type="text" name="xaphuong" value="<?php echo $se['XaPhuong'] ?>" ></td>
									</tr>
									<tr>
										<th>Địa chỉ chi tiết:</th>
										<td><input type="text" name="sonha" value="<?php echo $se['SoNha'] ?>" ></td>
									</tr>
								
								</Table>
								<input type="submit" name="sua" value="Sửa thông tin">
								
							</form>

							<?php
								}
								if(isset($_POST['sua']))
								{
									$hoten = $_POST['hoten'];
									$hotendangnhap = $_POST['tendangnhap'];
									$matkhau = $_POST['matkhau'];
									$dienthoai = $_POST['dienthoai'];
									$tinhthanh = $_POST['tinhthanh'];
									$quanhuyen = $_POST['quanhuyen'];
									$xaphuong = $_POST['xaphuong'];
									$sonha = $_POST['sonha'];

									$updateUser=$data->update_User_id($hoten,$hotendangnhap,$matkhau,$dienthoai,$tinhthanh,$quanhuyen,$xaphuong,$sonha,$user['id_user']);

									echo '<script>window.location="user.php?ID_user= '.$user['id_user'].'"</script>';
								}
							?>


					</div>
							
												
				</div>									
	</div>


	
	

	<!-- Benefit -->

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cach on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
						<h4>Newsletter</h4>
						<p>Subscribe to our newsletter and get 20% off your first purchase</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
