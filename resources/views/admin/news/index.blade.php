@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-content-container">
	<div class="templatemo-flex-row flex-content-row">
		<div class="templatemo-content-widget white-bg col-2">
			<a href="#" title="Add" class="templatemo-white-button" id="ModelChuyenMuc" data-toggle="modal" data-target="#AddChuyenMuc">Add</a>
			<h2 class="text-uppercase" style="text-align: center; padding-bottom: 10px;">Chuyên mục</h2>
			<?php 
			if (Session::has('msgCat'))
			{
			?>
				<div class="alert alert-success"><p><strong><?php echo Session::get('msgCat'); ?></strong></p></div>
			<?php
			}
			 ?>
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table" >
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Tên chuyên mục</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach ($arCats as $key => $arCat) {
								$id_cat = $arCat['id_cat'];
								$tencat = $arCat['tencat'];
						?>
						<tr align="center">
							<td class="text-center">{{$key+1}}</td>
							<td class="id-cat hidden">{{$id_cat}}</td>
							<td class="ten-cat">{{$tencat}}</td>
							<td><a href="" class="sua-chuyen-muc" data-toggle="modal" data-target="#SuaChuyenMuc">Sửa</a></td>
							<td><a href="{{URL::route('admin.cat.del', $id_cat)}}" onclick="return confirmAction()">Xóa</a></td>
						</tr>
						<?php 
							}
						?>
					</tbody>
				</table>    
			</div>
		</div>
		<div class="templatemo-content-widget white-bg col-2">
			 <h2 class="text-center">Biểu đồ tròn</h2>
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
      data.addColumn('number', 'Bài viết');
      data.addRows([

      	<?php
      		foreach ($arNewsAllC as $key => $valuelue) {
  				$tenchuyenmuc = $valuelue['tenchuyenmuc'];
  				$soluong = $valuelue['soluong'];
      	?>

        ['<?php echo $tenchuyenmuc; ?>', <?php echo $soluong; ?>],

        <?php
        	}
        ?>

      ]);

      var options = {'title':'Số bài viết'};

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

	<!-- Modal chyên mục -->
	<div class="modal fade" id="AddChuyenMuc" tabindex="-1" role="dialog" aria-labelledby="AddChuyenMuc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Chuyên mục</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10 h2-chuyen-muc">Thêm chuyên mục</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.cat.add')}}" class="templatemo-login-form" id="addCat" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên chuyên mục (*)</label>
								<input type="text" name="tencat" value="" class="form-control" placeholder="Nhập tên chuyên mục">
								<input type="hidden" name="id_cat" value="" class="id_chuyen_muc">
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

	<!-- Modal chyên mục -->
	<div class="modal fade" id="SuaChuyenMuc" tabindex="-1" role="dialog" aria-labelledby="SuaChuyenMuc" aria-hidden="true">
	  <div class="modal-dialog modal-md">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Đóng</span></button>
			<h4 class="modal-title">Chuyên mục</h4>
		  </div>
		  <div class="modal-body">
				<div class="text-center">
				
				<div class="templatemo-content-widget white-bg">
					<h2 class="margin-bottom-10">Sửa chuyên mục</h2>
					<p>(*): Không được để trống</p>
					<form action="{{route('admin.cat.edit')}}" class="templatemo-login-form" id="addCat" method="post" enctype="multipart/form-data" novalidate="novalidate">		
						<div class="row form-group">
							<div class="col-lg-12">
								<label>Tên chuyên mục (*)</label>
								<input type="text" name="tencat" value="" class="form-control nhap-ten-chuyen-muc" placeholder="Nhập tên chuyên mục">
								<input type="hidden" name="id_cat" value="" class="id_chuyen_muc">
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
	<div class="templatemo-content-widget white-bg">
		<div class="bottom-spacing">
			<!-- Button -->
			<div class="float-left">
				<a href="{{route('admin.news.add')}}" title="Thêm bài viết" class="templatemo-white-button">ADD</a>
			</div>
			<div class="clear">
			</div>
		</div>
		<h2 class="text-uppercase margin-bottom-10 text-center">Bài viết</h2>
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
							<th>Tên</th>
							<th>Chuyên mục</th>
							<th>Trạng thái</th>
							<th>Hình ảnh</th>
							<th>Ngày đăng</th>
							<th>Chức năng</th>
						</tr>

					</thead>
					
					<tbody>
						<?php 
							foreach ($arBaiViets as $key => $arBaiViet):
							$id_post = $arBaiViet['id_post'];
							$tenpost = $arBaiViet['tenpost'];
							$tencat = $arBaiViet['tencat'];
							$img_post = $arBaiViet['img_post'];
							$active = $arBaiViet['is_activepost'];
							if($img_post == ""){
								$img_post = "noimage.jpg";
							}
							$is_activepost = $arBaiViet['is_activepost'];
							$time_post = $arBaiViet['time_post'];
							$tencat = $arBaiViet['tencat'];
							$slugtrue = str_slug($tenpost);

							$urldel = route('admin.quantri.del', ['id' => $id_post]);
							//$urledit = route('admin.quantri.del', ['id' => $id_post]);
						?>						
						<tr>
							<td class="text-center">{{$key +1}}</td>
							<td class="hidden id-news">{{$id_post}}</td>
							<td><a href="{{route('public.news.detail', ['slug' => $slugtrue, 'id' => $id_post])}}" target="_blank">{{$tenpost}}</a></td>
							<td>{{$tencat}}</td>
							<td class="edit_active text-center">
								<?php 
									if ($active==0){
								?>
								<a href="javascript:void(0)" class = "noactive" title="Kích hoạt">
									<img src="{{$urlAdmin}}/images/minus-circle.gif" alt="">
								</a>

								<?php
									} else{

								?>

								<a href="javascript:void(0)"  title="Ngừng kích hoạt"><img src="{{$urlAdmin}}/images/tick-circle.gif" alt="" /></a>

								<?php
									}
								?>

							</td>
							<td align="center">
								<img src="/storage/files/{{$img_post}}" width="100px">
							</td>
							<td align="center">{{date("d-m-Y", $time_post)}}</td>
							<td align="center">
								<a href="{{URL::route('admin.baiviet.edit', $id_post)}}">
									Sửa
								</a>
								/
								<a href="{{URL::route('admin.baiviet.del', $id_post)}}" onclick="return confirmAction()">
									Xóa
								</a>
							</td>
						</tr> 
						<?php endforeach ?>						
						</tbody>
				</table>
			</div>
		<div class="pagination-wrap"> 
				<?php echo $arBaiViets->links(); ?>
			</div>	
	</div>
</script>
       
 <script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script> 

<script type="text/javascript">
$(function(){
	$(document).on('click','#myTable .edit_active a', function(){
		var check = 0;
		var id_news = 0;
		if($(this).hasClass('noactive')){
			check = 1;
		}
		
		id_news = $(this).parent().siblings('.id-news').html();	

		var $_point = $(this);
		$.ajax({
			url: "{{route('admin.news.ajax')}}",
			type: 'GET',
			cache: false,
			data: {
				agt : check,
				aid: id_news
			},
			success: function(data){
				$_point.parent().html(data);
				//alert('OK');
			},
			error: function (){
				
			}
		});		
	});
});
</script>

<script type="text/javascript">
$(function(){
	$(document).on('click','.sua-chuyen-muc', function(){

		row = $(this).closest("tr");

		id_cat = row.find(".id-cat").text();
		ten_cat = row.find(".ten-cat").text();

		$('.nhap-ten-chuyen-muc').val(ten_cat);
		$('.id_chuyen_muc').val(id_cat);

	});
});
</script>

@endsection