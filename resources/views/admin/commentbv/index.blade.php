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
		<h2 class="text-uppercase margin-bottom-10 text-center">Bình luận bài viết</h2>
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
							<th>Tên bài viết</th>
							<th>Người bình luận</th>
							<th>Email</th>
							<th>Nội dung</th>
							<th>Ngày</th>
							<th>Chức năng</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arComments as $key => $arComment):
							$id_cmt = $arComment['id_cmt'];
							$hoten_cmt = $arComment['hoten_cmt'];
							$tenpost = $arComment['tenpost'];
							$email_cmt = $arComment['email_cmt'];
							$noidung_cmt = $arComment['noidung_cmt'];
							$time_cmt = $arComment['time_cmt'];
						?>
						<tr>
							<td class="text-center">{{$key+1}}</td>
							<td class="text-center">{{$tenpost}}</td>
							<td class="text-center">{{$hoten_cmt}}</td>
							<td class="text-center">{{$email_cmt}}</td>
							<td class="text-center">{{$noidung_cmt}}</td>
							<td class="text-center">{{date("d-m-Y", $time_cmt)}}</td>

							
							<td align="center">
								<a href="{{URL::route('admin.commentbv.del', $id_cmt)}}" onclick="return confirmAction()">Xóa</a>
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