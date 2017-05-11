@extends('templates.admin.template')
@section('main')

<?php 
$urlPublic = getenv('ADMIN_TEMPLATE_URL');
 ?>

<div class="templatemo-content-container">
<?php 

foreach ($arGiaSus as $key => $arGiaSu) {
	$username_gs = $arGiaSu['username_gs'];
	$fullname_gs = $arGiaSu['fullname_gs'];
	$mail_gs = $arGiaSu['mail_gs'];
	$phone_gs = $arGiaSu['phone_gs'];
	$img_gs = $arGiaSu['img_gs'];
	$diachi_gs = $arGiaSu['diachi_gs'];
	$ngaysinh_gs = $arGiaSu['ngaysinh_gs'];
	$xu_gs = $arGiaSu['xu_gs'];
	$mota_gs = $arGiaSu['mota_gs'];
	if($img_gs == ""){
		$img_gs = "no-avatar.png";
	}
	$id_quan = $arGiaSu['id_quan'];
}
 ?>

<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa Gia sư</h2>
	<p>(*): Không được để trống</p>
	<form action="" class="templatemo-login-form" id="editgs" method="post" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row form-group">
			<div class="col-lg-4 col-md-4 form-group">
				<label>Username (*)</label>
				<input type="text" name="username_gs" class="form-control" placeholder="Nhập username gia sư" value="{{$username_gs}}">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Họ tên gia sư (*)</label>
				<input type="text" name="fullname_gs" class="form-control"  placeholder="Nhập họ tên gia sư" value="{{$fullname_gs}}">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Quận huyện (*)</label>
				<select name="id_quan" class="form-control">
					<?php
						foreach ($arQuanHuyens as $arQuanHuyen) {
							$id_quan2 = $arQuanHuyen['id_quan'];
							$tenquan = $arQuanHuyen['tenquan'];

							$sel = "";
							if($id_quan == $id_quan2){
								$sel = 'selected = "selected"';
							}
					?>
					<option value="{{$id_quan2}}" <?php echo $sel; ?>>{{$tenquan}}</option>
					<?php
						}
					?>
				</select>
			</div>
		</div>

		<div class="row form-group">
			<div class="col-lg-4 col-md-4 form-group">
				<label>Mật khẩu (*)</label>
				<input type="password" name="password_gs" class="form-control" id="password_gs" placeholder="Mật khẩu" value="">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Nhập lại mật khẩu (*)</label>
				<input type="password" name="repassword_gs" class="form-control"  placeholder="Nhập lại mật khẩu" value="">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Email gia sư (*)</label>
				<input type="email" name="mail_gs" class="form-control" id="mail_gs" placeholder="Nhập email gia sư" value="{{$mail_gs}}">
			</div>
		</div>

		<div class="row form-group">
			<div class="col-lg-4 col-md-4 form-group">
				<label>Số điện thoại (*)</label>
				<input type="number" name="phone_gs" class="form-control" id="phone_gs" placeholder="Số điện thoại" value="{{$phone_gs}}">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Địa chỉ (*)</label>
				<input type="text" name="diachi_gs" class="form-control" id="diachi_gs" placeholder="Nhập tên gia sư" value="{{$diachi_gs}}">
			</div>
			<div class="col-lg-2 col-md-2 form-group">
				<label>Ngày sinh (*)</label>
				<input type="text" name="ngaysinh_gs" class="form-control" id="ngaysinh_gs" placeholder="YYYY-MM-DD" value="{{$ngaysinh_gs}}">
			</div>
			<div class="col-lg-2 col-md-2 form-group">
				<label>Xu gia sư (*)</label>
				<input type="number" name="xu_gs" class="form-control" id="xu_gs" placeholder="Xu" value="{{$xu_gs}}">
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12">
				<label class="control-label templatemo-block">Hình ảnh</label> 
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="avatar-img-container">
					<img id="avartar-img-show" src="/storage/files/{{$img_gs}}" alt="avatar" width="auto" height="200" >
				</div>
				
				<!-- Show image before upload file jquery -->
				
				<input type="file" name="img_gs" value="" class="form-control"
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
				<textarea name="mota_gs" class="form-control" id="inputNote" rows="3">{{$mota_gs}}</textarea>
			</div>
		</div>

		<div class="form-group text-right">
		<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>
 <script>
  $( function() {
    $( "#ngaysinh_gs" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>

@endsection