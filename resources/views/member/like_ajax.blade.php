<?php
	if($liked == 0){
?>
<!-- <a href="{{URL::route('public.tuongtac.like', $id_gs)}}" title="Tôi thích người này" style="color: #cccccc;"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a> --> 

<a href="javascript:void(0)" title="Tôi thích người này" style="color: #cccccc;" onclick="like(<?php echo $id_gs; ?>)"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a>
{{$likes}}
<?php 
	}else{
?>

<a href="javascript:void(0)" title="Tôi thích người này"><i class="fa fa-thumbs-up" aria-hidden="true" onclick="unlike(<?php echo $id_gs; ?>)"></i></a> {{$likes}}

<?php
	}
?>
  &nbsp;  &nbsp;
 <?php
	if($disliked == 0){
?>
<a href="javascript:void(0)" title="Tôi không thích người này" style="color: #cccccc;" onclick="dislike(<?php echo $id_gs; ?>)"><i class="fa fa-thumbs-down" aria-hidden="true"></i></a>{{$dislikes}}
<?php 
	}else{
?>
<a href="javascript:void(0)" title="Tôi không thích người này"><i class="fa fa-thumbs-down" aria-hidden="true" onclick="undislike(<?php echo $id_gs; ?>)"></i></a>{{$dislikes}}

<?php
	}
?>