@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-content-container">
	<div class="templatemo-flex-row flex-content-row">
		<div class="templatemo-content-widget white-bg col-2">
			<a href="#" title="Add" class="templatemo-white-button" id="ModelChuyenMuc" data-toggle="modal" data-target="#AddCapHoc">Add</a>
			<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Cấp học</h2>
			<?php 
			if (Session::has('msgCap'))
			{
			?>
				<div class="alert alert-success"><p><strong><?php echo Session::get('msgCap'); ?></strong></p></div>
			<?php
			}
			 ?>
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table" >
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Tên cấp</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($arCaps as $key => $arCap) {
								$id_cap = $arCap['id_cap'];
								$tencap = $arCap['tencap'];
						?>
						<tr align="center">
							<td>{{$key+1}}</td>
							<td class="id-cap hidden">{{$id_cap}}</td>
							<td class="ten-cap">{{$tencap}}</td>
							<td><a href="" class="sua-cap-hoc" data-toggle="modal" data-target="#SuaCapHoc">Sửa</a></td>
							<td><a href="{{URL::route('admin.cap.del', $id_cap)}}" onclick="return confirmAction()">Xóa</a></td>
						</tr>
						<?php 
							}
						?>
					</tbody>
				</table>    
			</div>
		</div>
		<div class="templatemo-content-widget white-bg col-2">
            <div id="pie_chart_div" class="templatemo-chart"></div> <!-- Pie chart div -->
		</div>

	</div>	
	<script type="text/javascript" src="{{$urlAdmin}}/js/jsapi.js"></script> 
<script>
  google.load('visualization', '1.0', {'packages':['corechart']});
  google.setOnLoadCallback(drawChart); 
  
  function drawChart() {
      var data = new google.visualization.DataTable();
      data.addColumn('string', 'Topping');
      data.addColumn('number', 'lớp học');
      data.addRows([

      	<?php
      	
      		foreach ($arLopCaps as $key => $valuelue) {
  				$tencap = $valuelue['tencap'];
  				$soluong = $valuelue['soluong'];
      	?>

        ['<?php echo $tencap; ?>', <?php echo $soluong; ?>],

        <?php
        	}
        ?>

      ]);

      var options = {'title':'Số lớp học'};

      var pieChart = new google.visualization.PieChart(document.getElementById('pie_chart_div'));
      pieChart.draw(data, options);

      var barChart = new google.visualization.BarChart(document.getElementById('bar_chart_div'));
      barChart.draw(data, options);
  }

  $(document).ready(function(){
    if($.browser.mozilla) {
      $(window).bind('resize', function(e)
      {
        if (window.RT) clearTimeout(window.RT);
        window.RT = setTimeout(function()
        {
          this.location.reload(false);
        }, 200);
      });      
    } else {
      $(window).resize(function(){
        drawChart();
      });  
    }   
  });
  
