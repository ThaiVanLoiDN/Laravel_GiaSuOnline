@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-content-container">
	<div class="templatemo-content-widget white-bg">
		<div class="bottom-spacing">
			<!-- Button -->
			<a href="{{URL::route('admin.quangcao.add')}}" title="Add" class="templatemo-white-button">Add</a>
		</div>
		<h2 class="text-uppercase margin-bottom-10 text-center">Quảng cáo</h2>
		<?php 
		if (Session::has('msg'))
		{
		?>
			<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
		<?php
		}
		 ?>
		
		<form action="" method="POST">
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table" id="myTable">
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Tên Quảng cáo</th>
							<th>Link</th>
							<th>Active</th>
							<th>Hình ảnh</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arQuangCaos as $key => $arQuangCao):
							$id_qc = $arQuangCao['id_qc'];
							$tenqc = $arQuangCao['tenqc'];
							$link_qc = $arQuangCao['link_qc'];
							$active = $arQuangCao['is_activeqc'];
							$img_qc = $arQuangCao['img_qc'];
							if($img_qc == ""){
								$img_qc = "noimage.jpg";
							}
						?>
						<tr>
							<td class="text-center">{{$key + 1}}</td>
							<td class="hidden id-qc">{{$id_qc}}</td>
							<td class="text-center">{{$tenqc}}</td>
							<td class="text-center"><a href="{{$link_qc}}" target="_blank">{{$link_qc}}</a></td>
							<td class="edit_active text-center">
								<?php 
									if ($active==0){
								?>
								<a href="javascript:void(0)" class = "noactive" title="Kích hoạt">
									<img src="{{$urlAdmin}}/images/minus-circle.gif" alt="" >
									<span class="hidden">No active</span>
								</a>

								<?php
									} else{

								?>

								<a href="javascript:void(0)"  title="Ngừng kích hoạt"><img src="{{$urlAdmin}}/images/tick-circle.gif" alt="" /></a>
								<span class="hidden">Yes active</span>

								<?php
									}
								?>

							</td>
							<td class="text-center"><img src="/storage/files/{{$img_qc}}" width="200px"></td>

							<td align="center">
								<a href="{{URL::route('admin.quangcao.edit', $id_qc)}}" >Sửa</a>/
								<a href="{{URL::route('admin.quangcao.del', $id_qc)}}" onclick="return confirmAction()">Xóa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arQuangCaos->links(); ?>
			</div>	
		</form>
		
	</div>	
<script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script>

<script type="text/javascript">
$(function(){
	$(document).on('click','#myTable .edit_active a', function(){
		var check = 0;
		var id_qc = 0;
		if($(this).hasClass('noactive')){
			check = 1;
		}
		
		id_qc = $(this).parent().siblings('.id-qc').html();	

		var $_point = $(this);
		$.ajax({
			url: "{{route('admin.quangcao.ajax')}}",
			type: 'GET',
			cache: false,
			data: {
				agt : check,
				aid: id_qc
			},
			success: function(data){
				$_point.parent().html(data);
			},
			error: function (){
				
			}
		});		
	});
});
</script>

@endsection