@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>

<div class="templatemo-content-container">
					
<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Thêm quảng cáo</h2>
	<p>(*): Không được để trống</p>
	<form action="" class="templatemo-login-form" id="addquangcao" method="post" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row form-group">
			<div class="col-lg-6 col-md-6 form-group">
				<label>Tên quảng cáo (*)</label>
				<input type="text" name="tenqc" class="form-control"  placeholder="Nhập tên bài viết">
			</div>
			<div class="col-lg-6 col-md-6 form-group">
				<label>Trạng thái (*)</label>
				<select name="is_activeqc" class="form-control">
					<option value="1">Hiển thị</option>
					<option value="0">Không hiển thị</option>
				</select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 col-md-12 form-group">
				<label>Link quảng cáo (*)</label>
				<input type="text" name="link_qc" class="form-control" placeholder="Nhập tên bài viết">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12">
				<label class="control-label templatemo-block">Hình ảnh</label> 

				<div class="avatar-img-container">
					<img id="avartar-img-show" src="{{$urlAdmin}}/images/noimage.jpg" alt="avatar" width="auto" height="300" >
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
		<input type="submit"  name="submit"  class="templatemo-blue-button" value="Thêm"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>
</div>
@endsection