<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->

	<link rel="stylesheet" type="text/css" href="styles/login.css">
<!-- form login -->

				<div class="wrapper fadeInDown">
									<div id="formContent">
								<!-- Tabs Titles -->

								<!-- Icon -->
								<div class="fadeIn first">
										<h3>ĐĂNG NHẬP</h3>
								</div>
								
								<!-- Login Form -->
								<form method="POST" action="">
								<input type="text" id="login" class="fadeIn second" name="username" placeholder="Tài Khoản">
								<input type="text" id="password" class="fadeIn third" name="password" placeholder="Mật Khẩu">
								<input type="submit" class="fadeIn fourth" name="submit" value="Đăng nhập">
								</form>

								<!-- Remind Passowrd -->
								<div id="formFooter">
								
								</div>

				<?php
										

										
											include("Connect.php");
											
											if (isset($_POST["submit"])) {
												// lấy thông tin người dùng
												$username = $_POST["username"];
												$password = $_POST["password"];
												//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
												//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
												$username = strip_tags($username);
												$username = addslashes($username);
												$password = strip_tags($password);
												$password = addslashes($password);
															$sql = "select * from user where name = '$username' and password = '$password' ";
															$query = mysqli_query($con,$sql);
															$num_rows = mysqli_num_rows($query);
															$data = mysqli_fetch_assoc($query);
															
															$_SESSION['user'] =$data;
															
															$user = [];
															$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
														

														$_SESSION['tenuser']=$user['name'];
														$_SESSION['mkser']=$user['password'];
														$_SESSION['roleuser']=$user['role'];

																	

												if ($num_rows==1&&$user['role']==1) {

													
													// echo "<script>window.location='role_taikhoan.php'</script>";	
																echo $_SESSION['user_2'][0];
																echo $_SESSION['tenuser'];
														
															
															
																
														}   
											else if ($username == "" || $password =="")
											{
												
												echo "Chưa nhập tên tài khoản và mật khẩu";
											}
											else 
											{
												echo "Tài khoản hoặc mật khẩu không đúng";
											}

											}
											
											

								?>

										

							</div>


									<!-- php đăng nhập -->
									
					</div>
					

	<br>
	<br>
	<br>
	<br>

	<!-- ------------------------------------------------------footer------------------------------------------ -->
	<?php
			include('foot.php');
	?>