</script>

	<div class="templatemo-flex-row flex-content-row">
		<div class="templatemo-content-widget white-bg col-2">
			<div class="bottom-spacing">
				<!-- Button -->
				<div class="float-left">
					<a href="#" title="Add" class="templatemo-white-button" id="ModelChuyenMuc" data-toggle="modal" data-target="#AddLopHoc">Add</a>
				</div>
				<div class="clear">
				</div>
			</div>
			<h2 class="text-uppercase margin-bottom-10 text-center">Lớp học</h2>
			<?php 
			if (Session::has('msg'))
			{
			?>
				<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
			<?php
			}
			 ?>
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table" id="myTable">
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Tên lớp</th>
							<th>Cấp học</th>
							<th>Chức năng</th>
						</tr>

					</thead>
					
					<tbody>
						<?php 
							foreach ($arLops as $key => $arLop):
							$id_lop = $arLop['id_lop'];
							$tenlop = $arLop['tenlop'];
							$tencap = $arLop['tencap'];
							$id_cap = $arLop['id_cap'];
						?>						
						<tr>
							<td class="text-center">{{$key+1}}</td>
							<td class="hidden id-lop">{{$id_lop}}</td>
							<td class="text-center ten-lop"><a href="">{{$tenlop}}</a></td>
							<td  class="text-center ten-cap">{{$tencap}}<span class="hidden id_cap">{{$id_cap}}</span></td>
							<td align="center">
								<a href="javascript:void(0)" class="sua-lop-hoc"  data-toggle="modal" data-target="#SuaLopHoc">
									Sửa
								</a>
								/
								<a href="{{URL::route('admin.lop.del', $id_lop)}}" onclick="return confirmAction()">
									Xóa
								</a>
							</td>
						</tr> 
						<?php endforeach ?>						
						</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arLops->links(); ?>
			</div>	
		</div>
		<div class="templatemo-content-widget white-bg col-2">
			<div class="bottom-spacing">
				<!-- Button -->
				<div class="float-left">
					<a href="#" title="Add" class="templatemo-white-button" id="ModelMonHoc" data-toggle="modal" data-target="#AddMonHoc">Add</a>
				</div>
				<div class="clear">
				</div>
			</div>
			<h2 class="text-uppercase margin-bottom-10 text-center">Môn học</h2>
			<?php 
			if (Session::has('msgMon'))
			{
			?>
				<div class="alert alert-success"><p><strong><?php echo Session::get('msgMon'); ?></strong></p></div>
			<?php
			}
			 ?>
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Tên môn</th>
							<th>Chức năng</th>
						</tr>

					</thead>
					
					<tbody>
						<?php 
							foreach ($arMonHocs as $key => $arMonHoc):
							$id_mon = $arMonHoc['id_mon'];
							$tenmon = $arMonHoc['tenmon'];
						?>						
						<tr>
							<td class="text-center">{{$key+1}}</td>
							<td class="hidden id-mon">{{$id_mon}}</td>
							<td class="ten-mon text-center"><a href="">{{$tenmon}}</a></td>
							<td align="center">
								<a href="" class="sua-mon-hoc" data-toggle="modal" data-target="#SuaMonHoc">
									Sửa
								</a>
								/
								<a href="{{URL::route('admin.mon.del', $id_mon)}}" onclick="return confirmAction()">
									Xóa
								</a>
							</td>
						</tr> 
						<?php endforeach ?>						
						</tbody>
				</table>
			</div>
		</div>
	</div>

	<!-- Modal Cấp học -->
	<div class="modal fade" id="AddCapHoc" tabindex="-1" role="dialog" aria-labelledby="AddCapHoc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Cấp học</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10 h2-cap-hoc">Thêm cấp học</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.cap.add')}}" class="templatemo-login-form" id="addCap" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên cấp học (*)</label>
								<input type="text" name="tencap" class="form-control" placeholder="Nhập tên cấp học" required="">
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group text-right">
						<input type="submit"  name="submit"  class="templatemo-blue-button" value="Thêm"/>
						<input type="reset" class="templatemo-white-button" value="Nhập lại" />
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

	<!-- Modal Sửa Cấp học -->
	<div class="modal fade" id="SuaCapHoc" tabindex="-1" role="dialog" aria-labelledby="SuaCapHoc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Cấp học</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10">Sửa cấp học</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.cap.edit')}}" class="templatemo-login-form" id="addCap" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên cấp học (*)</label>
								<input type="text" name="tencap" class="form-control nhap-ten-cap-hoc" placeholder="Nhập tên cấp học" required="">
								<input type="hidden" name="id_cap" value="" class="id_cap_hoc">
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group text-right">
						<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
						<input type="reset" class="templatemo-white-button" value="Nhập lại" />
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

	<!-- Modal môn học -->
	<div class="modal fade" id="AddMonHoc" tabindex="-1" role="dialog" aria-labelledby="AddMonHoc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Môn học</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10 h2-mon-hoc">Thêm môn học</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.mon.add')}}" class="templatemo-login-form" id="addMon" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên môn học (*)</label>
								<input type="text" name="tenmon" class="form-control" placeholder="Nhập tên môn học" required="">
								<input type="hidden" name="id_mon" value="" class="id_mon_hoc">
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

	<!-- Modal sửa môn học -->
	<div class="modal fade" id="SuaMonHoc" tabindex="-1" role="dialog" aria-labelledby="SuaMonHoc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Môn học</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10">Sửa môn học</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.mon.edit')}}" class="templatemo-login-form" id="addMon" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên môn học (*)</label>
								<input type="text" name="tenmon" class="form-control nhap-ten-mon-hoc" placeholder="Nhập tên môn học" required="">
								<input type="hidden" name="id_mon" value="" class="id_mon_hoc">
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group text-right">
						<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
						<input type="reset" class="templatemo-white-button" value="Nhập lại" />
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

	<!-- Modal lớp học -->
	<div class="modal fade" id="AddLopHoc" tabindex="-1" role="dialog" aria-labelledby="AddLopHoc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Thêm lớp học</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10">Thêm lớp học</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.lop.add')}}" class="templatemo-login-form" id="addLop" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên lớp học (*)</label>
								<input type="text" name="tenlop" class="form-control" placeholder="Nhập tên lớp học" required="">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-lg-12">
								<label>Chọn cấp học (*)</label>
								<select name="id_cap" class="form-control">
									<option value="">--Chọn cấp học--</option>
									<?php 
										foreach ($arCaps as $key => $arCap) {
											$id_cap = $arCap['id_cap'];
											$tencap = $arCap['tencap'];
										
									?>
									<option value="{{$id_cap}}">{{$tencap}}</option>
									<?php 
										}
									?>
									
								</select>
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group text-right">
						<input type="submit"  name="submit"  class="templatemo-blue-button" value="Thêm"/>
						<input type="reset" class="templatemo-white-button" value="Nhập lại" />
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
</script>

