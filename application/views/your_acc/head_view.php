<!-- #MENU BAR -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark menu">
	<a class="navbar-brand" href="<?php echo base_url(); ?>myAcc/myIndex_controller"><h3>beFriend</h3></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarCollapse">
		<ul class="navbar-nav mr-auto title-bar">
			<li>
				<span class="avt-bar"><img src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_info_yourFriend[0]['user_avt']; ?>" alt=""></span>
			</li>
			<li class="nav-item">
				<a class="nav-link " href="<?php echo base_url(); ?>yourAcc/yourIndex_controller/get_info_yourFriend/<?php echo $get_info_yourFriend[0]['user_id']; ?>">Trang chủ<span class="sr-only">(current)</span></a>
			</li>
			<!-- <li class="nav-item">
				<a class="nav-link active" href="#">Về tùng</a>
			</li> -->
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url(); ?>yourAcc/yourIndex_controller/yourPic/<?php echo $get_info_yourFriend[0]['user_id'];?>">Ảnh</a>
			</li>
		</ul>
		<form class="form-inline mt-2 mt-md-0">
			<div class="dropdown pr-3">
				<div class="dropdown-toggle " data-toggle="dropdown">
					<i class="fas fa-user-friends"></i>
				</div>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#"><span  data-toggle="modal" data-target="#listuser">Danh sách bạn bè</span><span class="num-list">14</span></a>
					<a class="dropdown-item" href="#"><span  data-toggle="modal" data-target="#userconfirm">Xác nhận bạn bè</span><span class="num-list">10</span></a>
					<a class="dropdown-item" href="<?php echo base_url(); ?>myAcc/my_updateAcc_controller">Tài khoản</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Đăng xuất</a>
				</div>
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
				<div class="avt">
					<img data-toggle="modal" data-target="#avtModal" src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_info_yourFriend[0]['user_avt']; ?>" alt="">
					
				</div>
			</div>
			<div class="name-user"><h3><?php echo $get_info_yourFriend[0]['user_firstname'].' '.$get_info_yourFriend[0]['user_lastname']; ?></h3></div>
			
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
				<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_info_yourFriend[0]['user_avt']; ?>" alt=""></span><?php echo $get_info_yourFriend[0]['user_firstname'].' '.$get_info_yourFriend[0]['user_lastname']; ?></h6>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<img width="469px" src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_info_yourFriend[0]['user_avt']; ?>" alt="">
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
			</div>

		</div>
	</div>
</div> <!-- END MODEL -->





	<!-- #END HEAD -->