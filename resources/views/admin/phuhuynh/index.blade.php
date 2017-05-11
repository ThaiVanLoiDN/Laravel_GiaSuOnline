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
		<h2 class="text-uppercase margin-bottom-10 text-center">Phụ huynh</h2>
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
							<th>Username</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Trạng thái</th>
							<th>Xu</th>
							<th>Sửa</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arPhuHuynhs as $key => $arPhuHuynh):
							$id_ph = $arPhuHuynh['id_ph'];
							$ten_ph = $arPhuHuynh['username_ph'];
							$mail_ph = $arPhuHuynh['mail_ph'];
							$phone_ph = $arPhuHuynh['phone_ph'];
							$xu_ph = $arPhuHuynh['xu_ph'];
							$is_active = $arPhuHuynh['is_active'];
						?>
						<tr>
							<td class="text-center">{{$key+1}}</td>
							<td class="">{{$ten_ph}}</td>
							<td class="">{{$mail_ph}}</td>
							<td class="text-center">0{{number_format($phone_ph,0, " ", ".")}}</td>
							<td class="edit_active<?php echo $id_ph; ?> text-center">
								<?php 
									if ($is_active==0){
								?>
								<a href="javascript:void(0)" title="Kích hoạt" onclick="kichhoat(<?php echo $id_ph?>, 1)">
									<img src="{{$urlAdmin}}/images/minus-circle.gif" alt="">
								</a>

								<?php
									} else{

								?>

								<a href="javascript:void(0)"  title="Ngừng kích hoạt" onclick="kichhoat(<?php echo $id_ph?>, 0)">
									<img src="{{$urlAdmin}}/images/tick-circle.gif" alt="" />
								</a>										
								<?php
									}
								?>

							</td>
							<td class="text-center">{{number_format($xu_ph)}}</td>							

							
							<td align="center">
								<a href="{{URL::route('admin.phuhuynh.sua', $id_ph)}}">Sửa</a>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arPhuHuynhs->links(); ?>
			</div>	
		
	</div>	

</script>

<script type="text/javascript">

	function kichhoat(id_ph, gt) {
		$.ajax({
			url: "{{route('admin.phuhuynh.ajax')}}",
			type: 'GET',
			cache: false,
			data: {
				agt : gt,
				aid_ph: id_ph,
			},
			success: function(data){
				$('.edit_active'+id_ph).html(data);
				//alert('OK');
			},
			error: function (){
				alert('Lỗi');	
			}
		});	
	};

</script>

@endsection