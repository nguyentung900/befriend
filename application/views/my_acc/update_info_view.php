
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
						print_r($getInfoAcc);
						echo '</pre>';*/
						?>
						<?php echo $this->session->flashdata('thanhcong'); ?>
						<h3 class="text-center mb-5">Thông tin cá nhân</h3>
						<?php foreach($getInfoAcc as $key => $value):
							$user_sex="";
							if($value['user_sex']==1){$user_sex.="Nam";}
							else{$user_sex.="Nữ";}
							?>
							<form action="<?php echo base_Url(); ?>myAcc/myUpdate_info_controller/update_infoAcc" method="post">
								<!-- <div class="form-group">
									<div class="row">
										<label class="col-sm-3 control-label">Giới tính:</label>
										<div class="col-sm-9">
											<div class="input-group">
												<input required="" name="user_sex" id="user_sex" type="text" class="form-control input-login2 "
												value="<?php echo $user_sex; ?>">
											</div>
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<div class="row">
										<label class="col-sm-3 control-label">Giới tính:</label>
										<div class="col-sm-9">
											<select class="form-control input-login2" name="user_sex" id="user_sex">
												<?php 
													if($user_sex=='Nam') {
														echo '
														<option value="Nam" selected>Nam</option>
														<option value="Nữ">Nữ</option>
														';
													}
													else if($user_sex=="Nữ"){
														echo '
														<option value="Nữ" selected>Nữ</option>
														<option value="Nam">Nam</option>
														';
													}
													else{
														echo '
														<option value="Nữ">Nữ</option>
														<option value="Nam">Nam</option>
														';
													}
												 ?>
												<!-- <option value="">Nam</option>
												<option value="">Nữ</option> -->
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-sm-3 control-label">SDT:</label>
										<div class="col-sm-9">
											<div class="input-group">
												<input required="" name="user_phone" id="user_phone" type="text" class="form-control input-login2"
												value="<?php echo $value['user_phone']; ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<label class="col-sm-3 control-label">Địa chỉ:</label>
										<div class="col-sm-9">
											<div class="input-group">
												<textarea name="user_address" id="user_address" cols="30" rows="2" class="form-control input-login2"><?php echo $value['user_address']; ?></textarea>
											</div>
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