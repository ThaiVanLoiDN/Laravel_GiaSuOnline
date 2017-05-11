@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-content-container">
<script type="text/javascript" src="/resources/assets/templates/admin/js/loader.js">

</script>
<script type="text/javascript">
    google.charts.load("current", {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Tên", "Số lượng", {
                role: "style"
            }],

            <?php foreach ($arDemBaiViet as $key => $arDemBV): 
            $fullname_qt = $arDemBV['fullname_qt'];
            $baiviet = $arDemBV['baiviet'];

        ?>
          

        ["{{$fullname_qt}}", {{$baiviet}}, "#333b48"],

        <?php endforeach ?>


        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1, {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {
            title: "Số bài viết của người dùng",
            bar: {
                groupWidth: "95%"
            },
            legend: {
                position: "none"
            },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
</script>
<div class="templatemo-flex-row flex-content-row">
    <div class="templatemo-content-widget white-bg col-2">
        <i class="fa fa-times"></i>
        <div id="columnchart_values" class="templatemo-chart">
        </div>
    </div>
    <div class="templatemo-content-widget white-bg col-2">
        <i class="fa fa-times"></i>
        <h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Thống kê</h2>
        <table class="table table-striped table-bordered templatemo-user-table">
            <thead>
                <tr align="center">
                    <th>Cấp bậc</th>
                    <th>Số user</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($arDemQuanTri as $key => $arDemQT): 
                    $dem = $arDemQT['dem'];
                    $id_chuc = $arDemQT['id_chuc'];

                    switch ($id_chuc) {
                        case '0':
                            $tenchuc = 'Mem';
                            break;
                        case '1':
                            $tenchuc = 'Mod';
                            break;
                        case '2':
                            $tenchuc = 'Smod';
                            break;
                        case '3':
                            $tenchuc = 'Admin';
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                ?>
                    
                <tr align="center">
                    <td>{{$tenchuc}}</td>
                    <td>{{$dem}}</td>
                </tr>

                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>


	<div class="templatemo-content-widget white-bg">
		<div class="bottom-spacing">
			<!-- Button -->
			<a href="#" title="Add" class="templatemo-white-button" data-toggle="modal" data-target="#AddQuanTri">Add</a>
		</div>
		<h2 class="text-uppercase margin-bottom-10 text-center">Quản trị viên</h2>
		<?php 
		if (Session::has('msg'))
		{
		?>
			<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
		<?php
		}
		 ?>

         <?php 
        if (Session::has('msgDanger'))
        {
        ?>
            <div class="alert alert-danger"><p><strong><?php echo Session::get('msgDanger'); ?></strong></p></div>
        <?php
        }
         ?>
		
		<form action="{{route('admin.lienhe.delnhieu')}}" method="POST">
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr class="text-center">
							<th>ID</th>
							<th>Username</th>
							<th>Họ tên</th>
							<th>Email</th>
							<th>Chức vụ</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arQuanTris as $key => $arQuanTri):
							$id_qt = $arQuanTri['id'];
							$username_qt = $arQuanTri['username_qt'];
							$fullname_qt = $arQuanTri['fullname_qt'];
							$mail_qt = $arQuanTri['mail_qt'];
							$id_chuc = $arQuanTri['id_chuc'];
							$tenchuc = "";
							switch ($id_chuc) {
								case 0:
									$tenchuc = "Mem";
									break;
								case 1:
									$tenchuc = "Mod";
									break;
								case 2:
									$tenchuc = "Smod";
									break;
								case 3:
									$tenchuc = "Admin";
									break;	
								default:
									# code...
									break;
							}
							$url = route('admin.quantri.del', ['id' => $id_qt]);
						?>
						<tr>
                            <td class="text-center">{{$key + 1}}</td>
							<td class="hidden id_qt">{{$id_qt}}</td>
							<td class="text-center username_qt">{{$username_qt}}</td>
							<td class="text-center fullname_qt">{{$fullname_qt}}</td>
							<td class="text-center mail_qt">{{$mail_qt}}</td>
							<td class="text-center">{{$tenchuc}}<span class="hidden id_chuc">{{$id_chuc}}</span></td>
							
							<td align="center">
								<a href="" class="sua-quan-tri" data-toggle="modal" data-target="#EditQuanTri">Sửa</a> 
                                <?php 
                                    if($id_qt != 1){
                                 ?>
                                 /
								<a href="{{$url}}" onclick="return confirmAction()">Xóa</a>
                                <?php
                                    }
                                ?>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arQuanTris->links(); ?>
			</div>	
		</form>
		
	</div>	
<script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script>

<!-- Modal admin -->
<div class="modal fade" id="AddQuanTri" tabindex="-1" role="dialog" aria-labelledby="AddQuanTri" aria-hidden="true">
  <div class="modal-dialog modal-md">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
		<h4 class="modal-title" >Quản trị viên</h4>
	  </div>
	  <div class="modal-body">
			<div class="text-center">
			
			<div class="templatemo-content-widget white-bg">
				<h2 class="margin-bottom-10 h2-quan-tri">Thêm quản trị viên</h2>
				<p>(*): Không được để trống</p>
				<form action="{{route('admin.quantri.add')}}" class="templatemo-login-form" id="add_user" method="post" enctype="multipart/form-data" novalidate="novalidate">		
					<div class="row form-group">
						<label class="col-sm-4 control-label" for="username_qt">Username (*)</label>
						<div class="col-sm-8">
							<input type="text" name="username_qt" class="form-control nhap_username_qt" placeholder="Nhập username" id = "username_qt">
							<input type="hidden" name="id_qt" value="" class="nhap_id_qt">
						</div>
					</div>
					
					<div class="row form-group">
						
						<label class="col-sm-4 control-label" for="password_qt">Mật khẩu (*)</label>
						<div class="col-sm-8">
							<input type="password" name="password_qt" class="form-control" id="password_qt" placeholder="Nhập mật khẩu">
						</div>
						
					</div>
					
					<div class="row form-group">
						<label class="col-sm-4 control-label" for="repassword_qt">Nhập lại mật khẩu (*)</label>
						<div class="col-sm-8">
							<input type="password" name="repassword_qt" id="repassword_qt" class="form-control"  placeholder="Nhập lại mật khẩu">
						</div>
					</div>
					
					<div class="row form-group">
						<label class="col-sm-4 control-label" for="fullname_qt">Tên đầy đủ (*)</label>
						<div class="col-sm-8">
							<input type="text" name="fullname_qt" id="fullname_qt" class="form-control nhap_fullname_qt" placeholder="Tên đầy đủ">
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-4 control-label" for="mail_qt">Email (*)</label>
						<div class="col-sm-8">
							<input type="email" name="mail_qt" id="mail_qt" class="form-control nhap_mail_qt" placeholder="Nhập email">
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-4 control-label templatemo-block" for="id_chuc">Chức vụ (*)</label>
						<div class="col-sm-8">
							<select name="id_chuc" class="form-control nhap_id_chuc" id="id_chuc">
								<option value="0">Mem</option>	
								<option value="1">Mod</option>
								<option value="2">Smod</option>
								<option value="3">Admin</option>
							</select>
						</div>
					</div>
					
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group text-right">
					<input type="submit"  name="submit"  class="templatemo-blue-button" value="Submit"/>
					<input type="reset" class="templatemo-white-button" value="Reset" />
					</div>													 
				</form>
			</div>
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
	  </div>
	</div>
  </div>
</div>

<!-- Modal edit admin -->
<div class="modal fade" id="EditQuanTri" tabindex="-1" role="dialog" aria-labelledby="EditQuanTri" aria-hidden="true">
  <div class="modal-dialog modal-md">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
		<h4 class="modal-title" >Quản trị viên</h4>
	  </div>
	  <div class="modal-body">
			<div class="text-center">
			
			<div class="templatemo-content-widget white-bg">
				<h2 class="margin-bottom-10">Sửa quản trị viên</h2>
				<p>(*): Không được để trống</p>
				<form action="{{route('admin.quantri.edit')}}" class="templatemo-login-form" id="edit_user" method="post" enctype="multipart/form-data" novalidate="novalidate">		
					<div class="row form-group">
						<label class="col-sm-4 control-label" for="username_qt">Username (*)</label>
						<div class="col-sm-8">
							<input type="text" name="username_qt" class="form-control nhap_username_qt" placeholder="Nhập username" id = "username_qt">
							<input type="hidden" name="id_qt" value="" class="nhap_id_qt">
						</div>
					</div>
					
					<div class="row form-group">
						
						<label class="col-sm-4 control-label" for="password_qt">Mật khẩu (*)</label>
						<div class="col-sm-8">
							<input type="password" name="password_qt" class="form-control" id="password_qt2" placeholder="Nhập mật khẩu">
						</div>
						
					</div>
					
					<div class="row form-group">
						<label class="col-sm-4 control-label" for="repassword_qt2">Nhập lại mật khẩu (*)</label>
						<div class="col-sm-8">
							<input type="password" name="repassword_qt" id="repassword_qt2" class="form-control"  placeholder="Nhập lại mật khẩu">
						</div>
					</div>
					
					<div class="row form-group">
						<label class="col-sm-4 control-label" for="fullname_qt">Tên đầy đủ (*)</label>
						<div class="col-sm-8">
							<input type="text" name="fullname_qt" id="fullname_qt" class="form-control nhap_fullname_qt" placeholder="Tên đầy đủ">
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-4 control-label" for="mail_qt">Email (*)</label>
						<div class="col-sm-8">
							<input type="email" name="mail_qt" id="mail_qt" class="form-control nhap_mail_qt" placeholder="Nhập email">
						</div>
					</div>

					<div class="row form-group">
						<label class="col-sm-4 control-label templatemo-block" for="id_chuc">Chức vụ (*)</label>
						<div class="col-sm-8">
							<select name="id_chuc" class="form-control nhap_id_chuc" id="id_chuc">
								<option value="0">Mem</option>	
								<option value="1">Mod</option>
								<option value="2">Smod</option>
								<option value="3">Admin</option>
							</select>
						</div>
					</div>
					
					<input type="hidden" name="_token" value="{{csrf_token()}}">

					<div class="form-group text-right">
					<input type="submit"  name="submit"  class="templatemo-blue-button" value="Submit"/>
					<input type="reset" class="templatemo-white-button" value="Reset" />
					</div>													 
				</form>
			</div>
		</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
	  </div>
	</div>
  </div>
</div>
<script type="text/javascript">
$(function(){
	$(document).on('click','.sua-quan-tri', function(){

		row = $(this).closest("tr");

		id_qt = row.find(".id_qt").text();
		username_qt = row.find(".username_qt").text();
		fullname_qt = row.find(".fullname_qt").text();
		mail_qt = row.find(".mail_qt").text();
		id_chuc = row.find(".id_chuc").text();
		
		$('.nhap_id_qt').val(id_qt);
		$('.nhap_username_qt').val(username_qt);
		$('.nhap_fullname_qt').val(fullname_qt);
		$('.nhap_mail_qt').val(mail_qt);
		$('.nhap_id_chuc').val(id_chuc);
		

	});
});
</script>


@endsection