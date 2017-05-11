@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
 <?php
	$id_sl = $arSlides[0]['id_sl'];
	$tensl = $arSlides[0]['tensl'];
	$img_sl = $arSlides[0]['img_sl'];
	$link_sl = $arSlides[0]['link_sl'];
	$mota_sl = $arSlides[0]['mota_sl'];
 ?>

<div class="templatemo-content-container">
					
<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa slide</h2>
	<p>(*): Không được để trống</p>
	<form action="" class="templatemo-login-form" id="addslide" method="post" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row form-group">
			<div class="col-lg-6 col-md-6 form-group">
				<label>Tên slide (*)</label>
				<input type="text" name="tensl" class="form-control" id="inputFirstName" placeholder="Nhập tên bài viết" value="{{$tensl}}">
			</div>

			<div class="col-lg-6 col-md-6 form-group">
				<label>Link slide (*)</label>
				<input type="text" name="link_sl" class="form-control" id="inputFirstName" placeholder="Nhập tên bài viết" value="{{$link_sl}}">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12">
				<label class="control-label templatemo-block">Hình ảnh</label> 

				<div class="avatar-img-container">
					<?php if ($img_sl != ""): ?>
						<img id="avartar-img-show" src="/storage/files/{{$img_sl}}" alt="avatar"  >
					<?php else: ?>
						
						<img id="avartar-img-show" src="{{$urlAdmin}}/images/noimage.jpg" alt="avatar">
					<?php endif ?>
				</div>
				
				<!-- Show image before upload file jquery -->
				
				<input type="file" name="img_sl" value="" class="form-control"
					onchange="viewImg(this)">
				<script>
					function viewImg(img) {
						var fileReader = new FileReader;
						fileReader.onload = function(img) {
							var avartarShow = document.getElementById("avartar-img-show");
							
							avartarShow.src = img.target.result
						}, fileReader.readAsDataURL(img.files[0])
					}
				</script>								
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Mô tả (*)</label>
				<textarea name="mota_sl" class="form-control" id="inputNote" rows="3">{{$mota_sl}}</textarea>
			</div>
		</div>
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group text-right">
		<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>
</div>
@endsection