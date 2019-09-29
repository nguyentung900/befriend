<div class="col-md-2">
	<?php 
		/*echo '<pre>';
		print_r($get_listFriend_added);
		echo '</pre>';*/
	 ?>
					<div class="row">
						<div id="who-follow"  class="card">
							<div class="card-header bg-dark text-white">
								Đề xuất
							</div>
							<div class="card-body">
								<?php foreach($get_listFriend_All as $key => $value):?>
								<ul class="list-unstyled">
									<li>
										<a href="<?php echo base_url();?>yourAcc/yourIndex_controller/get_info_yourFriend/<?php echo $value['user_id'] ?>">
											<img src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt'] ?>">
										</a>
										<div class="info">
											<strong><?php echo $value['user_firstname'].' '.$value['user_lastname']; ?></strong>
											<a href="<?php echo base_url(); ?>/myAcc/myIndex_controller/addFriend/<?php echo $value['user_id']; ?>"><button class="btn btn-outline-success">
												<span class="glyphicon glyphicon-plus" ariahidden="true"></span>Kết bạn
											</button></a>
										</div>
									</li>
								</ul>
							<?php  endforeach ?>

								<!-- <ul class="list-unstyled">
									<li>
										<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
										<div class="info">
											<strong>Nguyễn Thanh Tùng</strong>
											<button class="btn btn-outline-success">
												<span class="glyphicon glyphicon-plus" ariahidden="true"></span>Kết bạn
											</button>
										</div>
									</li>
								</ul> -->

							</div>
						</div>
					</div>
				</div>