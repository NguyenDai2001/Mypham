<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->

<!-- _______________________________________________________________________________________________________________ -->
<link rel="stylesheet" type="text/css" href="styles/dangky.css">	
	<!-- Form đăng ký -->
						
					<div class="container_registration"> 
						<div class="form_dangky">
							<form method="post">
												
								<table >
									<tr  align="center">
												<td colspan="2"><h4>ĐĂNG KÝ TÀI KHOẢN</h4></td>
									</tr>
									<tr>
										<td>
											<div id="text_dangky">
												<p>Nhập tên tài khoản:</p>
												<p>Nhập mật khẩu:</p>
												<p>Nhập họ và tên:</p>
												<p>Nhập số điện thoại:</p>
												<p>Nhập Tỉnh Thành:</p>
												<p>Nhập Quận/Huyện:</p>
												<p>Nhập Xã/Phường:</p>
												<p>Nhập Số nhà(Tên đường....):</p>
											
										
											</div>
										</td>
										<td>
											<div id="input_dangky">
												<input type="text" name="tentaikhoan" id="" placeholder="Tài khoản" >
												<input type="text" name="matkhau" id="" placeholder="Mật khẩu">
												<input type="text" name="hoten" id=""  placeholder="Họ tên">
												<input type="text" name="sdt" id=""  placeholder="Số điện thoại">
												<input type="text" name="tinhthanh" id=""  placeholder="Tỉnh">
												<input type="text" name="quanhuyen" id=""  placeholder="Quận/Huyện">
												<input type="text" name="xaphuong" id=""  placeholder="Xã/Phường">
												<input type="text" name="sonha" id=""  placeholder="Số nhà">
										
												
											</div>

										</td>
									</tr>
									<tr  align="center">
												<td colspan="2"><input id="nutdangky" type="submit" name="dangky" value="Đăng ký"></td>
									</tr>
								</table>								
							</form>
							<div id="thongbao_dangky">
							<?php
									
									$insert = new data();
										$kiemtra=$insert->select_role_user();

										foreach($kiemtra as $se)
										{
											if(isset($_POST['dangky']))
												{	
														if($_POST['tentaikhoan']!=$se['name'])
														{
															if($_POST['tentaikhoan']=="")
															{
																echo"Chưa nhập tên tài khoản";
																break;
															}
															else if($_POST['matkhau']=="")
															{
																echo"Chưa nhập mật khẩu";
																break;
															}
															else if($_POST['hoten']=="")
															{
																echo"Chưa nhập Họ tên ";
																break;
															}
															else if($_POST['sdt']==""  )
															{
																
																	echo"Chưa nhập Số điện thoại ";
																	break;
																
															
															}
															else if($_POST['tinhthanh']=="")
															{
																echo"Chưa nhập Tỉnh ";
																break;
															}
															else if($_POST['quanhuyen']=="")
															{
																echo"Chưa nhập Quận/Huyện ";
																break;
															}
															else if($_POST['xaphuong']=="")
															{
																echo"Chưa nhập Xã/Phường ";
																break;
															}
															else if($_POST['sonha']=="")
															{
																echo"Chưa nhập địa chỉ nhà ở ";
																break;
															}
														
															else{
																$name=$_POST['tentaikhoan'];
																$password =$_POST['matkhau'];
																$hoten =$_POST['hoten'];
																$phone =$_POST['sdt'];
																$tinhthanh =$_POST['tinhthanh'];
																$quanhuyen =$_POST['quanhuyen'];
																$xaphuong =$_POST['xaphuong'];
																$sonha =$_POST['sonha'];
																
																$dangky=$insert->insertDangKy($name,$password,$hoten,$phone,$tinhthanh,$quanhuyen,$xaphuong,$sonha);

																echo '<script>let choice =confirm("Đăng ký thành công")
														
														
																			if (choice == true) {
																			window.location="index.php?ID_user='.$user['id_user'].'";
																			} else {
																			
																			}
																	</script>';
																break;


															}
														}
														else{
															echo "Tên tài khoản đã tồn tại";
															break;
														}
												}
										}
								?>	
							</div>

							


						</div>
					</div>
					
					



	<!-- ------------------------------------------------------footer------------------------------------------ -->
	<?php
			include('foot.php');
	?>
