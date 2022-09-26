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
<?php
    include("../control.php");
    $layid = new data();
    $idsanpham = $layid -> select_sanpham_ID($_GET['updataSanphamId']);

	foreach($idsanpham as $se)
	{

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Single Product</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="../plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="../plugins/jquery-ui-1.12.1.custom/jquery-ui.css">

<link rel="stylesheet" type="text/css" href="../styles/QuanLy_product_details.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<div class="super_container">

	<!-- Header -->

	
		<div class="head_nut_quay_ve">
			
			<button type="button" onclick="window.location.href='admin.php?mk=<?php echo md5($user['password']).md5($user['name'])?>'" class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span>  Trở về</button>

		</div>

	

	

	<form method="post" enctype="multipart/form-data">

			<div class="container single_product_container">
				<div class="row">
					<div class="col">

						<div>
							<h8></h8>
						</div>

						

					</div>
				</div>

				<style>
					table
					{
						width: 300px;
						height: 400px;
						border: 2px solid orange;
					}
					table tr td
					{
						/* background-image: url("../images/SanPham_quanLy/icon-add.png"); */
						background-repeat: no-repeat;
						background-size: 100px 100px;
						background-position: center;
						border: 2px solid orange;
					}

					
				
				</style>

				<div class="row">
					<div class="col-lg-7">
						<div class="single_product_pics">
							<div class="row">
								<div class="col-lg-3 thumbnails_col order-lg-1 order-2">
									<table>
										<tr>
											
											<td><input type="file" name="anh_slide1"> <img src="../images/SanPham_anh/<?php echo $se['anh_slide1'] ?>" width="100px"></td>
											<td rowspan="3" ><input type="file" name="anh_sanpham"><img src="../images/SanPham_anh/<?php echo $se['Anh_sanpham'] ?>" width="100px"></td>
										</tr>
										<tr>
											<td><input type="file" name="anh_slide2"><img src="../images/SanPham_anh/<?php echo $se['anh_slide2'] ?>" width="100px"></td>									
										</tr>
										<tr>
											<td><input type="file" name="anh_slide3"><img src="../images/SanPham_anh/<?php echo $se['anh_slide3'] ?>" width="100px"></td>									
										</tr>
									</table>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-lg-5">
						<div class="product_details">
							<div class="product_details_title">
								<h2><input type="text" name="tensanpham" value="<?php echo $se['Ten_SanPham'] ?>"></h2>
								<p><textarea rows=" 3" cols="50" name="gioithieu" value=""><?php echo $se['gioiThieu_1'] ?></textarea></p>
							</div>
							<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
								<span class="ti-truck"></span><span>Mỹ Phẩm</span>
							</div>
							<div class="original_price"><input type="text" name="Giacu" value="<?php echo $se['Gia_cu'] ?>"> VND</div>
							<div class="product_price"><input type="text" name="Giamoi" value="<?php echo $se['Gia_moi'] ?>"> VND</div></br></br>
				

							<div>	Chọn loại hàng:<select name="phanloai" >
											<option value="Nam">Nam</option>
											<option value="Nữ">Nữ</option>
											<option value="Pk">Phụ kiện</option>
										</select></div>
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
								
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col">

							<!-- Tab Thông tin sản phẩm -->

							<div id="tab_1" class="tab_container active">
								<div class="row">
									<div class="col-lg-5 desc_col">
										<div class="tab_title">
											<h4>Thông tin sản phẩm</h4>
										</div>
										<div class="tab_text_block">
											<h2><input type="text" name="tieude1" value="<?php echo $se['tieude1'] ?>"></h2>
											<p><textarea rows=" 5" cols="50" name="noidung1" value="<?php echo $se['noidung1'] ?>"></textarea></p>
										</div>
										<div class="tab_image">
											<input type="file" name="anhmau1">
											<img src="../images/SanPham_anh/<?php echo $se['anhmau1'] ?>" width="100px">
										</div>
										<div class="tab_text_block">
											<h2><input type="text" name="tieude2" value="<?php echo $se['tieude2'] ?>"></h2>
											<p><textarea rows=" 5" cols="50" name="noidung2" value="<?php echo $se['noidung2'] ?>"></textarea></p>
										</div>
									</div>
									<div class="col-lg-5 offset-lg-2 desc_col">
										<div class="tab_image">
											<input type="file" name="anhmau2">
											<img src="../images/SanPham_anh/<?php echo $se['anhmau2'] ?>" width="100px">
										</div>
										<div class="tab_text_block">
											<h2><input type="text" name="tieude3" value="<?php echo $se['tieude3'] ?>"></h2>
											<p><textarea rows=" 5" cols="50" name="noidung3" value="<?php echo $se['noidung3'] ?>"></textarea></p>
										</div>
										<div class="tab_image desc_last">
											<input type="file" name="anhmau3">
											<img src="../images/SanPham_anh/<?php echo $se['anhmau3'] ?>" width="100px">
										</div>
									</div>
								</div>
								<div align='center'><input type="submit" name="themsanpham" id="" value="Sửa Thông tin"></div>
							</div>

							<?php
							
								$insert = new data();
							

								if(isset($_POST['themsanpham']))
								{
									$tenSP=$_POST['tensanpham'];
									$GiaCu=$_POST['Giacu'];
									$GiaMoi=$_POST['Giamoi'];
									$PhanLoai=$_POST['phanloai'];
									$gioithieu=$_POST['gioithieu'];
									$tieude1=$_POST['tieude1'];
									$tieude2=$_POST['tieude2'];
									$tieude3=$_POST['tieude3'];
									$noidung1=$_POST['noidung1'];
									$noidung2=$_POST['noidung2'];
									$noidung3=$_POST['noidung3'];

									$anh_slide1 = basename($_FILES['anh_slide1']['name']);
									$anh_sanpham = basename($_FILES['anh_sanpham']['name']);
									$anh_slide2 = basename($_FILES['anh_slide2']['name']);
									$anh_slide3 = basename($_FILES['anh_slide3']['name']);
									$anhmau1 = basename($_FILES['anhmau1']['name']);
									$anhmau2 = basename($_FILES['anhmau2']['name']);
									$anhmau3 = basename($_FILES['anhmau3']['name']);
														$target_dir1 = "../images/SanPham_anh/";
														$target_dir2 = "../images/SanPham_anh/";
														$target_dir3 = "../images/SanPham_anh/";
														$target_dir4 = "../images/SanPham_anh/";
														$target_dir5 = "../images/SanPham_anh/";
														$target_dir6 = "../images/SanPham_anh/";
														$target_dir7 = "../images/SanPham_anh/";

														$target_file1 = $target_dir1 . $anh_slide1;
														$target_file2 = $target_dir2 . $anh_sanpham;
														$target_file3 = $target_dir3 .$anh_slide2 ;
														$target_file4 = $target_dir4 .$anh_slide3 ;
														$target_file5 = $target_dir5 . $anhmau1;
														$target_file6 = $target_dir6 . $anhmau2;
														$target_file7 = $target_dir7 . $anhmau3;
														move_uploaded_file($_FILES["anh_slide1"]["tmp_name"],$target_file1);
														move_uploaded_file($_FILES["anh_sanpham"]["tmp_name"],$target_file2);
														move_uploaded_file($_FILES["anh_slide2"]["tmp_name"],$target_file3);
														move_uploaded_file($_FILES["anh_slide3"]["tmp_name"],$target_file4);
														move_uploaded_file($_FILES["anhmau1"]["tmp_name"],$target_file5);
														move_uploaded_file($_FILES["anhmau2"]["tmp_name"],$target_file6);
														move_uploaded_file($_FILES["anhmau3"]["tmp_name"],$target_file7);
														

														$anhslide1=$anh_slide1;
														$anhSP=$anh_sanpham;
														$anhslide2=$anh_slide2 ;
														$anhslide3=$anh_slide3 ;
														$anhmau1=$anhmau1;
														$anhmau2=$anhmau2;
														$anhmau3=$anhmau3;
														
														

									$insertAll = $insert->Updata_sanpham($_GET['updataSanphamId'],$tenSP,$anhSP,$GiaCu,$GiaMoi,$PhanLoai,$anhslide1,$anhslide2,$anhslide3 , $gioithieu , $tieude1 , $tieude2 , $tieude3 , $noidung1 , $noidung2 , $noidung3 , $anhmau1 , $anhmau2 , $anhmau3);
										echo "<h3>Sửa Sản phẩm thành công<h3>";

									
									echo "<script>window.location='admin.php?mk=".md5($user['password'])."".md5($user['name'])."'</script>";
								}
							
							?>
							
							

									

								
							

						</div>
					</div>
				</div>

			</div>
			<?php
				}
			?>
	</form>
	

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
						<div class="cr">©2018 All Rights Reserverd. This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../styles/bootstrap4/popper.js"></script>
<script src="../styles/bootstrap4/bootstrap.min.js"></script>
<script src="../plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="../js/single_custom.js"></script>
</body>

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