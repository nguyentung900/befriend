<?php foreach($yourPic as $key => $value): ?>
<div class="col-md-4 mb-4 img-album">
	<img style="object-fit: cover;" src="<?php echo base_url();?>img/img-upload/<?php echo $value['post_img'] ?>" class="img-fluid detail" alt="">
	<div class="img-bacground"></div>
	<div class="img-heart"><i class="fas fa-heart"></i></div>
</div>
<?php endforeach ?>


<!-- <div class="col-md-4 mb-4 img-album">
	<img src="<?php echo base_url();?>img/img-upload/hinh03.jpg" class="img-fluid detail" alt="">
	<div  data-toggle="modal" data-target="#picModal1" class="img-bacground"></div>
	<div class="img-heart"><i class="fas fa-heart"></i></div>

	MODAL FOR pic
	<div class="modal fade" id="picModal1">
		<div class="modal-dialog">
			<div class="modal-content">

				Modal Header
				<div class="modal-header">
					<h6 class="modal-title"><span class="avt-bar"><img class="img-fluid" src="https://images.pexels.com/photos/1229356/pexels-photo-1229356.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt=""></span>Nguyễn Thanh Tùng</h6>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				Modal body
				<div class="modal-body">
					<img width="400px" src="img/img-upload/hinh01.jpg" alt="">
				</div>

				Modal footer
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-success" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	end model
</div> -->


