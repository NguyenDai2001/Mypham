
<?php
include('header.php');

?>
<!-- _______________________________________________________________________________________________________________ -->
<link rel="stylesheet" type="text/css" href="user/styles/thanhtoan.css">
<link rel="stylesheet" type="text/css" href="user/styles/thanhtoan_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<script src="https://kit.fontawesome.com/7f4a8e96ee.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="styles/index.css">		
<!-- _______________________________________________________________________________________________________________ -->


			<div id="form_thanhtoan">

				<div id="thanhtoan">

						<div id="from_thongtin">
							<div class="header_tieude">
									<p>ĐỊA CHỈ NHẬN HÀNG</p>
							</div>
							
							<div class="thongtin">
								<div class="nhapthongtin">
									<form method="post">
											<legend>
											<label>Họ tên</label>
											<input type="text" name="hoten" value=""  placeholder="Nhập họ tên" >
											</legend>
											<legend>
											<label>Số điện thoại</label>
											<input type="text" name="sdt"  value=""  placeholder="Nhập số điện thoại" >
											</legend>
											<legend>
											<label>Tỉnh</label>
											<input type="text"  name="tinh" value=""  placeholder="Tỉnh thành phố" >
											</legend>
											<legend>
											<label>Quận/Huyện</label>
											<input type="text" name="huyen"  value=""  placeholder="Quân/Huyện" >
											</legend>
											<legend>
											<label>Xa/Phường</label>
											<input type="text"  name="xa"  value="" placeholder="Xã/Phường" >
											</legend>
											<legend>
											<label>Số nhà/đường</label>
											<input type="text"  name="duong" value="" placeholder="Số nhà, tên đường" >
											</legend>



											
					</br>				
														<?php
															for ($i=0;$i<sizeof($_SESSION['giohang']);$i++)
																{
														?>
											<input type="hidden"  name="id_sp<?php echo $i?>" value="<?php echo $_SESSION['giohang'][$i][4];  ?>">
											<input type="hidden"  name="soluongsp<?php echo $i?>" value="<?php echo $_SESSION['giohang'][$i][3];  ?>">
											
											
														<?php
																}
																
														?>
											<input type="hidden" name="id_ramdom" value="<?php echo $_COOKIE['id_ramdom'];?>">


											

											<input id="bnt-submit" type="submit" name="dathang" value="Đặt hàng" >
											
										<br>
										<p id="thongbao">
										
										 <?php
										  
											 $insertData = new data();

											if(isset($_POST['dathang'])){
															
															
															 if($_POST['hoten']=="")
															{
																echo"Chưa nhập Họ tên !";
																
															}
															else if($_POST['sdt']==""  )
															{
																
																	echo"Chưa nhập Số điện thoại !";
																	 
															}
															
															else if($_POST['tinh']=="")
															{
																echo"Chưa nhập Tỉnh !";
																
															}
															else if($_POST['huyen']=="")
															{
																echo"Chưa nhập Quận/Huyện! ";
																
															}
															else if($_POST['xa']=="")
															{
																echo"Chưa nhập Xã/Phường !";
																
															}
															else if($_POST['duong']=="")
															{
																echo"Chưa nhập địa chỉ nhà ở !";
																
															}
															else if(!isset($_SESSION['giohang'])  )
															{
																
																	echo"Chưa có Sản phẩm nào !";
																	
															}
														
															else{
																	//insert bang hoadon
																	
																	$hoten=$_POST['hoten'];
																	$sdt=$_POST['sdt'];
																	$tinh=$_POST['tinh'];
																	$quan=$_POST['huyen'];
																	$xaPhuong=$_POST['xa'];
																	$soNha=$_POST['duong'];
																	$idRamdom=$_POST['id_ramdom'];
																	
																	
																	$insert=$insertData-> insert_HoaDon($hoten,$sdt,$tinh,$quan,$xaPhuong,$soNha,$idRamdom);
																		
																	echo '<script>window.location="thanhToanThanhCong.php";</script>';

																	


												
													
												
											}
											//if(isset($_POST['dathang']))
											//{

											//	echo '<script>let choice =confirm("Đặt Hàng thành công!! nhấn OK để tiếp tục mua hàng")
														
														
											//			if (choice == true) {
											//			window.location="../index.php";
											//			} else {
											//			
											//			}
											//	</script>';
												
											//}
											}
										?> 
										</p>


										


											
										
										
										
									

								</div>
							</div>

						</div>
						
					

						<div id="from_sanpham">
							<div class="header_tieude">
									<p>SẢN PHẨM ĐẶT MUA</p>
							</div>
									
											
							
										<div class="thongtin">
											<div class="nhapthongtin"> 
											<table border="1" class="Table-thongtin">
													<tr>
																	<td>SL</td>
																	<td>Ảnh SP</td>
																	<td>Tên SP</td>
																</tr>
													<?php
														if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang'])))
														{
															$tinhtong2=0;
															for ($i=0;$i<sizeof($_SESSION['giohang']);$i++)
															{	
																$tinhtong=($_SESSION['giohang'][$i][1])*($_SESSION['giohang'][$i][3]);
																$tinhtong2=$tinhtong2+$tinhtong;
																	
														?>	
															
															<tr >
																<td> x<?php echo $_SESSION['giohang'][$i][3] ?></td>
																<td id="anhsanpham">
																<img src="<?php echo $_SESSION['giohang'][$i][2] ?>" width="100%">
																
																</td>
																<td id="tensanpham">
																	<?php echo $_SESSION['giohang'][$i][0] ?>
																</td>
															</tr>

														
												<?php
															}
														}
														
												?>
												
											</table>
											<br>
											<div id="div-tongtien"> <h5><b>Tổng tiền:</b><h5> <?php echo number_format($tinhtong2,0,",",".").' VNĐ'; ?></div>
												<input type="hidden"  name="tongtien" value="<?php echo $tinhtong2; ?>">
			

										</div>
									<?php
											

											if(isset($_POST['dathang'])){
												for ($i=0;$i<sizeof($_SESSION['giohang']);$i++)
												{	
												//insert bang giohang2
												$id_sp=$_POST["id_sp$i"];
												$soluongsp=$_POST["soluongsp$i"];
												$tongtien=$_POST['tongtien'];
												$sdt=$_POST["sdt"];
												$idRamdom=$_POST['id_ramdom'];

												$insert2=$insertData-> insert_giohang2($id_sp,$soluongsp,$tongtien,$sdt,$idRamdom);
												}

											}
									?>
									
										</div>

								
							</form>
							

						</div>
						
				</div>
														
			</div>
			

	<!-- ______________________________________________________________________________________________________________________________ -->

<?php
include('foot.php');
?>
