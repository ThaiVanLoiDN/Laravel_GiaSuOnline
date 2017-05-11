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
		<h2 class="text-uppercase margin-bottom-10 text-center">Gia sư</h2>
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
		
		
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Usename</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Trạng thái</th>
							<th>Xu</th>
							<th>Sửa</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arGiaSus as $key => $arGiaSu):
							$id_gs = $arGiaSu['id_gs'];
							$ten_gs = $arGiaSu['username_gs'];
							$mail_gs = $arGiaSu['mail_gs'];
							$phone_gs = $arGiaSu['phone_gs'];
							$xu_gs = $arGiaSu['xu_gs'];
							$is_active = $arGiaSu['is_active'];
						?>
						<tr>
							<td class="text-center">{{$key+1}}</td>
							<td class=""><a href="{{route('admin.member.trangcanhan', ['slug' => $ten_gs])}}" target="_blank">{{$ten_gs}}</a></td>
							<td class="">{{$mail_gs}}</td>
							<td class="text-center">0{{number_format($phone_gs,0, " ", ".")}}</td>
							<td class="edit_active<?php echo $id_gs; ?> text-center">
								<?php 
									if ($is_active==0){
								?>
								<a href="javascript:void(0)" title="Kích hoạt" onclick="kichhoat(<?php echo $id_gs?>, 1)">
									<img src="{{$urlAdmin}}/images/minus-circle.gif" alt="">
								</a>

								<?php
									} else{

								?>

								<a href="javascript:void(0)"  title="Ngừng kích hoạt" onclick="kichhoat(<?php echo $id_gs?>, 0)">
									<img src="{{$urlAdmin}}/images/tick-circle.gif" alt="" />
								</a>										
								<?php
									}
								?>

							</td>
							<td class="text-center">{{number_format($xu_gs)}}</td>							

							
							<td align="center">
								<a href="{{URL::route('admin.giasu.sua', $id_gs)}}">Sửa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arGiaSus->links(); ?>
			</div>	
		
	</div>	

</script>

<script type="text/javascript">

	function kichhoat(id_gs, gt) {
		$.ajax({
			url: "{{route('admin.giasu.ajax')}}",
			type: 'GET',
			cache: false,
			data: {
				agt : gt,
				aid_gs: id_gs,
			},
			success: function(data){
				$('.edit_active'+id_gs).html(data);
				//alert('OK');
			},
			error: function (){
				alert('Lỗi');	
			}
		});	
	};

</script>

@endsection