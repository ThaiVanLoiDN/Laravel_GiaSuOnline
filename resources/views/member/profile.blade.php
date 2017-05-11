@extends('templates.public.template')
@section('main')

<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>
<?php 


foreach ($arInfoGiaSus as $key => $arInfoGiaSu) {
	$id_gs = $arInfoGiaSu['id_gs'];
	$fullname_gs = $arInfoGiaSu['fullname_gs'];
	$ngaysinh_gs = $arInfoGiaSu['ngaysinh_gs'];
	$time_register = date('d-m-Y',$arInfoGiaSu['time_register']);
	if($ngaysinh_gs == ""){
		$ngaysinh_gs = 'Không có thông tin';
	}
	$img_gs = $arInfoGiaSu['img_gs'];
	if($img_gs == ""){
		$img_gs = "no-avatar.png";
	}

	$mota_gs = $arInfoGiaSu['mota_gs'];
	if($mota_gs == ""){
		$mota_gs = 'Không có thông tin';
	}

	$diem = $arInfoGiaSu['diem'];
}
?>

<section class="white-bg">
	<div class="container">
		<div class="row" data-spy="scroll" data-target="#myScrollspy">
			<div class="col-md-9">
				<div class="mota">
					<h4 class="tieu-de">{{$fullname_gs}}</h4>
					<div class="ket-qua">
						<div class="row">
							<div class="col-md-6">
								<p>Quận/Huyện: <span class="text-grey">{{$arQuans[0]['qtenquan']}}</span></p>
								<p>Các môn dạy: <span class="text-grey">

								<?php 
								foreach ($arDangKyMons as $key => $arDangKyMon) {
									echo '- Môn '.$arDangKyMon['mtenmon'].' '.$arDangKyMon['ltenlop'];
								}
								 ?>

								</span></p>
							</div>
							<div class="col-md-6">
								<p>Ngày sinh: <span class="text-grey">{!!$ngaysinh_gs!!}</span></p>
								<p>Thời gian đăng ký: <span class="text-grey">{{$time_register}}</span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="mota">
					<h4 class="tieu-de">Tự giới thiệu</h4>
					<p class="text-justify">
						{!!$mota_gs!!}
					</p>
				</div>

		              	<h4 class="tieu-de"><label>Bình luận của phụ huynh</label></h4>
				<?php 
					if ($isConfirm){ 
				?>
				
				<form class="binh-luan" id="commentgs" method="post" action="javascript:void(0)">
					<div class="form-group">
		              <textarea class="form-control binhluan_gs" name="binhluan_gs" rows="3"></textarea>
		            </div>
		            <input type="hidden" id="token" value="{{ csrf_token() }}">
		            <div class="form-group text-right">
		            	<input type="submit" class="templatemo-blue-button" name="submit" value="Bình luận">
		            </div>
				</form>
				<?php 
					} 
				?>
				<div class="hien-thi-binh-luan">
				<?php 

					if (!count($arComments)) {
						echo '<div class="thay-the">Không có bình luận</div>';

					}else{
						echo '<div class="thay-the"></div>';
						foreach ($arComments as $key => $arComment) {
							$pfullname_ph = $arComment['pfullname_ph'];
							$noidung_cmt = $arComment['noidung_cmt'];
							$gio_cmt = date('h:i:s', $arComment['time_cmt']);
							$ngay_cmt = date('d-m-Y', $arComment['time_cmt']);
						?>	
					<div>
						<h5>{{$pfullname_ph}} <span> lúc {{$gio_cmt}} ngày {{$ngay_cmt}}</span></h5> 
						<p class="text-grey text-justify">{{$noidung_cmt}}</p>
					</div>
				<?php
						}
					}
				?>	
					
				</div>
				<div class="pagination-wrap"> 
                     <?php echo $arComments->links(); ?>
                </div>
			</div>
			<div class="col-md-3">
				<div class="text-center"><img src="/storage/files/{{$img_gs}}" class="img-responsive img-center" ></div>
				<h3 class="text-center">{{$fullname_gs}} &nbsp; &nbsp; 

					<?php 
						if ($isWait){ 
					?>

					<a href="{{URL::route('public.tuongtac.huy', $id_gs)}}" title="Đang chờ hồi âm"><i class="fa fa-spinner" aria-hidden="true"></i></a>

					<?php
		        		} elseif ($isConfirm){ 
					?>

					<a href="{{URL::route('public.tuongtac.huy', $id_gs)}}" title="Hủy yêu cầu"><i class="fa fa-user-times" aria-hidden="true"></i></a>

					<a href="{{URL::route('public.tuongtac.tinnhan', $id_gs)}}" title="Gửi tin nhắn"><i class="fa fa-inbox" aria-hidden="true"></i></a>

					<?php
		        		} else{
		        	?>
					<a href="{{URL::route('public.tuongtac.ketban', $id_gs)}}" title="Gửi yêu cầu"><i class="fa fa-user-plus" aria-hidden="true"></i></a>

		        	<?php
		        		}
		        	?>
					
				</h3>
	        	<h4 class="text-center khu-vuc-vote">
	        		<p class="so-sao">
	        			<img src="{{$urlPublic}}/img/{{$diem}}star.png" class="img-responsive img-center anh-so-sao" width="150px">
	        		</p>
	        		<p class="hidden bau-chon">
	        			<a href="javascript:void(0)" title="1 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 1)"></i></a>
						<a href="javascript:void(0)" title="2 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 2)"></i></a>
						<a href="javascript:void(0)" title="3 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 3)"></i></a>
						<a href="javascript:void(0)" title="4 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 4)"></i></a>
						<a href="javascript:void(0)" title="5 sao"><i class="fa fa-star-o" aria-hidden="true" onclick="vote(<?php echo $id_gs; ?>, 5)"></i></a>
	        		</p>
	        		

	        	</h4>

	        	<?php 
					if ($isConfirm){ 
				?>

	        	<div class="text-center khu-vuc-like">
	        		<?php
	        			if($liked == 0){
	        		?>
	        		<!-- <a href="{{URL::route('public.tuongtac.like', $id_gs)}}" title="Tôi thích người này" style="color: #cccccc;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> --> 

	        		<a href="javascript:void(0)" title="Tôi thích người này" style="color: #cccccc;" onclick="like(<?php echo $id_gs; ?>)"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
	        		{{$likes}}
	        		<?php 
	        			}else{
	        		?>
	        		
	        		<a href="javascript:void(0)" title="Tôi thích người này"><i class="fa fa-thumbs-up" aria-hidden="true" onclick="unlike(<?php echo $id_gs; ?>)"></i></a> {{$likes}}

	        		<?php
	        			}
	        		?>
	        		  &nbsp;  &nbsp;
	        		 <?php
	        			if($disliked == 0){
	        		?>
	        		<a href="javascript:void(0)" title="Tôi không thích người này" style="color: #cccccc;" onclick="dislike(<?php echo $id_gs; ?>)"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>{{$dislikes}}
	        		<?php 
	        			}else{
	        		?>
	        		<a href="javascript:void(0)" title="Tôi không thích người này"><i class="fa fa-thumbs-down" aria-hidden="true" onclick="undislike(<?php echo $id_gs; ?>)"></i></a>{{$dislikes}}

	        		<?php
	        			}
	        		?>
	        	</div>
	        	<?php
	        		} else{
	        	?>

	        	<div class="text-center">
	        		<i class="fa fa-thumbs-up" aria-hidden="true"></i> {{$likes}}
	        		  &nbsp;  &nbsp;
	        		<i class="fa fa-thumbs-down" aria-hidden="true"></i>{{$dislikes}}
	        	</div>

	        	<?php
	        		}
	        	?>
			</div>
		</div>
	</div>
