@extends('templates.admin.template')
@section('main')

<?php 
$urlAdmin = getenv('ADMIN_TEMPLATE_URL');
 ?>

<div class="templatemo-content-container">
<?php 

foreach ($arBaiViets as $key => $arBaiViet) {
	$tenpost = $arBaiViet['tenpost'];
	$mota_post = $arBaiViet['mota_post'];
	$chitiet_post = $arBaiViet['chitiet_post'];
	$img_post = $arBaiViet['img_post'];
	if($img_post == ""){
		$img_post = "noimage.jpg";
	}
	$id_cat = $arBaiViet['id_cat'];
}

 ?>

<div class="templatemo-content-widget white-bg">
	<h2 class="margin-bottom-10">Sửa bài viết</h2>
	<p>(*): Không được để trống</p>
	<form action="" class="templatemo-login-form" id="add_news" method="post" enctype="multipart/form-data" novalidate="novalidate">
		<div class="row form-group">
		<div class="col-lg-6 col-md-6 form-group">
			<label>Tên bài viết (*)</label>
			<input type="text" name="tenpost" class="form-control" id="inputFirstName" placeholder="Nhập tên bài viết" value="{{$tenpost}}">
		</div>
		<div class="col-lg-6 col-md-6 form-group">
			<label>Chuyên mục (*)</label>
			<select name="id_cat" class="form-control">
				<?php
					foreach ($arCats as $arCat) {
						$id_cats = $arCat['id_cat'];
						$tencat = $arCat['tencat'];

						$sel = "";
						if($id_cats == $id_cat){
							$sel = 'selected = "selected"';
						}
				?>
				<option value="{{$id_cats}}" <?php echo $sel; ?>>{{$tencat}}</option>
				<?php
					}
				?>
			</select>
		</div>
		</div>
		
		<div class="row form-group">
		<div class="col-lg-12">
			<label class="control-label templatemo-block">Hình ảnh</label> 
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="avatar-img-container">
				<img id="avartar-img-show" src="/storage/files/{{$img_post}}" alt="avatar" width="auto" height="200" >
			</div>
			
			<!-- Show image before upload file jquery -->
			
			<input type="file" name="img_post" value="" class="form-control"
				onchange="viewImg(this)">
			<script>
				function viewImg(img) {
					var fileReader = new FileReader;
					fileReader.onload = function(img) {
						var avartarShow = document.getElementById("avartar-img-show");
						
						avartarShow.src = img.target.result
					}, fileReader.readAsDataURL(img.files[0])
				}
			</script>								
		</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Mô tả (*)</label>
				<textarea name="mota_post" class="form-control" id="inputNote" rows="3">{{$mota_post}}</textarea>
			</div>
		</div>
		
		<div class="row form-group">
			<div class="col-lg-12 form-group">									 
				<label class="control-label">Chi tiết</label>
				<textarea name="chitiet_post" rows="7" cols="90" class="input-long ckeditor" style="visibility: hidden; display: none;">{{$chitiet_post}}</textarea>
			</div>
		</div>

		<div class="form-group text-right">
		<input type="submit"  name="submit"  class="templatemo-blue-button" value="Sửa"/>
		<input type="reset" class="templatemo-white-button" value="Nhập lại" />
		</div>													 
	</form>
</div>


@endsection