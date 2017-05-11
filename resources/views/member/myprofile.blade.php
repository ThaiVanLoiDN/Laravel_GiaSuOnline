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
		<div class="row">
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
				<div class="hien-thi-binh-luan">
				<?php 

					if (!count($arComments)) {
						echo 'Không có bình luận';

					}else{
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
					<div class="pagination-wrap"> 
	                     <?php echo $arComments->links(); ?>
	                </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="text-center"><img src="/storage/files/{{$img_gs}}" class="img-responsive img-center" ></div>
				<h3 class="text-center">{{$fullname_gs}}&nbsp;  &nbsp;
					<a href="{{route('public.member.editprofile')}}" title="Chỉnh sửa thông tin">
						<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
					</a>
					<a href="{{route('public.member.dangkymon')}}" title="Đăng ký môn">
						<i class="fa fa-plus-square-o" aria-hidden="true"></i>
					</a>
				</h3>
	        	<h4 class="text-center">
	        		<img src="{{$urlPublic}}/img/{{$diem}}star.png" class="img-responsive img-center" width="150px">
	        	</h4>
	        	
	        	<div class="text-center">
	        		<i class="fa fa-thumbs-up" aria-hidden="true"></i> {{$likes}}
	        		  &nbsp;  &nbsp;
	        		<i class="fa fa-thumbs-down" aria-hidden="true"></i>{{$dislikes}}
	        	</div>
			</div>
		</div>
	</div>
</section>	

@endsection