</div> <!-- end greey-bg -->	

<script type="text/javascript">
$(function(){
	$(document).on('submit','#commentgs', function(){
		var binhluan_gs = $('.binhluan_gs').val();
		var id_gs = {{$id_gs}};

		$.ajax({
			url: "{{route('public.tuongtac.binhluan')}}",
			type: 'GET',
			cache: false,
			data: {
					
				abinhluan_gs: binhluan_gs,
				aid_gs : id_gs
			},
			success: function(data){
				$('.hien-thi-binh-luan').html(data);
				$('#commentgs').trigger("reset");
			},
			error: function (){
				//alert(id_gs+' '+binhluan_gs);
				alert('lỗi');
			}
		});		
	});
});
</script>
<script type="text/javascript">

	function like(id_gs) {

		$.ajax({
			url: "{{route('public.tuongtac.like')}}",
			type: 'GET',
			cache: false,
			data: {
				aid_gs: id_gs
			},
			success: function(data){
				$('.khu-vuc-like').html(data);
				//alert('OK');
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});		
	};

	function dislike(id_gs) {

		$.ajax({
			url: "{{route('public.tuongtac.dislike')}}",
			type: 'GET',
			cache: false,
			data: {
				aid_gs: id_gs
			},
			success: function(data){
				$('.khu-vuc-like').html(data);
				//alert('OK');
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});		
	};

	function unlike(id_gs) {

		$.ajax({
			url: "{{route('public.tuongtac.unlike')}}",
			type: 'GET',
			cache: false,
			data: {
				aid_gs: id_gs
			},
			success: function(data){
				$('.khu-vuc-like').html(data);
				//alert('OK');
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});		
	};

	function undislike(id_gs) {

		$.ajax({
			url: "{{route('public.tuongtac.undislike')}}",
			type: 'GET',
			cache: false,
			data: {
				aid_gs: id_gs
			},
			success: function(data){
				$('.khu-vuc-like').html(data);
				//alert('OK');
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});		
	};

	function vote(id_gs, diem) {

		$.ajax({
			url: "{{route('public.tuongtac.vote')}}",
			type: 'GET',
			cache: false,
			data: {
				aid_gs: id_gs,
				adiem: diem,
			},
			success: function(data){
				$('.khu-vuc-vote').html(data);
			},
			error: function (){
				alert('Có lỗi xảy ra');
			}
		});		
	};

	<?php 
		if ($isConfirm){ 
	?>
	$(document).ready(function() {
		$( ".so-sao" ).hover(
			function() {
				$(".so-sao").addClass( "hidden" );
			}
			, function() {
				$(".bau-chon").removeClass( "hidden" );
			}
		);
	});	

	<?php } ?>
	

</script>

@endsection