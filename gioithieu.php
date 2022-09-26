<?php
include ('header.php');
?>
<!-- _______________________________________________________________________________________________________________ -->


<!-- _______________________________________________________________________________________________________________ -->
	
	
<link rel="stylesheet" type="text/css" href="styles/gioiThieu.css">
<!-- _______________________________________________________________________________________________________________ -->
		<?php
			
			$data = new data();
			$select = $data->select_gioithieu();
			
		?>
			<div class="gioithieu">
				<div class="noidung_gioithieu">
					<div class="form_gioithieu">
						<h3>GIỚI THIỆU</h3>
					</div>
					<div class="form_gioithieu">
						<?php
							foreach($select as $se)
							{
						?>
							<img src="images/anh_gioithieu/<?php echo $se['anh_gioithieu']?>" >
							<p><?php echo $se['noidung']?></p>
						<?php
							}
						?>		
					</div>
				</div>

			</div>

	

<!-- ------------------------------------------------------footer------------------------------------------ -->
<?php
			include('foot.php');
	?>
