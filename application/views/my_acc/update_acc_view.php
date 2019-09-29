<div class="col-md-4 col-left-setting">
					<ul class="list-group">
						<li class="list-group-item "><a href="<?php echo base_url(); ?>myAcc/my_updateAcc_controller">Tài khoản</a> <span class="float-right "><i class="fas fa-angle-double-right"></i></span></li>
						<li class="list-group-item active"><a href="<?php echo base_url(); ?>myAcc/myUpdate_info_controller">Thông tin cá nhân</a><span class="float-right"><i class="fas fa-angle-double-right"></i></span></li>
						<li class="list-group-item"><a href="">Bảo mật</a><span class="float-right"><i class="fas fa-angle-double-right"></i></span></li>
						<li class="list-group-item"><a href="">Điều khoản</a><span class="float-right"><i class="fas fa-angle-double-right"></i></span></li>
					</ul>
				</div>
				<div class="col-md-8 mb-5">
					<?php 
						/*echo '<pre>';
						print_r($updateAcc);
						echo '</pre>';*/
					 ?>
					 <?php echo $this->session->flashdata('thanhcong'); ?>
					<h3 class="text-center mb-5">Cập nhật tài khoản</h3>
					<?php foreach($getAcc as $key => $value): ?>
					<form method="post" action="<?php echo base_url(); ?>myAcc/my_updateAcc_controller/update_acc" enctype="multipart/form-data">
						<div class="form-group">
							<div class="row">
								<label class="col-sm-3 control-label"><strong>Tên đăng nhập:</strong></label>
								<div class="col-sm-9">
									<div class="input-group">
										<input required="" type="text" name="user_acc" id="user_acc" value="<?php echo $value['user_acc']; ?>" class="form-control input-login2"
										value="Nguyen Tung">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-sm-3 control-label"><strong>Mật khẩu:</strong></label>
								<div class="col-sm-9">
									<input required="" type="password" name="user_pass" id="user_pass" value="<?php echo $value['user_pass']; ?>" class="form-control input-login2"
									value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-sm-3 control-label"><strong>Nhập lại mật khẩu:</strong></label>
								<div class="col-sm-9">
									<input required="" type="password" name="user_repass" id="user_repass" value="<?php echo $value['user_pass']; ?>" class="form-control input-login2"
									value="">
									<p><small class="text-danger"><?php echo form_error('user_repass'); ?></small></p>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-sm-3 control-label"><strong>Tên:</strong></label>
								<div class="col-sm-9">
									<input required="" type="text" name="user_firstname" id="user_firstname" value="<?php echo $value['user_firstname']; ?>" class="form-control input-login2"
									value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<label class="col-sm-3 control-label"><strong>Họ:</strong></label>
								<div class="col-sm-9">
									<input required="" type="text" name="user_lastname" id="user_lastname" value="<?php echo $value['user_lastname']; ?>" class="form-control input-login2"
									value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-offset-3 col-sm-9">
									<button type="submit" class="btn btn-outline-success">
										Lưu
									</button>
								</div>
							</div>
						</div>
						</form>
					<?php endforeach ?>
					</div>
			
			