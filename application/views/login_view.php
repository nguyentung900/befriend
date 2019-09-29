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
<?php echo $this->session->userdata('user_id'); ?>
	<!-- #MENU BAR -->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark menu">
		<a class="navbar-brand" href="#"><h3>beFriend</h3></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto title-bar">
				
			</ul>
			<form action="<?php echo base_url(); ?>myAcc/login_controller/login" method="post" class="form-inline mt-2 mt-md-0 menu-login2">
				<div class="input-group">
					<input required="" type="text" name="name" value="<?php echo set_value('name'); ?>" placeholder="Nhập tên đăng nhập" class="form-control">
					
					<input required="" type="password" name="pass" value="<?php echo set_value('pass'); ?>" id="pass" placeholder="Nhập mật khẩu" class="form-control">

					<button type="submit" class="btn btn-success">Đăng nhập</button>
				</div>
			</form>
		</div>
	</nav>
	<!-- #END MENU BAR -->

	<div class="wrap">
		<div class="container-fluid pt-5">
			<!-- <div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<?php //echo form_error('name'); ?>
					<?php //echo form_error('pass'); ?>
				</div>
			</div> -->

			
			<div class="row">
				<div class="col-md-5 map-login">
					<div class="div top7">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7857.616038190154!2d105.76973597705063!3d10.032695486302975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0883d0dac6b15%3A0xf6ae5b1bd18625!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBD4bqnbiBUaMah!5e0!3m2!1svi!2s!4v1532318846795" width="550" height="350"  frameborder="1" style="border: 1px solid grey;border-radius: 24px" allowfullscreen></iframe>
					</div><!--  end top7: map -->
				</div>
				<div class="col-md-7">
					<?php echo $this->session->flashdata('thanhcong'); ?>
					
					<h3 class="text-center">Đăng ký tài khoản</h3>
					<div class="wrap-form">
						<form action="<?php echo base_url(); ?>myAcc/login_controller/addAccount" method="post">
							<div class="row mb-2">
								<div class="col-md-3">
									<!-- <label for="acc">Tên đăng nhập:</label> -->
								</div>
								<div class="col-md-9">
									<input type="text" name="user_acc" value="<?php echo set_value('user_acc'); ?>" id="user_acc" class="form-control input-login" placeholder="Tên đăng nhập">
									<small class="text-warning"><?php echo form_error('user_acc'); ?></small>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-md-3">
									<!-- <label for="pass">Mật khẩu:</label> -->
								</div>
								<div class="col-md-9">
									<input type="password" name="user_pass" value="<?php echo set_value('user_pass'); ?>" id="user_pass" class="form-control input-login" placeholder="Mật khẩu">
									<small class="text-warning"><?php echo form_error('user_pass'); ?></small>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-md-3">
									<!-- <label for="repass">Nhập lại mật khẩu:</label> -->
								</div>
								<div class="col-md-9">
									<input type="password" name="user_repass" id="user_repass" value="<?php echo set_value('user_repass'); ?>" class="form-control input-login" placeholder="Nhập lại mật khẩu">
									<small class="text-warning"><?php echo form_error('user_repass'); ?></small>
								</div>
							</div>
							<div class="row mb-2">
								<div class="col-md-3">
									<!-- <label for="fullname">Họ tên:</label> -->
								</div>
								<div class="col-md-9">
									<input type="text" id="user_firstname" name="user_firstname" id="user_fullname" value="<?php echo set_value('user_firstname'); ?>" class="form-control input-login" placeholder="Họ">
									<small class="text-warning"><?php echo form_error('user_firstname'); ?></small>
								</div>
								
							</div>
							<div class="row mb-2">
								<div class="col-md-3">
									<!-- <label for="fullname">Họ tên:</label> -->
								</div>
								<div class="col-md-9">
									<input type="text" id="user_lastname" name="user_lastname" id="user_lastname" value="<?php echo set_value('user_lastname'); ?>" class="form-control input-login" placeholder="Tên">
									<small class="text-warning"><?php echo form_error('user_lastname'); ?></small>
								</div>
							</div>

							<div class="row mb-2">
								<div class="col-md-3">
									<!-- <label for="fullname">Họ tên:</label> -->
								</div>
								<div class="col-md-9">
									<select class="form-control input-login" name="user_sex" id="user_sex">
										<option value="Nam">Nam</option>
										<option value="Nữ">Nữ</option>
									</select>
								</div>
							</div>
							
							<div class="row but-register">
								<button type="submit" class="btn btn-outline-success">Đăng ký</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>




	<script src="<?php base_url(); ?>01.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>	