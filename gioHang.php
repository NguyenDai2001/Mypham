<?php
setcookie("id_ramdom",time(), time() + 600, "/");
?>

<?php


session_start();
	
	if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
	// lấy dữ liệu từ form
	if (isset($_POST['datHang'])&&($_POST['datHang']))
	{
		$tensp=$_POST['tensp'];
		$gia=$_POST['gia'];
		$hinh=$_POST['hinh'];
		$soluong=$_POST['soluong'];
		$idsanpham=$_POST['idsanpham'];
		$sp=[$tensp,$gia,$hinh,$soluong,$idsanpham];
		$_SESSION['giohang'][]=$sp;  
		
	}
?>


<?php

    $user = [];
	$user = (isset($_SESSION['user'])) ? $_SESSION['user']: [];
	
?>


<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->

<!-- _______________________________________________________________________________________________________________ -->

<link rel="stylesheet" type="text/css" href="styles/giohang.css">
	
<!-- form giỏ hàng -->
	
				<form method="POST">
						</div>	
							<div class="container_gioHang"> 

								<table id="cart" class="table table-hover table-condensed"> 
								<thead> 
								<tr> 
									<th style="width:10%" class="text-center">Hình ảnh</th> 
									<th style="width:30%">Tên sản phẩm</th> 
									<th style="width:25%" class="text-center">Giá</th> 
									<th style="width:25%" class="text-center">Số lượng</th> 
									<th style="width:22%" class="text-center">Thành tiền</th> 
									<th style="width:10%"  class="text-center">Xóa </th>
								</tr> 
								</thead> 
									<!-- item -->  
												<?php
											if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang'])))
											{
												$tinhtong2=0;
												$tensp2="";
												$SoluongThem=0;
												$DDD=1;
												for ($i=0;$i<sizeof($_SESSION['giohang']);$i++) 
												{
													// ".$_SESSION['giohang'][$i+1<sizeof($_SESSION['giohang'])][4]."
													
													$giotien=number_format(($_SESSION['giohang'][$i][1]),0," ",".");
												
													$tinhtien=number_format(($_SESSION['giohang'][$i][1])*($_SESSION['giohang'][$i][3]),0," ",".");
													$tinhtong=($_SESSION['giohang'][$i][1])*($_SESSION['giohang'][$i][3]);
													$tinhtong2=$tinhtong2+$tinhtong;
													
													

															for ($j=0;$j<sizeof($_SESSION['giohang']);$j++){
															
																if(($_SESSION['giohang'][$i][4])==($_SESSION['giohang'][$j][4])&&$i!=$j){

																	
																		echo '<script>window.location="xoasessionSPtrungNhau.php?deleteId='.$_SESSION['giohang'][$i][4].'&&Id='.$i.'"</script>';

																}				
																
															}
	
													echo '
													<tr>
														<td id="hinhanh"><img  src="'.$_SESSION['giohang'][$i][2].'" > </td>
														<td >'.$_SESSION['giohang'][$i][0].'</td>
														<td align="center" id="gia'.$i.'" >'.$giotien.' VNĐ'.'</td>
														<td align="center">
															
															<input style="width: 20px;" min=1 id="sl'.$i.'" type="text" name="soluong2" value="'.$_SESSION['giohang'][$i][3].'" disabled >
															 
														</td>
														<td align="center"  id="thanhtien'.$i.'" >'.$tinhtien.' VNĐ'.'</td>
														<td align="center"><a href="xoasessionsanpham.php?deleteId='.$_SESSION['giohang'][$i][4].'&&Id='.$i.'"><i class="fa-solid fa-trash"></i></a></td>
														</tr>
														';	
												}
												
											}
										// session_destroy();
								
												?>
												<!-- nút chức Năng -->
												<tr > 
													<td><a href="product.php" class="btn btn-warning"  ><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a></td> 
													
													<td class="hidden-xs text-center" colspan="3"><strong>Tổng tiền: <?php echo number_format($tinhtong2,0," ",".")." VNĐ"; ?></strong>
													</td> 
													<?php
													
														if(sizeof($_SESSION['giohang'])>0){
															?>
															<td><button name="thanhtoan" style="border:none ;" class="btn btn-success"><a href="thanhtoan.php" style="color:white ; text-decoration:none;">Thanh Toán</a> <i class="fa fa-angle-right"></i></button></td>
															<?php
														}
														else{
															echo '<td><button  style="border:none;  ;"><a href="#" class="btn btn-secondary">Thanh toán <i class="fa fa-angle-right"></i></a></button>';
														}		
													?>
													</td> 
													<td align="center" ><a  class="btn btn-danger" href="xoahetgiohang.php">Xóa hết  <i class="fa-solid fa-trash"></i></a></td>		
												</tr> 
												</tfoot>
												
												        
								</table>
							</div>

	<!-- ------------------------------------------------------responsive------------------------------------------ -->

	<div id="bnt-giohang-dieuhuong">
		
		<div id="khung-bnt"> 
			<div id="bnt-trove">
				<a href="product.php" class="btn btn-warning"  ><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
			</div>

			<div id="bnt-thanhtoan">
				<?php
													
					if(sizeof($_SESSION['giohang'])>0){
						?>
						<td><button name="thanhtoan" style="border:none ;" class="btn btn-success"><a href="thanhtoan.php" style="color:white ; text-decoration:none;">Thanh Toán</a> <i class="fa fa-angle-right"></i></button></td>
						<?php
					}
					else{
						echo '<td><button  style="border:none; width:100%;"><a href="#" class="btn">Thanh toán <i class="fa fa-angle-right"></i></a></button>';
					}		
				?>
			</div>
		</div>
		<strong id="tb_tongtien">Tổng tiền: <?php echo number_format($tinhtong2,0," ",".")." VNĐ"; ?></strong>
	</div>
							<div class="container_gioHang_responsive"> 
													
										
									
								<?php
											if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang'])))
											{
												$tinhtong2=0;
												$tensp2="";
												$SoluongThem=0;
												$DDD=1;
												for ($i=0;$i<sizeof($_SESSION['giohang']);$i++) 
												{
													// ".$_SESSION['giohang'][$i+1<sizeof($_SESSION['giohang'])][4]."
													
													$giotien=number_format(($_SESSION['giohang'][$i][1]),0," ",".");
												
													$tinhtien=number_format(($_SESSION['giohang'][$i][1])*($_SESSION['giohang'][$i][3]),0," ",".");
													$tinhtong=($_SESSION['giohang'][$i][1])*($_SESSION['giohang'][$i][3]);
													$tinhtong2=$tinhtong2+$tinhtong;
													
													

															for ($j=0;$j<sizeof($_SESSION['giohang']);$j++){
															
																if(($_SESSION['giohang'][$i][4])==($_SESSION['giohang'][$j][4])&&$i!=$j){

																	
																		echo '<script>window.location="xoasessionSPtrungNhau.php?deleteId='.$_SESSION['giohang'][$i][4].'&&Id='.$i.'"</script>';

																}				
																
															}
	
													echo '
													<div class="content_giohang">
													<table class="giohang_tb"  > 
													<tr>
														
														<td>
														</td>
														<td  class="tb_xoa" coslpan="2">
															<a href="xoasessionsanpham.php?deleteId='.$_SESSION['giohang'][$i][4].'&&Id='.$i.'"><i class="fa-solid fa-circle-xmark"></i></a>
														</td>
														
													</tr>
													<tr> 
														<td rowspan="3" class="td_anh">
															<img  src="'.$_SESSION['giohang'][$i][2].'" >
														</td>
														<td class="tb_tensp">
																'.$_SESSION['giohang'][$i][0].'
														</td>
													</tr> 
													<tr>
														<td>
															Số lượng: <input style="width: 20px;" min=1 id="sl'.$i.'" type="text" name="soluong2" value="'.$_SESSION['giohang'][$i][3].'" disabled >
														</td>
														
													</tr>
													<tr>
														<td >
															'.$tinhtien.' VNĐ'.'
														</td>
													</tr>
										</table>
														
										</div>	';	
												}
												
											}
										
								
												?>




										<div id="bnt-xoahet-respo">
											<a  class="btn btn-danger" href="xoahetgiohang.php">Xóa hết  <i class="fa-solid fa-trash"></i></a>
										</div>
								</div>

								
						</div>
										
							
					</form>

					<style>
					*
{
	margin: 0;
	padding: 0;
}
.container_gioHang
{
    margin-top: 200px;
    margin-left: 20%;
    margin-right: 20%;
    margin-bottom: 350px;
   
}
#hinhanh img
{
    width: 100px;
    height: 100px;
}
.container_gioHang .td .img
{
    width: 20px;
    height: 20px;

    color: rgb(17, 179, 255);
}

