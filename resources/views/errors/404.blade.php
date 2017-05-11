@extends('templates.public.template')
@section('main')

<?php 
$urlPublic = getenv('PUBLIC_TEMPLATE_URL');
 ?>

<div>
    <img src="{{$urlPublic}}/img/404.png" alt="" class="img-center img-responsive" style="padding: 150px 0px;" />
</div>

@endsection