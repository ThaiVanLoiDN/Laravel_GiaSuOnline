@extends('templates.public.template')
@section('main')

<?php foreach ($arNewsAllCs as $key => $arNewsAllC): 

    if (isset($arNewsAllC[0])) {
    $tencat = $arNewsAllC[0]['tencat'];

    $slugs = str_slug($tencat);
    $id_cat = $key;
    $urlCat = route('public.news.cat', ['slug' => $slugs, 'id' => $id_cat]);

?>

<div class="container-fluid">
    <div class="container">
        <h1 class="text-center"><a href="{{$urlCat}}">{{$tencat}}</a></h1>
    </div>
    <div class="container bai-viet-chuyen-muc">
        <div class="row">
            <div class="tincohinh">
                <ul class="cacbaiviet">
                    <?php foreach ($arNewsAllC as $key2 => $arNews): 
                        $id_post = $arNews['id_post'];
                        $tenpost = $arNews['tenpost'];
                        $mota_post = $arNews['mota_post'];
                        $img_post = $arNews['img_post'];
                        if($img_post == ""){
                            $img_post = "noimage.jpg";
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
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
        
    }
?>
<?php endforeach ?>

@endsection