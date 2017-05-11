@extends('templates.public.template')
@section('main')

<?php 

foreach ($arThongTinGiaSus as $key => $arThongTinGiaSu) {
	$id_gs = $arThongTinGiaSu['id_gs'];
	$username_gs = $arThongTinGiaSu['username_gs'];
	$fullname_gs = $arThongTinGiaSu['fullname_gs'];
	$mail_gs = $arThongTinGiaSu['mail_gs'];
	$phone_gs = $arThongTinGiaSu['phone_gs'];
	$diachi_gs = $arThongTinGiaSu['diachi_gs'];
	$ngaysinh_gs = $arThongTinGiaSu['ngaysinh_gs'];
	$mota_gs = $arThongTinGiaSu['mota_gs'];
	$img_gs = $arThongTinGiaSu['img_gs'];
	$id_quan = $arThongTinGiaSu['id_quan'];
	$img_gs = $arThongTinGiaSu['img_gs'];
	if($img_gs == ""){
		$img_gs = 'no-avatar.png';
	}
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
			<?php 
				if (Session::has('msgdanger'))
				{
				?>
					<div class="alert alert-danger"><p><strong><?php echo Session::get('msgdanger'); ?></strong></p></div>
				<?php
				}
			?>	
			<div class="panel panel-default form-dang-ky">
				<div class="panel-heading">
					<h3 class="panel-title">Chỉnh sửa thông tin gia sư</h3>
				</div>
				<div class="panel-body">
					<div class="tabpane-container">
						<ul class="nav">
			                <li class="active col-lg-6 col-md-6 col-sm-6 col-xs-6"><a  href="#1a" data-toggle="tab">Cơ bản</a></li>
			                <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="#2a" data-toggle="tab">Nâng cao</a></li>
			            </ul>
			            <form id="editprofile" method="post" class="form-horizontal" action="" enctype="multipart/form-data">
			           		<div class="tab-content  col-xs-12 clearfix">
			                	<div class="tab-pane active" id="1a">
			                	
									<div class="form-group">
										<label class="col-sm-4 control-label" for="firstname1">Username</label>
										<div class="col-sm-7">
											<span>{{$username_gs}}</span>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label" for="fullname_gs">Tên đầy đủ</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" value="{{$fullname_gs}}" id="fullname_gs" name="fullname_gs" placeholder="Nhập họ và tên" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label" for="password_gs">Mật khẩu</label>
										<div class="col-sm-7">
											<input type="password" class="form-control" id="password_gs" name="password_gs" placeholder="***************" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label" for="repassword_gs">Nhập lại mật khẩu</label>
										<div class="col-sm-7">
											<input type="password" class="form-control" id="repassword_gs" name="repassword_gs" placeholder="***************" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label" for="mail_gs">Email</label>
										<div class="col-sm-7">
											<input type="text" class="form-control" value="{{$mail_gs}}" id="mail_gs" name="mail_gs" placeholder="Email" />
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
							<label class="col-sm-4 control-label" for="phone_gs">Số điện thoại</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" id="phone_gs" value="{{$phone_gs}}" name="phone_gs" placeholder="Nhập số điện thoại" />
							</div>
							<input type="hidden" name="_token" value="{{csrf_token()}}">
						</div>

						<div class="form-group">
							<label class="col-sm-4 control-label" for="diachi_gs">Địa chỉ</label>
							<div class="col-sm-7">
								<input type="text" class="form-control" value="{{$diachi_gs}}" id="diachi_gs" name="diachi_gs" placeholder="Nhập địa chỉ" />
							</div>
						</div>
				                </div>
			                
			     
				                <div class="tab-pane" id="2a">
									<div class="form-group">
										<label class="col-sm-4 control-label" for="ngaysinh_gs">Ngày sinh</label>
										<div class="col-sm-7">
											<input type="text" class="form-control"  value="{{$ngaysinh_gs}}" id="ngaysinh_gs" name="ngaysinh_gs" placeholder="YYYY-MM-DD" />
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label" for="mota_gs">Giới thiệu bản thân</label>
										<div class="col-sm-7">
											<textarea name="mota_gs" class="form-control" id="mota_gs" rows="5">{{$mota_gs}}</textarea>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-4 control-label" for="img_gss">Ảnh đại diện</label>
										<div class="col-sm-7"> 
											<div class="avatar-img-container">
												<img id="avartar-img-show" src="/storage/files/{{$img_gs}}" id="img_gss" alt="avatar" width="auto" height="200" class="img-center" >
											</div>
											
											<!-- Show image before upload file jquery -->
											
											<input type="file" name="img_gs" value="" class="form-control" onchange="viewImg(this)">
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
				                </div>
				            </div> 
				            <div class="form-group text-center">
								<div class="col-sm-12"  style="padding-top: 10px;">
									<button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Chỉnh sửa</button>
								</div>
							</div>
			            </form>
					</div>	
				</div>
			</div>
		</div>
	</div>
		
</div>

  <script>
  $( function() {
    $( "#ngaysinh_gs" ).datepicker({ dateFormat: 'yy-mm-dd' });
  } );
  </script>
  
@endsection