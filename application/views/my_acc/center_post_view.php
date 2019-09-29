<script language="javascript">
	function deleteConfirm(){
      if(confirm("Bạn có chắc chắn muốn xóa bài viết này!")){
        return true;
      }
       else{
          return false;
           }
}
</script> 
<div id="main" class="col-sm-12 col-md-6 mb-4">
	<?php 	
	/*echo '<pre>';
	print_r($get_list_like);
	echo '</pre>'; */
	
		//$load_comment = $load_comment(2,1);
		// echo '<pre>';
		// print_r($load_comment);
		// echo '</pre>';
		// echo count($load_comment);
		//echo $load_comment[0]['user_id'];
	//echo $this->session->userdata('user_acc');
	?>
	<!-- #POST STT, PIC -->
	<div id="" class="card">
		<div class="card-header bg-dark text-white">Tạo bài viết</div>
		<div class="card-body">
			<form action="<?php echo base_url();?>myAcc/myIndex_controller/addPost" method="post" id="new-message" enctype="multipart/form-data">
				<div class="input-group">
					<textarea required="" class="form-control rounded-0" name="post_content" id="exampleFormControlTextarea2" rows="2"></textarea>
					<span class="input-group-addon">
						<i class="fas fa-camera cam"><input type="file" name="post_img" class="form-control-file up-img"></i>
					</span>
				</div>
				<button type="submit" class="btn btn-outline-success btn-block mt-3 float-right">Đăng</button>
			</form>
		</div>
	</div><!-- #endPOST STT, PIC -->
	<!-- #END POST STT, PIC -->

	<!-- #SHOW STT, PIC -->
	<?php foreach($load_data_post as $key => $value): ?>

		<div id="main-card" class="card mt-2">
			<ul id="feed" class="list-unstyled mt-2">
				<li>
					<span class="avt-bar"><img src="<?php echo base_url(); ?>img/img-avt/<?php echo $this->session->userdata('user_avt'); ?>" alt=""></span>
					<div class="feed-post">
						<h6><?php echo $this->session->userdata('user_firstname').' '.$this->session->userdata('user_lastname'); ?><small></small></h6>
						<!-- nut xoa -->
						<span onclick="return deleteConfirm()" class="delete"><a href="<?php echo base_url(); ?>myAcc/myIndex_controller/deletePost/<?php echo $value['post_id']; ?>"><i class="fas fa-trash"></i></a></span>
						<!-- nút edit cho bai viet -->
						<span data-toggle="modal" data-target="#editStt<?php echo $key; ?>" class="edit"><i class="fas fa-pen"></i></span>
						<p> <?php echo $value['post_content'] ?></p>
						<span class="picTimeLine mt-3"><img data-toggle="modal" data-target="#picUloaded<?php echo $key; ?>" src="<?php echo base_url(); ?>img/img-upload/<?php echo $value['post_img'] ?>" alt=""></span>
					</div>


					<!-- MODAL FOR pic uploaded -->
					<div class="modal fade" id="picUloaded<?php echo $key; ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="<?php echo base_url(); ?>img/img-avt/<?php echo $this->session->userdata('user_avt'); ?>" alt=""></span><?php echo $this->session->userdata('user_firstname').' '.$this->session->userdata('user_lastname'); ?></h6>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<img width="469px" src="<?php echo base_url(); ?>img/img-upload/<?php echo $value['post_img']; ?>" alt="">
								</div>

								<!-- Modal footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-success" data-dismiss="modal">Đóng</button>
								</div>

							</div>
						</div>
					</div>
					<!-- end MODAL FOR pic uploaded -->

					<!-- MODAL FOR stt uploaded -->
					<div class="modal fade" id="editStt<?php echo $key; ?>">
						<div class="modal-dialog">
							<div class="modal-content">

								<!-- Modal Header -->
								<div class="modal-header">
									<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="https://images.pexels.com/photos/260447/pexels-photo-260447.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></span><?php echo $this->session->userdata('user_firstname').' '.$this->session->userdata('user_lastname'); ?></h6>
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Modal body -->
								<div class="modal-body">
									<form method="post" enctype="multipart/form-data" action="<?php echo base_url();?>myAcc/myIndex_controller/updatePost_content/<?php echo $value['post_id']; ?>">
										<div class="form-group">
											<label for="stt"><h6>Cập nhật trạng thái:</h6></label>
											<textarea required="" name="post_content" id="stt" cols="30" rows="5" class="form-control input-login3"><?php echo $value['post_content'] ?></textarea>
										</div>

									</div>

									<!-- Modal footer -->
									<div class="modal-footer">
										<div class="form-group">
											<button type="submit" class="btn btn-outline-success">Lưu</button>
											<button type="button" class="btn btn-outline-success" data-dismiss="modal">Đóng</button>
										</div>

									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END MODAL FOR stt uploaded -->

					<!-- icon: like, comment -->
					<div class="action-list mt-2">
						<form action="<?php echo base_url(); ?>myAcc/myIndex_controller/addLike/<?php echo $value['post_id']; ?>" method="post">
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
							<span class="retweet-count">
								<!-- 6 -->
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
			<div class="card-footer loadcmt" id="<?php echo 'tung'.$value['post_id']  ?>">
				<form action="<?php echo base_url(); ?>myAcc/myIndex_controller/addComment" method="post" enctype="multipart/form-data">
					<div class="input-group mb-3 showCmt" >
						<input type="text" value="" name="cmt_content" id="cmt_content" class="form-control">
						<input type="hidden" value="<?php echo $value['post_id']; ?>" name="post_id" id="post_id" class="form-control">
						<input type="hidden" value="<?php echo $value['user_id']; ?>" name="user_id" id="user_id" class="form-control">
						<button type="submit" class="btn btn-outline-success xulycmt" data-cartid="<?php echo 'tung'.$value['post_id']  ?>">Gửi</button>
					</div>
			</form>
				<?php 
					/*echo '<pre>';
					print_r($load_comment);
					echo '</pre>';*/

				$html="";
								//
				if($key < count($load_comment)) {
									//echo $load_comment[$key]['post_id'];
					foreach($load_comment as $key2 => $value2) {
						//
						if($value["post_id"] == $value2["post_id"]) {
							echo $html = '<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="'.base_url().'img/img-avt/'.$value2['user_avt'].'" alt=""></span>'.$value2['user_firstname'].' '.$value2['user_lastname'].'</h6>
							<p class="cmt-text">'.$value2['cmt_content'].'</p>';
						}
					}
				}


				?>
							<!-- <h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="https://images.pexels.com/photos/260447/pexels-photo-260447.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt=""></span>Nguyễn Thanh Tùng</h6>
								<p class="cmt-text">nguyen thanh nguyen thanh chieu hong nguyen thanh nguyen thanh chieu hong nguyen thanh nguyen thanh chieu hong nguyen thanh chieu hong nguyen thanh</p> -->

							</div>
							<!-- end comment -->
						</div>
					<?php endforeach ?>
					<!-- #end SHOW STT, PIC -->
				</div>

