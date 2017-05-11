@extends('templates.public.template')
@section('main')

<?php 

foreach ($arThongTinPhuHuynhs as $key => $arThongTinPhuHuynh) {
	$id_ph = $arThongTinPhuHuynh['id_ph'];
	$username_ph = $arThongTinPhuHuynh['username_ph'];
	$fullname_ph = $arThongTinPhuHuynh['fullname_ph'];
	$mail_ph = $arThongTinPhuHuynh['mail_ph'];
	$phone_ph = $arThongTinPhuHuynh['phone_ph'];
	$diachi_ph = $arThongTinPhuHuynh['diachi_ph'];
	$id_quan = $arThongTinPhuHuynh['id_quan'];
}
 ?>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2" style="padding: 30px 0px; ">
			<?php 
					if (Session::has('msg'))
					{
					?>
						<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
					<?php
					}
				?>	
			<div class="panel panel-default form-dang-ky">
				
				<div class="panel-heading">
					<h3 class="panel-title">Chỉnh sửa thông tin phụ huynh</h3>
				</div>
				<div class="panel-body">
		            <form id="editinfo" method="post" class="form-horizontal" action="">
						<div class="form-group">
							<label class="col-sm-4 control-label" for="firstname1">Username</label>
							<div class="col-sm-7">
								<p>{{$username_ph}}</p>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label" for="fullname_ph">Tên đầy đủ</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="{{$fullname_ph}}" id="fullname_ph" name="fullname_ph" placeholder="Nhập họ và tên" />
							</div>
						</div>

						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group">
							<label class="col-sm-4 control-label" for="password_ph">Mật khẩu</label>
							<div class="col-sm-7">
								<input type="password" class="form-control" id="password_ph" name="password_ph" placeholder="***************" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label" for="repassword_ph">Nhập lại mật khẩu</label>
							<div class="col-sm-7">
								<input type="password" class="form-control" id="repassword_ph" name="repassword_ph" placeholder="***************" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label" for="mail_ph">Email</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="{{$mail_ph}}" id="mail_ph" name="mail_ph" placeholder="Email" />
							</div>
						</div>						

						<div class="form-group">
							<label class="col-sm-4 control-label" for="id_quan">Quận huyện</label>
							<div class="col-sm-7">
					            <select class="form-control" name="id_quan">
									<?php foreach ($arQuans as $key => $arQuan): 
										$id_quan2 = $arQuan['id_quan'];
										$tenquan = $arQuan['tenquan'];

										$sel = "";

										if($id_quan == $id_quan2){
											$sel = 'selected="selected"';
										}
									?>
									<option value="{{$id_quan2}}" <?php echo $sel; ?> >{{$tenquan}}</option>
									<?php endforeach ?>
					            </select>
				            </div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label" for="phone_ph">Số điện thoại</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="{{$phone_ph}}" id="phone_ph" name="phone_ph" placeholder="Nhập số điện thoại" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label" for="diachi_ph">Địa chỉ</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="{{$diachi_ph}}" id="diachi_ph" name="diachi_ph" placeholder="Nhập địa chỉ" />
							</div>
						</div>
			            <div class="form-group text-center">
							<div class="col-sm-12"  style="padding-top: 10px;">
								<button type="submit" class="btn btn-primary" name="signup1" value="Chỉnh sửa">Chỉnh sửa</button>
							</div>
						</div>
		            </form>
				</div>
			</div>
		</div>
	</div>
</div>
  
@endsection