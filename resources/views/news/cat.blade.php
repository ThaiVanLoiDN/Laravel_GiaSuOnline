@extends('templates.public.template')
@section('main')

<?php
$tenCat = $arCats[0]['tencat'];
?>
<div class="ae-container-fluid ae-container-fluid--inner rk-main">
  <div class="container">
        <h1 class="text-center">{{$tenCat}}</h1>
    </div>
        <div class="container bai-viet-chuyen-muc">
            <div class="row">
                <div class="tincohinh">
                    <ul class="cacbaiviet">
                        <?php foreach ($arNewsCats as $key => $arNewsCat): 
                            $id_post = $arNewsCat['id_post'];
                            $tenpost = $arNewsCat['tenpost'];
                            $img_post = $arNewsCat['img_post'];
                            $mota_post = $arNewsCat['mota_post'];
                            
                            if($img_post == ""){
                            $img_post = 'noimage.jpg';
                            }

                            $slug = str_slug($tenpost);

                            $urlpost = route('public.news.detail', ['slug' => $slug, 'id' => $id_post]);

                        ?>

                        <li class="col-sm-4">
                            <div class="hinhanh">
                                <a href="{{$urlpost}}" title="{{$tenpost}}">
                                    <img src="/storage/files/{{$img_post}}" alt="{{$tenpost}}" class="img-responsive"/>
                                </a>
                            </div>
                            
                            <h3><a href="{{$urlpost}}" title="{{$tenpost}}">{{$tenpost}}</a></h3>
                            <p class="motabaiviet text-justify">
                                <span>{{$mota_post}}</span>
                                
                            </p>
                        </li>
                        
                    <?php
                        if ($key == 2) {
                            
                    ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="tincohinh">
                    <ul class="cacbaiviet">
                    <?php
                        }
                    ?>
                    <?php endforeach ?>
                        
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="pagination-wrap"> 
                         <?php echo $arNewsCats->links(); ?>
                    </div>
                </div>
            </div>
        </div>
</div>
<script type="text/javascript">
    window.history.pushState('page2', 'Title', "{{route('public.news.cat', ['slug' => str_slug($arCats[0]['tencat']), 'id' => $arCats[0]['id']])}}");
</script>
@endsection