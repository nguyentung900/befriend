<div class="col-md-4 col-right ">
	<?php 
		/*echo '<pre>';
		print_r($left_pic_model);
		echo '</pre>';*/
		?>
		<div class="anhtrai fixcontent">
			<i class="fas fa-image mr-2"></i><span class="titlePic">Ảnh</span>
			<hr>
			<div class="background-pic">
				<div class="row mb-3">
					<!-- PIC 01 -->
					<?php  foreach($left_pic_model as $key => $value): ?>
						<div class="col-md-4 mb-3 picColRight">
							<img data-toggle="modal" data-target="#picRecent<?php echo $key; ?>" src="<?php echo base_url(); ?>img/img-upload/<?php echo $value['post_img']; ?>" alt="">

							
						</div>
						<!-- MODAL FOR pic recently -->
						<div class="modal fade" id="picRecent<?php echo $key; ?>">
							<div class="modal-dialog">
								<div class="modal-content">

									<!-- Modal Header -->
									<div class="modal-header">
										<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span>Nguyễn Thanh Tùng</h6>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>

									<!-- Modal body -->
									<div class="modal-body">
										<img width="469px" src="<?php echo base_url(); ?>img/img-upload/<?php echo $value['post_img']; ?>" alt="">
									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
									</div>

								</div>
							</div>
						</div>
					<?php endforeach ?>
					<!-- EDN PIC 01 -->
				</div>
				
			</div>
		</div>
	</div>