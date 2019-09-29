<div id="main" class="col-sm-12 col-md-6 mb-4">
	<?php 
	/*echo '<pre>';
	print_r($get_list_like);
	echo '</pre>';*/
	?>
	
	<!-- #POST STT, PIC -->
	<div id="" class="card">
		<div class="card-header bg-dark text-white">Your post</div>
		<div class="card-body">
			<form id="new-message">
				<div class="input-group">
					<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="2"></textarea>
					<span class="input-group-addon">
						<i class="fas fa-camera cam"><input type="file" class="form-control-file up-img"></i>
					</span>
				</div>
				<button type="submit" class="btn btn-outline-success btn-block mt-3 float-right">Đăng</button>
			</form>
		</div>
	</div><!-- #endPOST STT, PIC -->
	<!-- #END POST STT, PIC -->

	<!-- #SHOW STT, PIC -->
	<?php foreach($getPost as $key => $value): ?>
		<div id="main-card" class="card mt-2">
			<ul id="feed" class="list-unstyled mt-2">
				<li>
					<span class="avt-bar"><img src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_info_yourFriend[0]['user_avt']; ?>" alt=""></span>
					<div class="feed-post">
						<h6><?php echo $get_info_yourFriend[0]['user_firstname'].' '.$get_info_yourFriend[0]['user_lastname']; ?> <small>Vừa xong</small></h6>
						
						<p><?php echo $value['post_content']; ?></p>
						<span class="picTimeLine mt-3"><img data-toggle="modal" data-target="#picUloaded<?php echo $key; ?>" src="<?php echo base_url(); ?>img/img-upload/<?php echo $value['post_img']; ?>" alt=""></span>
					</div>


					<!-- MODAL FOR pic uploaded -->
					<div class="modal fade" id="picUloaded<?php echo $key; ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="<?php echo base_url(); ?>img/img-avt/<?php echo $get_info_yourFriend[0]['user_avt']; ?>" alt=""></span><?php echo $get_info_yourFriend[0]['user_firstname'].' '.$get_info_yourFriend[0]['user_lastname']; ?></h6>
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
					<!-- end MODAL FOR pic uploaded -->
					
					<!-- MODAL FOR stt uploaded -->
					
					<!-- END MODAL FOR stt uploaded -->

					<!-- icon: like, comment -->
					<div class="action-list mt-2">
						<form action="<?php echo base_url(); ?>yourAcc/yourIndex_controller/addLike" method="post">
							<?php 
								/*foreach($get_list_like as $value_like){
									//neu posts (bai post nay la cua user dang onl) co nguoi like
										if($value['post_id']==$value_like['post_id']) {
											//neu post nay co nguoi like
											//va neu nhu user dang onl co like bai viet nay
												if( $value_like['user_id']==$this->session->userdata('user_id')) {
												echo '
												<button style="opacity: 0.4"  class="btn btn-primary">
												<i class="far fa-thumbs-up"></i>
												</button>
												';
												break;
											}
											//nguoc lai post nay co nguoi like
											//nhung user dang onl k like bai nay
											else {
												echo '
												<button type="submit" class="btn btn-primary">
												<i class="far fa-thumbs-up"></i>
												</button>
												';
												break;
											}
										}
										//nguoc lai neu posts k co nguoi like
										else {
											echo '
												<button type="submit" class="btn btn-primary">
												<i class="far fa-thumbs-up"></i>
												</button>
												';
												break;
										}
								}*/
							 ?>
							<button type="submit" class="btn btn-primary">
								<i class="far fa-thumbs-up"></i>
							</button>
							<input type="hidden" name="post_id" value="<?php echo $value['post_id']; ?>">
							<input type="hidden" name="user_id" value="<?php echo $value['user_id']; ?>">
							<span class="retweet-count">
								6
								<?php 
									/*$count_like=0;
									foreach($get_list_like as $key_like02 => $value_like02) {
										if($value['post_id']==$value_like02['post_id']){
											$count_like +=1;
										}
									}
									if($count_like==0){
										echo "";
									}
									else {
										echo $count_like;
									}*/

								?>
							</span>
						</form>
						<!-- <i class="fas fa-comment-dots ml-2 input-cmt iconcmt"></i> -->
					</div>
				</li>
			</ul>
			<!-- comment -->
			<div class="card-footer">
				<form action="<?php echo base_url(); ?>yourAcc/yourIndex_controller/addComment" method="post" enctype="multipart/form-data">
					<div class="input-group mb-3 showCmt">
						<input type="text" name="cmt_content" id="cmt" class="form-control">
						<input type="hidden" value="<?php echo $value['post_id']; ?>" name="post_id" class="form-control">
						<input type="hidden" value="<?php echo $value['user_id']; ?>" name="user_id" class="form-control">
						<button type="submit" class="btn btn-outline-success">Gửi</button>
					</div>
				</form>


				<?php 
					/*echo '<pre>';
					print_r($get_comment);
					echo '</pre>';*/

					$html="";
								//
					if($key < count($get_comment)) {
									//echo $load_comment[$key]['post_id'];
						foreach($get_comment as $key2 => $value2) {
						//
							if($value["post_id"] == $value2["post_id"]) {
								echo $html = '<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="'.base_url().'img/img-avt/'.$value2['user_avt'].'" alt=""></span>'.$value2['user_firstname'].' '.$value2['user_lastname'].'</h6>
								<p class="cmt-text">'.$value2['cmt_content'].'</p>';
							}
						}
					}


					?>
					
				</div>
				<!-- end comment -->
			</div>
		<?php endforeach ?>
		<!-- #end SHOW STT, PIC -->
	</div>