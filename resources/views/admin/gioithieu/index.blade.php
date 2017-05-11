@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>

<div class="templatemo-content-container">
					
<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Giới thiệu website</h2>
	<?php 
	if (Session::has('msg'))
	{
	?>
		<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
	<?php
	}
	 ?>

	
	<form action="{{route('admin.gioithieu.index')}}" class="templatemo-login-form" id="edit_gt" method="post" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row form-group">
			<div class="col-lg-12 form-group">
			<p>Giới thiệu website sẽ được hiện lên ở trang chủ.</p>
			<p>(*): Không được để trống</p>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Giới thiệu</label>
				<textarea name="gt" rows="7" cols="90" class="input-long ckeditor" style="visibility: hidden; display: none;">{{$arGioiThieus[0]['gt']}}</textarea>
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			</div>
		</div>

		<div class="form-group text-right">
		<input type="submit"  name="submit"  class="templatemo-blue-button" value="Cập nhật"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>


@endsection