<!-- Modal lớp học -->
	<div class="modal fade" id="SuaLopHoc" tabindex="-1" role="dialog" aria-labelledby="SuaLopHoc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Sửa lớp học</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10">Sửa lớp học</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.lop.edit')}}" class="templatemo-login-form" id="addLop" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên lớp học (*)</label>
								<input type="text" name="tenlop" class="form-control nhap-ten-lop-hoc" placeholder="Nhập tên lớp học" required="">
								<input type="hidden" name="id_lop" value="" class="nhap_id_lop">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-lg-12">
								<label>Chọn cấp học (*)</label>
								<select name="id_cap" class="form-control nhap-cap-hoc">
									<option value="">--Chọn cấp học--</option>
									<?php 
										foreach ($arCaps as $key => $arCap) {
											$id_cap = $arCap['id_cap'];
											$tencap = $arCap['tencap'];
										
									?>
									<option value="{{$id_cap}}">{{$tencap}}</option>
									<?php 
										}
									?>
									
								</select>
							</div>
						</div>
						
						<input type="hidden" name="_token" value="{{csrf_token()}}">

						<div class="form-group text-right">
						<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
						<input type="reset" class="templatemo-white-button" value="Nhập lại" />
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
</script>
       
 <script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script> 
<script type="text/javascript">
$(document).ready(function() {
	$("#addCap").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tencap": {
				required: true,
			}
		},
		messages: {
			"tencap": {
				required: "Vui lòng nhập vào đây",
			}
		}
	});
});	
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#addMon").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tenmon": {
				required: true,
			}
		},
		messages: {
			"tenmon": {
				required: "Vui lòng nhập vào đây",
			}
		}
	});
});	
</script>

<script type="text/javascript">
$(document).ready(function() {
	$("#addLop").validate({
		ignore: [], 
		debug: false,
		rules: {
			"tenlop": {
				required: true,
			},
			"id_cap": {
				required: true,
			},
		},
		messages: {
			"tenlop": {
				required: "Vui lòng nhập vào đây",
			},
			"id_cap": {
				required: "Vui lòng chọn ở đây",
			},
		}
	});
});	
</script>

<script type="text/javascript">
$(function(){
	$(document).on('click','.sua-cap-hoc', function(){

		row = $(this).closest("tr");

		id_cap = row.find(".id-cap").text();
		ten_cap = row.find(".ten-cap").text();

		$('.nhap-ten-cap-hoc').val(ten_cap);
		$('.id_cap_hoc').val(id_cap);
	});
});
</script>

<script type="text/javascript">
$(function(){
	$(document).on('click','.sua-mon-hoc', function(){

		row = $(this).closest("tr");

		id_mon = row.find(".id-mon").text();
		ten_mon = row.find(".ten-mon").text();

		$('.nhap-ten-mon-hoc').val(ten_mon);
		$('.id_mon_hoc').val(id_mon);
	});
});
</script>

<script type="text/javascript">
$(function(){
	$(document).on('click','.sua-lop-hoc', function(){

		row = $(this).closest("tr");

		id_lop = row.find(".id-lop").text();
		ten_lop = row.find(".ten-lop").text();
		id_cap = row.find(".id_cap").text();
		
		$('.nhap_id_lop').val(id_lop);
		$('.nhap-ten-lop-hoc').val(ten_lop);
		$('.nhap-cap-hoc').val(id_cap);
		
		

	});
});
</script>


@endsection