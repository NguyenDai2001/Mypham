
<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->


	
<!-- _______________________________________________________________________________________________________________ -->
	

	<!-- Slider -->

	<!-- Slideshow container -->


	<style>
									* {box-sizing: border-box;}
										
										.mySlides {display: none;}
										img {vertical-align: middle;}


										.slider-main{
											margin-top: 25vmin;
											
										}

										/* Slideshow container */
										.slideshow-container {
										max-width: 1000px;
										position: relative;
										margin: auto;
										
										
										
										
										}

										

										/* The dots/bullets/indicators */
										.dot {
										height: 15px;
										width: 15px;
										margin: 0 2px;
										background-color: #bbb;
										border-radius: 50%;
										display: inline-block;
										transition: background-color 0.6s ease;
										}
										.mySlides img {
												width: 1000px;
												height: 500px;
												border: 5px solid orange;
												
										}
										

										/* Fading animation */
										.fade {
										animation-name: fade;
										animation-duration: 4s;
										}

										@keyframes fade {
										from {opacity: .8} 
										to {opacity: 1}
										}

										
										/* On smaller screens, decrease text size */
										@media only screen and (max-width:821px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 820px;
												height: 342px;

										}
										}
										/* On smaller screens, decrease text size */
										@media only screen and (max-width:769px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 768px;
												height: 332px;

										}
										}
										/* On smaller screens, decrease text size */
										@media only screen and (max-width:415px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 414px;
												height: 192px;

										}
										}
										/* On smaller screens, decrease text size */
										@media only screen and (max-width:391px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 390px;
												height: 192px;

										}
										}
										/* On smaller screens, decrease text size */
										@media only screen and (max-width: 376px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 375px;
												height: 192px;

										}
										}
										/* On smaller screens, decrease text size */
										@media only screen and (max-width:361px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 360px;
												height: 192px;

										}
										}
										/* On smaller screens, decrease text size */
										@media only screen and (max-width:281px) {
										.text {font-size: 11px}
										.mySlides img {
												width: 280px;
												height: 152px;

										}
										}
										
										
										
										
										
										</style>
										

										
									<div class="slider-main" >
										<div class="slideshow-container">
											<?php
												
												$select_slider = $select->select_slide();

												foreach($select_slider as $se)
													{
											?>
												<div class="mySlides fade">
													<img src="<?php echo "images/TrangChu_slider/".$se['name_slider'] ?>" >
												</div>
											<?php
													}
											?>

										</div>

										<br>

										<div style="text-align:center">
											<?php
												foreach($select_slider as $se)
													{
											?>
														<span class="dot"></span> 
												<?php
													}
											?>
											
											
										</div>
									</div>


										
										<script>
										let slideIndex = 0;
										showSlides();

										function showSlides() {
										let i;
										let slides = document.getElementsByClassName("mySlides");
										let dots = document.getElementsByClassName("dot");
										for (i = 0; i < slides.length; i++) {
											slides[i].style.display = "none";  
										}
										slideIndex++;
										if (slideIndex > slides.length) {slideIndex = 1}    
										for (i = 0; i < dots.length; i++) {
											dots[i].className = dots[i].className.replace(" active", "");
										}
										slides[slideIndex-1].style.display = "block";  
										dots[slideIndex-1].className += " active";
										setTimeout(showSlides, 4000); // Change image every 2 seconds
										}
										</script>

	<!-- Banner -->
	

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/images.jfif)">
						<div class="banner_category">
							<a href="product.php?phanloai=Nữ">MỸ PHẨM NỮ</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/99522_guong-mat-dai-dien-12-41626616.jpg)">
						<div class="banner_category">
							<a href="product.php?phanloai=Nam">MỸ PHẨM NAM</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(images/72464820.jpg)">
						<div class="banner_category">
							<a href="product.phpphanloai=Pk">PHỤ KIỆN</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hinhnen123">
			<div class="hinhnencon">

			</div>
	</div>
	<!-- New Arrivals -->

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2><img src="images/hoa_van/Slide2.png" width="10%">    SẢN PHẨM MỚI<img src="images/hoa_van/Slide1.png" width="10%"></h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Nữ">NỮ</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Nam">NAM</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".Pk">PHỤ KIỆN</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
					
										<style>
											.product_image .product_image2{
												display: none;
											
											}
											.product_image .product_image1{
												display: block;
										
											}
											
										</style>

									<script>
													const Length_anh1 = document.getElementsByClassName('product_image1');
											setTimeout(function(){
												for(var i=0;i<=Length_anh1.length;i++){
													const anh1 = document.getElementsByClassName('product_image1');
													anh1[i].style.display='none';
													const anh2 = document.getElementsByClassName('product_image2');
													anh2[i].style.display='block';
												}},3000);
											setInterval(function(){
											var pppp=function(){
												for(var i=0;i<=Length_anh1.length;i++){
													const anh1 = document.getElementsByClassName('product_image1');
													anh1[i].style.display='none';
													const anh2 = document.getElementsByClassName('product_image2');
													anh2[i].style.display='block';
												}
												}
												var bbbb=function(){
												for(var i=0;i<=Length_anh1.length;i++){
													const anh1 = document.getElementsByClassName('product_image1');
													anh1[i].style.display='block';
													const anh2 = document.getElementsByClassName('product_image2');
													anh2[i].style.display='none';
												}
											}
												setTimeout(bbbb,0);
												setTimeout(pppp,3000);
											},6000);
									</script>

										




							<?php
											$select = new data();
											$aaa = $select->select_TOP10_sanpham();
											foreach($aaa as $se)
											{
											
										?>
										
													<div class="product-item <?php echo $se['Phan_loai'] ?>">
														<div class="product discount product_filter">
															<div class="product_image">
															<div class="product_image1">
																	<a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><img src="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>" alt=""></a>
															</div>
															</div>
															<div class="product_image">
															<div class="product_image2">
																	<a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><img src="<?php echo "images/SanPham_anh/".$se['anhmau1'] ?>" alt=""></a>
															</div>
															</div>

															<div class="favorite favorite_left"></div>
															<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>  <?php $tien=(100-($se['Gia_moi'])/($se['Gia_cu']/100));  echo round($tien,0)."%" ?>  </span></div>
															<div class="product_info">
																<h6 class="product_name"><a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><?php echo $se['Ten_SanPham']?></a></h6>
																<div class="product_price"><span><?php echo number_format($se['Gia_cu'], 0, ',', '.')." VNĐ" ?></span>   <br>     <?php echo number_format($se['Gia_moi'], 0, ',', '.')." VNĐ" ?></div>
															</div>
														</div>
														<div><form method="post" action="gioHang.php"  >
																	<input type="submit" name="datHang" value="Thêm vào giỏ" class="red_button add_to_cart_button">
																	<input type="hidden" name="tensp" value="<?php echo $se['Ten_SanPham'] ?>">
																	<input type="hidden" name="gia" value="<?php echo $se['Gia_moi'] ?>">
																	<input type="hidden" name="hinh" value="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>">
																	<input type="hidden" name="soluong" value="1">
																	<input type="hidden" name="idsanpham" value="<?php echo $se['id_SanPham'] ?>">
																		
																	
																</form></div>
														
														
													</div>
													
									<?php	
										}
									?>	

						
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="hinhnen123">

	</div>

	<!-- Best Sellers -->

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2><img src="images/hoa_van/Slide2.png" width="10%"> BÁN CHẠY <img src="images/hoa_van/Slide1.png" width="10%"></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<!-- Slide 1 -->
							<?php
									$select = new data();
									$selectALL = $select->select_ALL_sanpham();
									foreach($selectALL as $se)
									{
										if($se['Ban_chay']==1)
											{
								
												
							?>
										<div class="owl-item product_slider_item">
											
											<div class="product-item">
												
												<div class="product discount">
													<div class="product_image">
													<a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><img src="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>" alt=""></a>
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>  <?php $tien=(100-($se['Gia_moi'])/($se['Gia_cu']/100));  echo round($tien,0)."%" ?>  </span></div>
													<div class="product_info">
														<h6 class="product_name"><a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><?php echo $se['Ten_SanPham']?></a></h6>
														<div class="product_price"><span><?php echo number_format($se['Gia_cu'], 0, ',', '.')." VNĐ" ?></span>     <br>   <?php echo number_format($se['Gia_moi'], 0, ',', '.')." VNĐ" ?></div>
													</div>
													<div><form method="post" action="gioHang.php"  >
																	<input type="submit" name="datHang" value="Thêm vào giỏ" class="red_button add_to_cart_button">
																	<input type="hidden" name="tensp" value="<?php echo $se['Ten_SanPham'] ?>">
																	<input type="hidden" name="gia" value="<?php echo $se['Gia_moi'] ?>">
																	<input type="hidden" name="hinh" value="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>">
																	<input type="hidden" name="soluong" value="1">
																	<input type="hidden" name="idsanpham" value="<?php echo $se['id_SanPham'] ?>">
																		
																	
																</form>
													</div>
												</div>
											</div>
										</div>
							<?php
											}
									
								}
								if (isset($_SESSION['giohang'])){
									echo 'aaaa';
								}
								
							?>

							
						</div>

						<!-- Slider Navigation -->

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	
	
<!-- ------------------------------------------------------footer------------------------------------------ -->
	<?php
			include('foot.php');
	?>

