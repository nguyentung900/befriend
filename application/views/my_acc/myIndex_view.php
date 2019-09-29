<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="<?php echo base_url();?>01.css">
	<!-- #BOOTSTRAP4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- #FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Dokdo" rel="stylesheet">
</head>
<body>

	
	<?php $this->load->view('my_acc/head_view'); ?>
	
	
	<!-- #CONTENT -->
	<div class="content mt-5">
		<div class="container">
			<div class="row">

				


				<?php 

					if(!empty($serach_user)) {
						$this->load->view('my_acc/serach_user_view'); 
					}
					else {
						$this->load->view($item_content);
					}
				?>

				

				
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
								
								<?php foreach($get_list_friend as $value): ?>
									<ul class="list-unstyled">
										<li>
											<a href="<?php echo base_url();?>yourAcc/yourIndex_controller/get_info_yourFriend/<?php echo $value['list_user_id']; ?>">
												<img src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" class="img-rounded">
											</a>
											<div class="info">
												<h6 class="list-user"><?php echo $value['user_firstname'].' '.$value['user_lastname']; ?></h6>
												<button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span>  bạn bè
												</button>
											</div>
										</li>
									</ul>
								<?php endforeach ?>
									

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
								
								<?php foreach($get_listFriend_To_Confirm as $value): ?>
									<ul class="list-unstyled">
										<li>
											<a href="index_friend.html">
												<img src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" class="img-rounded">
											</a>
											<div class="info">
												<h6 class="list-user"><?php echo $value['user_firstname'].' '.$value['user_lastname']; ?></h6>
												<a href="<?php echo base_url(); ?>myAcc/myIndex_controller/confirm_addFriend/<?php echo $value['user_id']; ?>"><button class="btn btn-outline-success">
													<span class="glyphicon glyphicon-plus" ariahidden="true"></span>Chờ xác nhận
												</button></a>
											</div>
										</li>
									</ul>
								<?php endforeach ?>
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
	<script src="https://code.jquery.com/jquery-3.4.0.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript">

		$('.xulycmtss').click(function(event) {
			$.ajax({
				url: 'myIndex_controller/addComment_ajax',
				type: 'POST',
				dataType: 'html',
				data: {
					cmt_content: $('#cmt_content').val(),
					post_id: $('#post_id').val(),
					user_id: $('#user_id').val()
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			})
			.always(function(data) {
				console.log("complete");
				//var tt=$(this).attr('data-cartid');
				//$('.loadcmt').append('Some text');
				/*var loadcmt=$('.loadcmt');
				$('.loadcmt').append('Some text');*/
				$('.loadcmt').html(data);

			});
		});
		
	
	</script>
</body>
</html>