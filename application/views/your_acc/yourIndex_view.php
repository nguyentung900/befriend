<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>01.css">
	<!-- #BOOTSTRAP4 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- #FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

	
	<?php $this->load->view('your_acc/head_view'); ?>
	
	
	<!-- #CONTENT -->
	<div class="content mt-5">
		<div class="container">
			<div class="row">

				


				<?php $this->load->view($item_content); ?>

				

				
			</div>
		</div>
	</div>	
	<!-- #END CONTENT -->
	

	<!-- MODAL FOR list user -->
	<div class="modal fade" id="listuser">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span>Nguyễn Thanh Tùng</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8">
							<div id="who-follow">
									<ul class="list-unstyled">
										<li>
											<a href="index_friend.html">
												<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
											</a>
											<div class="info">
												<h6 class="list-user">Chieu thai</h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span>  bạn bè
												</button>
											</div>
										</li>
									</ul>

									<ul class="list-unstyled">
										<li>
											<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
											<div class="info">
												<h6 class="list-user">Nguyen Thanh Tung</h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span> bạn bè
												</button>
											</div>
										</li>
									</ul>

									<ul class="list-unstyled">
										<li>
											<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
											<div class="info">
												<h6 class="list-user">Chieu thai</h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span>  bạn bè
												</button>
											</div>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
					</div>
				</div>

				

			</div>
		</div>
	</div> <!-- END MODEL list user  -->


	<!-- MODAL FOR user confirm -->
	<div class="modal fade" id="userconfirm">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span>Nguyễn Thanh Tùng</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row">
						<div class="col-md-8">
							<div id="who-follow">
									<ul class="list-unstyled">
										<li>
											<a href="index_friend.html">
												<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
											</a>
											<div class="info">
												<h6 class="list-user">Chieu thai</h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span>Chờ xác nhận
												</button>
											</div>
										</li>
									</ul>

									<ul class="list-unstyled">
										<li>
											<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
											<div class="info">
												<h6 class="list-user">Nguyen Thanh Tung</h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span> Chờ xác nhận
												</button>
											</div>
										</li>
									</ul>

									<ul class="list-unstyled">
										<li>
											<img src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-rounded">
											<div class="info">
												<h6 class="list-user">Chieu thai</h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span>  Chờ xác nhận
												</button>
											</div>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
					</div>
				</div>

				

			</div>
		</div>
	</div> <!-- END MODEL user confirm  -->


	<script src="<?php echo base_url(); ?>01.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>