@media screen and (min-width: 991px) { 
    .container_gioHang_responsive{
        display: none;
    }
    #bnt-xoahet-respo{
        display: none;
    }
} 



@media screen and (min-width: 991px) { 
						
    #bnt-giohang-dieuhuong{
        display: none;
    }
    #bnt-xoahet-respo{
        display: none;
    }
}
 @media screen and (max-width: 991px) { 
    
    .benefit, .newsletter ,footer{
    display: none;
}

        .container_gioHang_responsive{
            margin-top: 15vw;
            
        }
        .container_gioHang{
            display: none;
        }
        .content_giohang{
            padding: 2% 2% 5% 2%;
            
            
        }
        .giohang_tb{
            width: 100%;
            background-image:   url(images/anh_Tinh/pngtree-light-orange-simple-fresh-skin-care-banner-background-image_232751.jpg);
            border-radius: 20px;
            
            
        }
        .tb_xoa{
            display: flex;
            flex-direction: row-reverse;
        }
        .tb_xoa a {
            
            padding: 1vw 3vw 1vw 1vw;
        }
        .tb_tensp{
            padding: 0 1vw 0 0;
        }
        
    
        
        .td_anh{
            width: 40%;
        }
        .giohang_tb tr td img{
        width: 26vw;
        margin: 0 30px 30px 30px;
        border-radius: 10px;
        
    }




    #bnt-giohang-dieuhuong {
        width:100%;
        height: max-content;
        bottom: 0px;
        background: white;
        position: fixed;
        z-index: 9;
        display: flex;
        flex-direction: column-reverse;
    }
    
    #bnt-trove{
        float: left;
        width: 50%;
        
    }
    #bnt-thanhtoan{
        float: right;
        width: 50%;
        
    }
    }
    .btn-warning{
            width: 100%;
            background-color:  rgb(17, 179, 255);
            border: none;
    }
    .btn-success 
    {
            width: 100%;
            background-color:rgb(255, 145, 0);
    }
    #bnt-xoahet-respo{
        width: 100%;
        display: flex;
        justify-content: center;
    }
    #tb_tongtien{
        height: 5vw;
        font-size: 3vw;
        display: flex;
        justify-content: center;
    }
        


							
							
						
					</style>



	<br>
	<br>
	<br>
	<br>

	<!-- ------------------------------------------------------footer------------------------------------------ -->
	<?php
			include('foot.php');
	?>
	


<!-- <script>
	function showPrice(tongsp){
		var sum = 0;
		for(var j=0;j<tongsp;j++){
			var soluongSP  = document.getElementById("sl"+j.toString()).value;
			var giaSP = document.getElementById("gia"+j.toString()).innerText;
			sum+= parseInt(soluongSP)* parseInt(giaSP);
			
		}
		document.getElementById("tongtien").innerText = "Tổng tiền "+sum+" VND"; 
		
	}
	function changeValue(i,tongsp){
		document.getElementById("sl"+i.toString()).onchange = function(){
			
			var soluong  = document.getElementById("sl"+i.toString()).value;
			var gia = document.getElementById("gia"+i.toString()).innerText;
			document.getElementById("thanhtien"+i.toString()).innerText = (parseInt(soluong)* parseInt(gia)).toString()+" VND";

			showPrice(tongsp);
			
		}
	}
	var tongsp = document.getElementById("tongsp").value;
	showPrice(tongsp);
	for(var i =0;i<tongsp;i++){
		changeValue(i,tongsp)
	}
	



</script> -->





















															