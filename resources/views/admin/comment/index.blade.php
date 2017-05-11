@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>
<div class="templatemo-content-container">
	<div class="templatemo-content-widget white-bg">
		<div class="bottom-spacing">
			<!-- Button -->
		</div>
		<h2 class="text-uppercase margin-bottom-10 text-center">Bình luận gia sư</h2>
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
							<th>Phụ huynh</th>
							<th>Gia sư</th>
							<th>Nội dung</th>
							<th>Ngày</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arComments as $key => $arComment):
							$id_cmt = $arComment['id_cmt'];
							$fullname_ph = $arComment['fullname_ph'];
							$fullname_gs = $arComment['fullname_gs'];
							$username_gs = $arComment['username_gs'];
							$noidung_cmt = $arComment['noidung_cmt'];
							$time_cmt = $arComment['time_cmt'];
						?>
						<tr>
							<td class="text-center">{{$key+1}}</td>
							<td class="text-center">{{$fullname_ph}}</td>
							<td class=""><a href="{{route('admin.member.trangcanhan', ['slug' => $username_gs])}}" target="_blank">{{$fullname_gs}}</a></td>
							<td class="text-center">{{$noidung_cmt}}</td>
							<td class="text-center">{{date("d-m-Y", $time_cmt)}}</td>

							
							<td align="center">
								<a href="{{URL::route('admin.comment.del', $id_cmt)}}" onclick="return confirmAction()">Xóa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arComments->links(); ?>
			</div>	
		</form>
		
	</div>	
<script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script>

@endsection