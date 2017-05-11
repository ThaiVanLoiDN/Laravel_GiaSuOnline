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
		<h2 class="text-uppercase margin-bottom-10 text-center">Liên hệ</h2>
		<?php 
		if (Session::has('msg'))
		{
		?>
			<div class="alert alert-success"><p><strong><?php echo Session::get('msg'); ?></strong></p></div>
		<?php
		}
		 ?>
		
		<form action="{{route('admin.lienhe.delnhieu')}}" method="POST">
			<div class="table-responsive">
				<table class="table table-striped table-bordered templatemo-user-table">
					<thead>
						<tr class="text-center">
							<th>STT</th>
							<th>Họ tên</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Nội dung</th>
							<th>Ngày</th>
							<th>Chức năng</th>
							<th>
								<div class="margin-right-15 templatemo-inline-block">                      
								Chọn:
					              <input type="checkbox" name="chkAll" id="chkAll" value="" />
					              <label for="chkAll" class="font-weight-400"><span></span></label>
					              <input type="hidden" name="_token" value="{{ csrf_token() }}">
					              <input type="submit" name="dels" id="dels" value="Xóa" onclick="return valDels();" />
					            </div>
							</th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($arLienHes as $key => $arLienHe):
							$id_lh = $arLienHe['id_lh'];
							$ten_lh = $arLienHe['tenlh'];
							$mail_lh = $arLienHe['mail_lh'];
							$phone_lh = $arLienHe['phone_lh'];
							$noidung_lh = $arLienHe['noidung_lh'];
							$time_lh = $arLienHe['time_lh'];
						?>
						<tr>
							<td class="align-center">{{$key + 1}}</td>
							<td class="align-center">{{$ten_lh}}</td>
							<td class="align-center">{{$mail_lh}}</td>
							<td class="align-center">0{{number_format($phone_lh,0, " ", ".")}}</td>
							<td class="align-center">{{$noidung_lh}}</td>
							<td class="align-center">{{date("d-m-Y", $time_lh)}}</td>

							
							<td align="center">
								<a href="{{URL::route('admin.lienhe.del', $id_lh)}}" onclick="return confirmAction()">Xóa</a>
							</td>
							<td class="text-center">
								<div class="margin-right-15 templatemo-inline-block">                      
					              <input type="checkbox" name="iddel[]" id="{{$id_lh}}" value="{{$id_lh}}" />
					              <label for="{{$id_lh}}" class="font-weight-400"><span></span></label>
					            </div>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<div class="pagination-wrap"> 
				<?php echo $arLienHes->links(); ?>
			</div>	
		</form>
	</div>	
<script type="text/javascript">
	function confirmAction() {
	return confirm("Bạn có chắc muốn xóa?")
	}
</script>

<script type="text/javascript">
function valDels()
{
    var checkedAtLeastOne = false;
    $('input[type="checkbox"][name="iddel[]"]').each(function() {
        if ($(this).is(":checked")) {
            checkedAtLeastOne = true;
        }
    });
    
    if (checkedAtLeastOne == true){
		return confirm('Bạn có muốn xóa các mẫu tin đã chọn?');
    } else {
    	alert('Vui lòng chọn ít nhất 1 tin để xóa');
    	return false;
    }
}
$('#chkAll').click(function(event) {
  if(this.checked) {
      // Iterate each checkbox
      $(':checkbox').each(function() {
          this.checked = true;
      });
  }
  else {
    $(':checkbox').each(function() {
          this.checked = false;
      });
  }
});

</script>
@endsection