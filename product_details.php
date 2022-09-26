<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->







	<!-- _____________________________________________________________________________________________________________ -->

	<link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
	<link rel="stylesheet" type="text/css" href="plugins/jquery-ui-1.12.1.custom/jquery-ui.css">

	<link rel="stylesheet" type="text/css" href="styles/single_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/single_responsive.css">


	<!-- _____________________________________________________________________________________________________________ -->
	<?php
	
	$getdata = new data ();
	//-----------------Form giỏ hàng
	$select = $getdata -> select_id_sanpham($_GET['SanPham']);	
?>

	<div class="container single_product_container">
		<div class="row">
			<div class="col">


			<?php
				foreach($select as $seSP)
				{
					
			?>
				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="product.php"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $seSP['Phan_loai'] ?></a></li>
						<li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i><?php echo $seSP['Ten_SanPham'] ?></a></li>
					</ul>
				</div>

			</div>
		</div>

		<div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
							<div class="single_product_thumbnails">
								<ul>
									<li><img src="images/SanPham_anh/<?php echo $seSP['anh_slide1'] ?>" alt="" data-image="images/SanPham_anh/<?php echo $seSP['anh_slide1'] ?>"></li>
									<li class="active"><img src="images/SanPham_anh/<?php echo $seSP['anh_slide2'] ?>" alt="" data-image="images/SanPham_anh/<?php echo $seSP['anh_slide2'] ?>"></li>
									<li><img src="images/SanPham_anh/<?php echo $seSP['anh_slide3'] ?>" alt="" data-image="images/SanPham_anh/<?php echo $seSP['anh_slide3'] ?>"></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/SanPham_anh/<?php echo $seSP['Anh_sanpham'] ?>)"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2><?php echo $seSP['Ten_SanPham'] ?></h2>
						<p><?php echo $seSP['gioiThieu_1'] ?></p>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>Mĩ Phẩm</span>
					</div>
					<div class="original_price"><?php echo number_format($seSP['Gia_cu'],0,'.','.').' VND' ?></div>
					<div class="product_price"><?php echo number_format($seSP['Gia_moi'],0,'.','.').' VND' ?></div>
					<ul class="star_rating">
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
						<li><i class="fa fa-star" aria-hidden="true"></i></li>
					</ul>
					<div class="product_color">
						<h6>Sản phẩm của chúng tôi được cập nhật liên tục hàng ngày vì thế bạn vui lòng liên hệ trực tiếp qua Fanpage hoặc Zalo để chúng tôi gửi bạn tham khảo các mẫu sản phẩm mới nhất tại cửa hàng :)</h6>
					</div>
						
						
					<form method="post" action="gioHang.php">
				
						<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
									
									
						
											<span><B>Số lượng: </B></span><input type="number"  min=1 name="soluong" value="1" style="width:40px; margin-left:20px;  margin-right:20px;">	
											<input type="submit" name="datHang" value="Thêm vào giỏ" class="btn btn-danger">
											<input type="hidden" name="tensp" value="<?php echo $seSP['Ten_SanPham'] ?>">
											<input type="hidden" name="gia" value="<?php echo $seSP['Gia_moi'] ?>">
											<input type="hidden" name="hinh" value="<?php echo "images/SanPham_anh/".$seSP['Anh_sanpham'] ?>">
											<input type="hidden" name="idsanpham" value="<?php echo $seSP['id_SanPham'] ?>">
											
											
											
											
									
							<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
						</div>
					</form>
					
				</div>
			</div>
		</div>

	</div>

	<!-- Tabs -->

	<div class="tabs_section_container">

		<div class="container">
			<div class="row">
				<div class="col">
					<div class="tabs_container">
						<ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
							<li class="tab active" data-active-tab="tab_1"><span>Thông tin sản phẩm</span></li>
							
							<li class="tab" data-active-tab="tab_3"><span>Đánh Giá</span></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">

					<!-- Tab Description -->

					<div id="tab_1" class="tab_container active" >
						<div class="row">
							<div class="col-lg-5 desc_col">
								<div class="tab_title">
									<h4>Thông tin Sản phẩm</h4>
								</div>
								<div class="tab_text_block">
									<h2><?php echo $seSP['tieude1'] ?></h2>
									<p><?php echo $seSP['noidung1'] ?></p>
								</div>
								<div class="tab_image">
									<img src="images/SanPham_anh/<?php echo $seSP['anhmau1'] ?>" alt="" >
								</div>
								<div class="tab_text_block">
									<h2><?php echo $seSP['tieude2'] ?></h2>
									<p><?php echo $seSP['noidung2'] ?></p>
								</div>
							</div>
							<div class="col-lg-5 offset-lg-2 desc_col">
								<div class="tab_image">
									<img src="images/SanPham_anh/<?php echo $seSP['anhmau2'] ?>" alt="">
								</div>
								<div class="tab_text_block">
									<h2><?php echo $seSP['tieude3'] ?></h2>
									<p><?php echo $seSP['noidung3'] ?></p>
								</div>
								<div class="tab_image desc_last">
									<img src="images/SanPham_anh/<?php echo $seSP['anhmau3'] ?>" alt="">
								</div>
							</div>
						</div>
					</div>

					<!-- Tab Reviews -->

					<div id="tab_3" class="tab_container">
						<div class="row">

							<!-- User Reviews -->

							<div class="col-lg-6 reviews_col">
								<div class="tab_title reviews_title">
									<h4>Reviews (2)</h4>
								</div>

								<!-- User Review -->

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Aug 2016</div>
										<div class="user_name">Brandon William</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>

								<!-- User Review -->

								<div class="user_review_container d-flex flex-column flex-sm-row">
									<div class="user">
										<div class="user_pic"></div>
										<div class="user_rating">
											<ul class="star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
										</div>
									</div>
									<div class="review">
										<div class="review_date">27 Aug 2016</div>
										<div class="user_name">Brandon William</div>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>

							<!-- Add Review -->

							<div class="col-lg-6 add_review_col">

								<div class="add_review">
									<form id="review_form" action="post">
										<div>
											<h1>Add Review</h1>
											<input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
											<input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
										</div>
										<div>
											<h1>Your Rating:</h1>
											<ul class="user_star_rating">
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star" aria-hidden="true"></i></li>
												<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
											</ul>
											<textarea id="review_message" class="input_review" name="message"  placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
										</div>
										<div class="text-left text-sm-right">
											<button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
										</div>
									</form>
								</div>

							</div>

						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
	<?php
					
				}
	?>


<!-- ------------------------------------------------------footer------------------------------------------ -->
<?php
			include('foot.php');
	?>