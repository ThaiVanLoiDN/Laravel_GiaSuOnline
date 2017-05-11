@extends('templates.admin.template')
@section('main')

<?php 
$urlPublic = getenv('ADMIN_TEMPLATE_URL');
 ?>

<div class="templatemo-content-container">
<?php 

foreach ($arPhuHuynhs as $key => $arPhuHuynh) {
	$username_ph = $arPhuHuynh['username_ph'];
	$fullname_ph = $arPhuHuynh['fullname_ph'];
	$mail_ph = $arPhuHuynh['mail_ph'];
	$phone_ph = $arPhuHuynh['phone_ph'];
	$img_ph = $arPhuHuynh['img_ph'];
	$diachi_ph = $arPhuHuynh['diachi_ph'];
	$ngaysinh_ph = $arPhuHuynh['ngaysinh_ph'];
	$xu_ph = $arPhuHuynh['xu_ph'];
	$mota_ph = $arPhuHuynh['mota_ph'];
	if($img_ph == ""){
		$img_ph = "no-avatar.png";
	}
	$id_quan = $arPhuHuynh['id_quan'];
}
 ?>

<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa phụ huynh</h2>
	<p>(*): Không được để trống</p>
	<form action="" class="templatemo-login-form" id="add_news" method="post" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row form-group">
			<div class="col-lg-6 col-md-6 form-group">
				<label>Username (*)</label>
				<input type="text" name="username_ph" class="form-control" id="" placeholder="Nhập username phụ huynh" value="{{$username_ph}}">
			</div>
			<div class="col-lg-6 col-md-6 form-group">
				<label>Họ tên phụ huynh (*)</label>
				<input type="text" name="fullname_ph" class="form-control" id="" placeholder="Nhập họ tên phụ huynh" value="{{$fullname_ph}}">
			</div>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="row form-group">
			<div class="col-lg-6 col-md-6 form-group">
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
			<div class="col-lg-6 col-md-6 form-group">
				<label>Email phụ huynh (*)</label>
				<input type="email" name="mail_ph" class="form-control" id="mail_ph" placeholder="Nhập email phụ huynh" value="{{$mail_ph}}">
			</div>
		</div>

		<div class="row form-group">
			<div class="col-lg-6 col-md-6 form-group">
				<label>Mật khẩu (*)</label>
				<input type="password" name="password_ph" class="form-control" id="password_ph" placeholder="Mật khẩu" value="">
			</div>
			<div class="col-lg-6 col-md-6 form-group">
				<label>Nhập lại mật khẩu (*)</label>
				<input type="password" name="repassword_ph" class="form-control" id="" placeholder="Nhập lại mật khẩu" value="">
			</div>
			
		</div>

		<div class="row form-group">
			<div class="col-lg-4 col-md-4 form-group">
				<label>Số điện thoại (*)</label>
				<input type="number" name="phone_ph" class="form-control" id="phone_ph" placeholder="Số điện thoại" value="{{$phone_ph}}">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Địa chỉ (*)</label>
				<input type="text" name="diachi_ph" class="form-control" id="diachi_ph" placeholder="Nhập tên phụ huynh" value="{{$diachi_ph}}">
			</div>
			<div class="col-lg-4 col-md-4 form-group">
				<label>Xu phụ huynh (*)</label>
				<input type="number" name="xu_ph" class="form-control" id="xu_ph" placeholder="Xu" value="{{$xu_ph}}">
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
    $( "#ngaysinh_ph" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>

@endsection