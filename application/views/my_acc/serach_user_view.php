<?php 
		/*echo '<pre>';
		print_r($serach_user);
		echo '</pre>';

		echo '<pre>';
		print_r($get_list_friend);
		echo '</pre>';*/
	
 ?>


<div class="container">
	<script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
      });
    </script>
	<div class="row">
		<?php foreach($serach_user as $key => $value): ?>
			<?php if($value['user_id']==$this->session->userdata('user_id') )continue; ?>

		<div data-toggle="tooltip" data-placement="right" title="Bạn có chắc muốn xóa bạn!" style="padding-left: 111px; margin-bottom: 20px" class="col-md-4">
			<a style="text-decoration: none; color: black" href="<?php echo base_url();?>yourAcc/yourIndex_controller/get_info_yourFriend/<?php echo $value['user_id'] ?>">
				<img style="width:150px; height: 150px; object-fit: cover; border-radius: 50%" src="<?php echo base_url(); ?>img/img-avt/<?php echo $value['user_avt'] ?>" class="img-fluid">
			<h5 style="margin-top:10px; padding-right: 100px; text-align: center;"><?php echo $value['user_firstname'].' '.$value['user_lastname'] ?></h5>
			</a>
			<?php $name=""; 
				foreach($get_list_friend as $value_2) {
					if($value_2['list_user_id']==$value['user_id']){
						$name ="Bạn bè";break;
					}
					else {
						$name ="Kết bạn";
					}
				}
			?>
			<?php if($name=="Kết bạn"){ ?>
			<a style="margin-left: 26px" href="<?php echo base_url();?>myAcc/myIndex_controller/addFriend/<?php echo $value['user_id'] ?>">
				<button class="btn btn-outline-success"><span class="glyphicon glyphicon-plus" ariahidden="true"></span><?php
				 	 echo $name;
				 ?></button>
			</a>
		<?php }else if($name="Bạn bè"){ ?>
			<a style="margin-left: 26px" href="">
				<button class="btn btn-outline-success"><span class="glyphicon glyphicon-plus" ariahidden="true"></span><?php
				 	 echo $name;
				 ?></button>
			</a>
		<?php } ?>
		</div>
	<?php endforeach ?>
	</div>
</div>