@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>

<?php
	$id_qc = $arQuangCaos[0]['id_qc'];
	$tenqc = $arQuangCaos[0]['tenqc'];
	$img_qc = $arQuangCaos[0]['img_qc'];
	$link_qc = $arQuangCaos[0]['link_qc'];
	$is_activeqc = $arQuangCaos[0]['is_activeqc'];
 ?>
<div class="templatemo-content-container">
	<div class="templatemo-content-widget white-bg">
		<h2 class="margin-bottom-10">Thêm quảng cáo</h2>
		<p>(*): Không được để trống</p>
		<form action="" class="templatemo-login-form" id="addquangcao" method="post" enctype="multipart/form-data" novalidate="novalidate">
			<div class="row form-group">
				<div class="col-lg-6 col-md-6 form-group">
					<label>Tên quảng cáo (*)</label>
					<input type="text" name="tenqc" class="form-control" placeholder="Nhập tên bài viết" value="{{$tenqc}}">
				</div>
				<div class="col-lg-6 col-md-6 form-group">
					<label>Trạng thái (*)</label>
					<select name="is_activeqc" class="form-control">
						<option value="1" <?php if($is_activeqc ==1) echo 'selected="selected"'?> >Hiển thị</option>
						<option value="0" <?php if($is_activeqc ==0) echo 'selected="selected"'?> >Không hiển thị</option>
					</select>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-lg-12 col-md-12 form-group">
					<label>Link quảng cáo (*)</label>
					<input type="text" name="link_qc" class="form-control" placeholder="Nhập tên bài viết" value="{{$link_qc}}">
				</div>
			</div>
			
			<div class="row form-group">
				<div class="col-lg-12">
					<label class="control-label templatemo-block">Hình ảnh</label> 

					<div class="avatar-img-container">
					<?php if ($img_qc != ""): ?>
						<img id="avartar-img-show" src="/storage/files/{{$img_qc}}" alt="avatar"  >
					<?php else: ?>
						
						<img id="avartar-img-show" src="{{$urlAdmin}}/images/noimage.jpg" alt="avatar">
					<?php endif ?>
					</div>
					
					<!-- Show image before upload file jquery -->
					
					<input type="file" name="img_qc" value="" class="form-control"
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

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group text-right">
			<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
			<input type="reset" class="templatemo-white-button" value="Nhập lại" />
			</div>													 
		</form>
	</div>
</div>
@endsection