@extends('templates.public.template')
@section('main')
<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<div class="panel panel-default form-dang-ky">
					<?php 
					if (Session::has('msg'))
					{
					?>
						<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
					<?php
					}
					if (Session::has('msgdanger'))
					{
					?>
						<div class="alert alert-danger"><p><strong><?php echo Session::get('msgdanger'); ?></strong></p></div>
					<?php
					}
					 ?>
					<div class="panel-heading">
						<h3 class="panel-title">Đăng ký gia sư</h3>
					</div>
					<div class="panel-body">
						<form id="signupForm1" method="post" class="form-horizontal" action="">
							<div class="form-group">
								<label class="col-sm-4 control-label" for="username">Username</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="username" name="username" placeholder="Username" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="fullname">Tên đầy đủ</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập họ và tên" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="password">Mật khẩu</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="repassword">Nhập lại mật khẩu</label>
								<div class="col-sm-5">
									<input type="password" class="form-control" id="repassword" name="repassword" placeholder="Nhập lại mật khẩu ở trên" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="email">Email</label>
								<div class="col-sm-5">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="reemail">Nhập lại email</label>
								<div class="col-sm-5">
									<input type="email" class="form-control" id="reemail" name="reemail" placeholder="Nhập lại email ở trên" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="id_quan">Quận huyện</label>
								<div class="col-sm-5">
						            <select class="form-control" name="id_quan">
										<?php foreach ($arQuans as $key => $arQuan): 
											$id_quan = $arQuan['id_quan'];
											$tenquan = $arQuan['tenquan'];
										?>
										<option value="{{$id_quan}}">{{$tenquan}}</option>
										<?php endforeach ?>
						            </select>
					            </div>
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="phone">Số điện thoại</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập số điện thoại" />
								</div>
								<input type="hidden" name="_token" value="{{csrf_token()}}">
							</div>

							<div class="form-group">
								<label class="col-sm-4 control-label" for="address">Địa chỉ</label>
								<div class="col-sm-5">
									<input type="text" class="form-control" id="address" name="address" placeholder="Nhập địa chỉ" />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-9 col-sm-offset-4">
									<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Sign up</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection