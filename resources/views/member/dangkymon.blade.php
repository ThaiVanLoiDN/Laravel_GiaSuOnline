@extends('templates.public.template')
@section('main')

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
				if (Session::has('msgdanger'))
				{
				?>
					<div class="alert alert-danger"><p><strong><?php echo Session::get('msgdanger'); ?></strong></p></div>
				<?php
				}
				 ?>
			<div class="panel panel-default form-dang-ky">
				<div class="panel-heading">
					<h3 class="panel-title">Đăng ký môn dạy</h3>
				</div>
				<div class="panel-body">

					<div class="tabpane-container">
						<form id="dangkymon" method="post" class="form-horizontal" action="">
							<div class="form-group">
								<div class="col-sm-12">
								<h3><strong>LƯU Ý </strong></h3>
								<p>- Bạn chỉ có thể đăng ký tối đa 3 môn học</p>
								<p>- Phụ huynh sẽ tìm kiếm các môn học dựa vào kết quả mà bạn đã đăng ký</p>
								<p>- Bạn có thể đăng ký một môn cho nhiều lớp</p>
								<p>- Và bạn cũng có thể đăng ký nhiều môn cho một lớp</p>
								<p>- Ngay cả khi tài khoản của bạn không đủ, bạn vẫn có thể đăng ký môn, tuy nhiên, phụ huynh sẽ không thể tìm thấy bạn trên hệ thống website GiaSuOnline</p>
								<hr />
								</div>
							</div>
							<div class="form-group">
								<?php 
									$id_mon1 = 0;
									$id_mon2 = 0;
									$id_mon3 = 0;
									
									$id_lop1 = 0;
									$id_lop2 = 0;
									$id_lop3 = 0;


									if(isset($arDangKyMoned[0])){
										$id_mon1 = $arDangKyMoned[0]['id_mon'];
										$id_lop1 = $arDangKyMoned[0]['id_lop'];							
									};

									if(isset($arDangKyMoned[1])){
										$id_mon2 = $arDangKyMoned[1]['id_mon'];
										$id_lop2 = $arDangKyMoned[1]['id_lop'];							
									};

									if(isset($arDangKyMoned[2])){
										$id_mon3 = $arDangKyMoned[2]['id_mon'];
										$id_lop3 = $arDangKyMoned[2]['id_lop'];							
									};
								 ?>
								<label class="col-sm-2 control-label" for="username">Lựa chọn 1:</label>
								<div class="col-sm-5">
									<label class="col-sm-2 control-label">Môn: </label>
									<div class="col-sm-7">
							            <select class="form-control" name="monhoc1">
							            <option value="">--Chọn môn--</option>
							              <?php foreach ($arMonHocs as $key => $arMonHoc): 
											$id_mon = $arMonHoc['id_mon'];
											$tenmon = $arMonHoc['tenmon'];

											$sel = "";
											if($id_mon1 > 0 && $id_mon == $id_mon1){
												$sel = 'selected';
											}
										?>
										<option value="{{$id_mon}}" <?php echo $sel; ?>>{{$tenmon}}</option>
										<?php endforeach ?>
							            </select>
							        </div>    
								</div>
								<div class="col-sm-5">
									<label class="col-sm-2 control-label">Lớp: </label>
									<div class="col-sm-7">
							            <select class="form-control" name="lophoc1">
							            <option value="">--Chọn lớp--</option>
							              <?php foreach ($arLopHocs as $key => $arLopHoc): 
											$id_lop = $arLopHoc['id_lop'];
											$tenlop = $arLopHoc['tenlop'];

											$sel = "";
											if($id_lop1 > 0 && $id_lop == $id_lop1){
												$sel = 'selected';
											}
										?>
										<option value="{{$id_lop}}" <?php echo $sel; ?> >{{$tenlop}}</option>
										<?php endforeach ?>
							            </select>
							        </div>    
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="username">Lựa chọn 2:</label>
								<div class="col-sm-5">
									<label class="col-sm-2 control-label">Môn: </label>
									<div class="col-sm-7">

							            <select class="form-control" name="monhoc2">
							            	<option value="">--Chọn môn--</option>
							              <?php foreach ($arMonHocs as $key => $arMonHoc): 
											$id_mon = $arMonHoc['id_mon'];
											$tenmon = $arMonHoc['tenmon'];

											$sel = "";
											if($id_mon2 > 0 && $id_mon == $id_mon2){
												$sel = 'selected';
											}
										?>
										<option value="{{$id_mon}}" <?php echo $sel; ?>>{{$tenmon}}</option>
										<?php endforeach ?>
							            </select>
							        </div>    
								</div>
								<div class="col-sm-5">
									<label class="col-sm-2 control-label">Lớp: </label>
									<div class="col-sm-7">
							            <select class="form-control" name="lophoc2">
							            	<option value="">--Chọn lớp--</option>
							              <?php foreach ($arLopHocs as $key => $arLopHoc): 
											$id_lop = $arLopHoc['id_lop'];
											$tenlop = $arLopHoc['tenlop'];

											$sel = "";
											if($id_lop2 > 0 && $id_lop == $id_lop2){
												$sel = 'selected';
											}
										?>
										<option value="{{$id_lop}}" <?php echo $sel; ?>>{{$tenlop}}</option>
										<?php endforeach ?>
							            </select>
							        </div>    
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="username">Lựa chọn 3:</label>
								<div class="col-sm-5">
									<label class="col-sm-2 control-label">Môn: </label>
									<div class="col-sm-7">
							            <select class="form-control" name="monhoc3">
							            <option value="">--Chọn môn--</option>
							              <?php foreach ($arMonHocs as $key => $arMonHoc): 
											$id_mon = $arMonHoc['id_mon'];
											$tenmon = $arMonHoc['tenmon'];

											$sel = "";
											if($id_mon3 > 0 && $id_mon == $id_mon3){
												$sel = 'selected';
											}
										?>
										<option value="{{$id_mon}}"<?php echo $sel; ?>>{{$tenmon}}</option>
										<?php endforeach ?>
							            </select>
							        </div>    
								</div>
								<div class="col-sm-5">
									<label class="col-sm-2 control-label">Lớp: </label>
									<div class="col-sm-7">
							            <select class="form-control" name="lophoc3">
							            	<option value="">--Chọn lớp--</option>
							              <?php foreach ($arLopHocs as $key => $arLopHoc): 
											$id_lop = $arLopHoc['id_lop'];
											$tenlop = $arLopHoc['tenlop'];

											$sel = "";
											if($id_lop3 > 0 && $id_lop == $id_lop3){
												$sel = 'selected';
											}
										?>
										<option value="{{$id_lop}}"<?php echo $sel; ?>>{{$tenlop}}</option>
										<?php endforeach ?>
							            </select>
							        </div>    
								</div>
							</div>
							
							<input type="hidden" name="_token" value="{{csrf_token()}}">

							<div class="form-group text-center">
								<div class="col-sm-12"  style="padding-top: 10px;">
									<button type="submit" class="btn btn-primary" name="signup1" value="Cập nhật">Cập nhật</button>
								</div>
							</div>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>	
</div>
@endsection