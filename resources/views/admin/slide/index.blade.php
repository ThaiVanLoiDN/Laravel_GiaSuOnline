@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-content-container">
	<div class="templatemo-content-widget white-bg">
		<div class="bottom-spacing">
			<!-- Button -->
			<a href="{{URL::route('admin.slide.add')}}" title="Add" class="templatemo-white-button">Add</a>
		</div>
		<h2 class="text-uppercase margin-bottom-10 text-center">Slide</h2>
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
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Tên slide</th>
							<th>Link</th>
							<th>Mô tả</th>
							<th>Hình ảnh</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arSlides as $key => $arSlide):
							$id_sl = $arSlide['id_sl'];
							$tensl = $arSlide['tensl'];
							$link_sl = $arSlide['link_sl'];
							$mota_sl = $arSlide['mota_sl'];
							$img_sl = $arSlide['img_sl'];
							if($img_sl == ""){
								$img_sl = "noimage.jpg";
							}
						?>
						<tr>
							<td class="align-center">{{$key + 1}}</td>
							<td class="align-center">{{$tensl}}</td>
							<td class="align-center"><a href="{{$link_sl}}" target="_blank">{{$link_sl}}</a></td>
							<td class="align-center">{{$mota_sl}}</td>
							<td class="align-center"><img src="/storage/files/{{$img_sl}}" width="200px"></td>

							<td align="center">
								<a href="{{URL::route('admin.slide.edit', $id_sl)}}">Sửa</a>/
								<a href="{{URL::route('admin.slide.del', $id_sl)}}" onclick="return confirmAction()">Xóa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arSlides->links(); ?>
			</div>	
		</form>
		
	</div>	
<script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script>

@endsection