
<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->
<!-- _______________________________________________________________________________________________________________ -->
	
<link rel="stylesheet" type="text/css" href="styles/categories_styles.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/sanpham_responsive.css">
	<div class="container product_section_container">
		<div class="row">
			<div class="col product_section clearfix">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.php">TRANG CHỦ</a></li>
						<li class="active"><a href="index.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Men's</a></li>
					</ul>
				</div>

				<!-- Sidebar -->
								<style>
									@media only screen and (min-width: 991px)
									{
										.sidebar_responsive {
											display: none;
										}	
									}
									
								</style>

				<div class="sidebar">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<h5>Danh mục</h5>
						</div>
						<?php
						if (isset($_GET['phanloai']))
						{
							
							$nam="Nam";
							$nu="Nữ";
							$pk="Pk";
							switch ($_GET['phanloai']) {
								case $nam:
									$A2="active";
								   break;
								case $nu:
									$A3="active";
								   break;
								case $pk:
									$A4="active";
								   break;
								
							}
						}
						else
						{
							$A1="active";
						}
						?>
						<ul class="sidebar_categories">
							<li 	class="<?php echo $A1 ?>"><span><i class="  fa fa-angle-double-right" aria-hidden="true"></i></span><a href="product.php"> Toàn Bộ</a></li>
							<li  	class="<?php echo $A2 ?>"><span><i class="  fa fa-angle-double-right" aria-hidden="true"></i></span><a href="product.php?phanloai=Nam"> Nam</a></li>
							<li 	class="<?php echo $A3 ?>"><a href="product.php?phanloai=Nữ"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span> Nữ</a></li>
							<li  	class="<?php echo $A4 ?>"><span><i class="  fa fa-angle-double-right" aria-hidden="true"></i></span><a href="product.php?phanloai=Pk"> Phụ Kiện</a></li>
						
						</ul>
						
						
					</div>

					
				</div>
				            <!-- __________________Sidebar  responsive___________________ -->


							<!-- sử lý nút danh mục -->
						<script>
							function show_chosse(){
								const buttom1Show = document.getElementsByClassName("sidebar_item");
									buttom1Show[0].style.display = "block";
							
							const buttom1Show3 = document.getElementById("bnt-show1");
									buttom1Show3.style.display = "none";
								const buttom1Show2 = document.getElementById("bnt-show2");
									buttom1Show2.style.display = "block";
							
							}
							function show_chosse2(){
								const buttom2Show = document.getElementsByClassName("sidebar_item");
									buttom2Show[0].style.display = "none";
							
							const buttom2Show3 = document.getElementById("bnt-show1");
									buttom2Show3.style.display = "block";
								const buttom2Show2 = document.getElementById("bnt-show2");
									buttom2Show2.style.display = "none";
							
							}

						</script>

							<div class="sidebar_responsive">
					<div class="sidebar_section">
						<div class="sidebar_title">
							<div id="bnt-show1"><h5 class="border border-warning" onclick="show_chosse()">Chọn danh mục </h5></div>
							<div id="bnt-show2"><h5 class="border border-warning" onclick="show_chosse2()">Chọn danh mục </h5></div>
						</div>
						<?php
						if (isset($_GET['phanloai']))
						{
							
							$nam="Nam";
							$nu="Nữ";
							$pk="Pk";
							switch ($_GET['phanloai']) {
								case $nam:
									$A2="active";
								   break;
								case $nu:
									$A3="active";
								   break;
								case $pk:
									$A4="active";
								   break;
								
							}
						}
						else
						{
							$A1="active";
						}
						?>
						<div class="sidebar_item">
						<ul class="sidebar_categories">
							<li 	class="<?php echo $A1 ?>"><span><i class="  fa fa-angle-double-right" aria-hidden="true"></i></span><a href="product.php"> Toàn Bộ</a></li>
							<li  	class="<?php echo $A2 ?>"><span><i class="  fa fa-angle-double-right" aria-hidden="true"></i></span><a href="product.php?phanloai=Nam"> Nam</a></li>
							<li 	class="<?php echo $A3 ?>"><a href="product.php?phanloai=Nữ"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span> Nữ</a></li>
							<li  	class="<?php echo $A4 ?>"><span><i class="  fa fa-angle-double-right" aria-hidden="true"></i></span><a href="product.php?phanloai=Pk"> Phụ Kiện</a></li>
						
						</ul>
						</div>
						
						
					</div>

					
				</div>

			

				<!-- Main Content -->

				<div class="main_content">

					<!-- Products -->

					<div class="products_iso">
						<div class="row">
							<div class="col">

								<!-- Product Sorting -->
								
							
								<div class="product_sorting_container product_sorting_container_top">
									<ul class="product_sorting">
										<li>
											<span class="type_sorting_text">Mặc định</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_type">
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Mặc định</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Theo giá</span></li>
												<li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'><span>Tên sản phẩm</span></li>
											</ul>
										</li>
										<li>
											<span>Số lượng</span>
											<span class="num_sorting_text">24</span>
											<i class="fa fa-angle-down"></i>
											<ul class="sorting_num">
												<li class="num_sorting_btn"><span>6</span></li>
												<li class="num_sorting_btn"><span>12</span></li>
												<li class="num_sorting_btn"><span>24</span></li>
												<li class="num_sorting_btn"><span>100</span></li>
											</ul>
										</li>
									</ul>
									

								</div>
								

								<!-- Product Grid -->

								<div class="product-grid">

									<!-- Product 1 -->
									<?php
											
											$select = new data();
											$selectall = $select->select_ALL_sanpham();
											foreach($selectall as $se)
											{
												if(isset($_GET['phanloai'])){

												
												if($se['Trang_thai']==1 && $_GET['phanloai']==$se['Phan_loai'])
													{
												
														
												
										?>
										
											<div class="product-item <?php echo $se['Phan_loai'] ?>">
												<div class="product discount product_filter">
													<div class="product_image">
															<a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><img src="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>" alt=""></a>
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>  <?php $tien=(100-($se['Gia_moi'])/($se['Gia_cu']/100));  echo round($tien,0)."%" ?>  </span></div>
													<div class="product_info">


													<h6 class="product_name"><a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><?php echo $se['Ten_SanPham']?></a></h6>
																<div class="product_price"><span><?php echo number_format($se['Gia_cu'], 0, ',', '.')." VNĐ" ?></span> </br> <?php echo number_format($se['Gia_moi'], 0, ',', '.')." VNĐ" ?></div>
													</div>
												</div>
												
																			
												
																<form method="post" action="gioHang.php"  >
																	<input type="submit" name="datHang" value="Thêm vào giỏ" class="red_button add_to_cart_button" >
																	<input type="hidden" name="tensp" value="<?php echo $se['Ten_SanPham'] ?>">
																	<input type="hidden" name="gia" value="<?php echo $se['Gia_moi'] ?>">
																	<input type="hidden" name="hinh" value="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>">
																	<input type="hidden" name="soluong" value="1">
																	
																	<input type="hidden" name="idsanpham" value="<?php echo $se['id_SanPham'] ?>">
																		
																	
																</form>
											</div>
											
									<?php
													
													}
										}
										else{

										
										 if ($se['Trang_thai']==1){
									?>
									
										<div class="product-item <?php echo $se['Phan_loai'] ?>">
												<div class="product discount product_filter">
													<div class="product_image">
															<a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><img src="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>" alt=""></a>
													</div>
													<div class="favorite favorite_left"></div>
													<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>  <?php $tien=(100-($se['Gia_moi'])/($se['Gia_cu']/100));  echo round($tien,0)."%" ?>  </span></div>
													<div class="product_info">


													<h6 class="product_name"><a href="product_details.php?SanPham=<?php echo $se['id_SanPham'] ?>"><?php echo $se['Ten_SanPham']?></a></h6>
																<div class="product_price"><span><?php echo number_format($se['Gia_cu'], 0, ',', '.')." VNĐ" ?></span> </br> <?php echo number_format($se['Gia_moi'], 0, ',', '.')." VNĐ" ?></div>
													</div>
												</div>
											
												
																			
												
																<form method="post" action="gioHang.php"  >
																	<input type="submit" name="datHang" value="Thêm vào giỏ" class="red_button add_to_cart_button">
																	<input type="hidden" name="tensp" value="<?php echo $se['Ten_SanPham'] ?>">
																	<input type="hidden" name="gia" value="<?php echo $se['Gia_moi'] ?>">
																	<input type="hidden" name="hinh" value="<?php echo "images/SanPham_anh/".$se['Anh_sanpham'] ?>">
																	<input type="hidden" name="soluong" value="1">
																	<input type="hidden" name="idsanpham" value="<?php echo $se['id_SanPham'] ?>">
																		
																	
																</form>
																</div>
															
											

									<?php
										 }

										}
									}
										
									?>
								</div>

								<!-- Product Sorting -->

							

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Benefit -->

<!-- ------------------------------------------------------footer------------------------------------------ -->
<?php
			include('foot.php');
	?>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>