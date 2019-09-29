<!-- #MENU BAR -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark menu">
	<a class="navbar-brand" href="<?php echo base_url(); ?>myAcc/myIndex_controller"><h3 style="font-family: 'Dokdo', cursive; font-size: 35px">beFriend</h3></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto title-bar">
			<li>
				<span class="avt-bar"><img src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_avt[0]['user_avt']; ?>" alt=""></span>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?php echo base_url(); ?>myAcc/myIndex_controller">Trang chủ<span class="sr-only">(current)</span></a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link active" href="#">Về tùng</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>myAcc/myPic_controller">Ảnh</a>
			</li>
		</ul>
		<form class="form-inline mt-2 mt-md-0">
			<div class="dropdown pr-3">
				<div class="dropdown-toggle " data-toggle="dropdown">
					<i class="fas fa-user-friends"></i>
				</div>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#"><span  data-toggle="modal" data-target="#listuser">Danh sách bạn bè</span><span class="num-list"><?php echo count($get_list_friend);?></span></a>
					<a class="dropdown-item" href="#"><span  data-toggle="modal" data-target="#userconfirm">Xác nhận bạn bè</span><span class="num-list"><?php echo count($get_listFriend_To_Confirm); ?></span></a>
					<a class="dropdown-item" href="<?php echo base_url(); ?>myAcc/my_updateAcc_controller">Tài khoản</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="<?php echo base_url(); ?>myAcc/login_controller/logout">Đăng xuất</a>
				</div>
			</div>
		</form>

		<form action="" method="post" class="form-inline mt-2 mt-md-0 menu-login2">
				<div class="input-group">
					<input  type="text" name="search_user" value="" placeholder="Tìm kiếm ..." class="form-control">

					<button type="submit" class="btn btn-info">Tìm kiếm</button>
				</div>
			</form>
	</div>
</nav>
<!-- #END MENU BAR -->

<!-- #HEAD -->
<div class="head">
	<div class="row m-0">
		<div class="col-md-6 col-left">
			<div class="avt-wrap">
				<?php foreach($get_avt as $value): ?>
				<div class="avt">
					<img data-toggle="modal" data-target="#avtModal" src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" alt="">
					<div data-toggle="modal" data-target="#updateAvtModal" class="edit-avt"><i class="fas fa-camera"></i></div>
				</div>
			<?php endforeach ?>
			</div>
			<div class="name-user"><h3><?php echo $this->session->userdata('user_firstname').' '.$this->session->userdata('user_lastname'); ?></h3></div>
			<div class="edit-avt-wrap"><i class="fas fa-camera"></i></div>
		</div>
		<div class="col-md-6 col-right">
			
		</div>
	</div>
</div>


<!-- MODAL FOR AVT -->
<div class="modal fade" id="avtModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<?php foreach($get_avt as $value): ?>
				<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" alt=""></span><?php echo $this->session->userdata('user_firstname').' '.$this->session->userdata('user_lastname'); ?></h6>
				<?php endforeach ?>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body ssssssss -->
			<div class="modal-body">
				<?php foreach($get_avt as $value): ?>
				<img style="object-fit: cover;" width="469px" src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" alt="">
				<?php endforeach ?>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div> <!-- END MODEL -->



<!-- MODAL FOR update avt -->
<div class="modal fade" id="updateAvtModal">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<?php foreach($get_avt as $value): ?>
				<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" alt=""></span><?php echo $this->session->userdata('user_firstname').' '.$this->session->userdata('user_lastname'); ?></h6>
				<?php endforeach ?>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<?php foreach($get_avt as $value): ?>
				<img style="object-fit: cover;" width="412px" height="353" style="margin-left: 25px" src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt']; ?>" alt="">
				<?php endforeach ?>
				<form action="<?php echo base_url(); ?>myAcc/myIndex_controller/update_avt" method="post" enctype="multipart/form-data">
					<div class="form-group mt-4">
						<div class="row">
							<div class="cam-update-avt"><i class="fas fa-camera icon-cam-upavt"><input type="file" name="user_avt" id="user_avt" class="form-control-file file-update-avt"></i></div>
							<input type="hidden" value="<?php echo $this->session->userdata('user_lastname'); ?>,bạn  vừa cập nhật ảnh đại diện!" name="post_content" id="user_avt">
							
						</div>
						<div class="row">
							<div class="col-sm-offset-3 col-sm-9">
								<!-- <button type="submit" class="btn btn-outline-success">
									Lưu
								</button> -->
							</div>
						</div>
					</div>
				<!-- </form> -->
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="submit" class="btn btn-outline-success">
									Lưu
								</button>
				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
			</div>
		</form>
		</div>
	</div>
</div> <!-- END MODEL -->

	<!-- #END HEAD -->