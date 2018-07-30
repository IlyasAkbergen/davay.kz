@extends('layouts.shopLayout')

@section('nav')
<li>
    <a href="{{route('shop')}}">Магазин</a>
</li>

<li class="sale-noti">
    <a href="{{route('home')}}">Рекомендуемые</a>
</li>

<li>
    <a href="about.html">О нас</a>
</li>

<li>
    <a href="contact.html">Контакты</a>
</li>
@endsection

@section('nav2')
<li>
    <a href="{{route('shop')}}">Магазин</a>
</li>

<li class="sale-noti">
    <a href="{{route('home')}}">Рекомендуемые</a>
</li>

<li>
    <a href="about.html">О нас</a>
</li>

<li>
    <a href="contact.html">Контакты</a>
</li>
@endsection

@section('content')

<!-- Slide1 -->
        <section class="slide1">
            <div class="wrap-slick1">
                <div class="slick1">
                    <div class="item-slick1 item1-slick1" style="background-image: url(images/master-slide-07.jpg);">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                            <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="fadeInUp">
                                Leather Bags
                            </h2>

                            <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="fadeInDown">
                                New Collection 2018
                            </span>

                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                                <!-- Button -->
                                <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick1 item2-slick1" style="background-image: url(images/master-slide-06.jpg);">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                            <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
                                Leather Bags
                            </h2>

                            <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
                                New Collection 2018
                            </span>

                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                                <!-- Button -->
                                <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick1 item3-slick1" style="background-image: url(images/master-slide-02.jpg);">
                        <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
                            <h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rotateInDownLeft">
                                Leather Bags
                            </h2>

                            <span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="rotateInUpRight">
                                New Collection 2018
                            </span>

                            <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                                <!-- Button -->
                                <a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- new goods -->
        <br>
        <br>
        <br>
        <div class="sec-title p-b-22">
            <h3 class="m-text5 t-center">
                Новинки
            </h3>
        </div>
        <br><br>
        <div class="col-sm-10 col-sm-offset-1">
            @foreach($news as $new)
            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                <!-- Block2 -->
                <!-- block2-labelnew - флажок new --> 
                <div class="block2">
                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew rectangle bg-light">
                        <?php $avatars = App\GoodPhoto::where('good_id', $new->id)->get();
                        if(count($avatars)>0){
                            $avatar = $avatars->first()->filename;
                        }else{
                          $avatar='default';  
                        } ?>
                        @if($avatar == 'default')
                        <img src="images/item-02.jpg" alt="IMG-PRODUCT">
                        @else
                        <img src="{{asset('resources/images') . '/' . $new->id . '/' . $avatar}}" alt="фото товара">
                        @endif
                        <div class="block2-overlay trans-0-4">
                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                <!-- Button -->
                                <a href="" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                    в корзину
                                </a>
                                <br>
                                <a href="{{url('good/' . $new->id)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                   купить сейчас
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="block2-txt p-t-20 bg-light">
                        <a href="{{url('good/' . $new->id)}}" class="block2-name dis-block s-text3 p-b-5"  style="padding: 3px 0px 0px 15px">
                            {{ $new->title }}
                        </a>
                        <span class="block2-price m-text6 p-r-5" style="padding: 3px 0px 4px 15px">
                            <del>{{$new->oldprice}} Тг.</del>
                        </span>
                        <span class="block2-newprice m-text8 p-r-5" style="padding: 3px 0px 4px 15px">
                            {{$new->price}} Тг.
                        </span><br><br>
                    </div>
                </div>
            </div>
            @endforeach
        </div>                       


        <!-- Our product -->
        <section class="bgwhite p-t-45 p-b-58">
            <div class="container">
                <div class="sec-title p-b-22">
                    <h3 class="m-text5 t-center">
                        Рекомендуемые
                    </h3>
                </div>

                <!-- Tab01 -->
                <div class="tab01">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Лучшие продавцы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Скидки</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Лучшие товары</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-t-35">
                        <!-- - -->
                        <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                            <img src="images/item-02.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Herschel supply co 25l
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $75.00
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-08.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Denim jacket blue
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $92.50
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-10.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Coach slim easton black
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $165.90
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                            <img src="images/item-06.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Herschel supply co 25l
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $75.00
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-12.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Herschel supply co 25l
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $75.00
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-14.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Denim jacket blue
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $92.50
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-05.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Coach slim easton black
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $165.90
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-07.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Frayed denim shorts
                                            </a>

                                            <span class="block2-oldprice m-text7 p-r-5">
                                                $29.50
                                            </span>

                                            <span class="block2-newprice m-text8 p-r-5">
                                                $15.90
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- - -->
                        <div class="tab-pane fade" id="featured" role="tabpanel">
                            <div class="row">
                               
                            </div>
                        </div>

                        <!--  -->
                        <div class="tab-pane fade" id="sale" role="tabpanel">
                            <div class="row">
                                @foreach($sales as $sale)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <span class = "mylabel">-{{ $sale->sale }}%</span>
                                            <?php $avatars = App\GoodPhoto::where('good_id', $sale->id)->get();
                                            if(count($avatars)>0){
                                                $avatar = $avatars->first()->filename;
                                            }else{
                                              $avatar='default';  
                                            } ?>
                                            @if($avatar == 'default')
                                            <img class="square_img" src="images/item-02.jpg" alt="IMG-PRODUCT">
                                            @else
                                            <img class="square_img" src="{{asset('resources/images') . '/' . $sale->id . '/' . $avatar}}" alt="фото товара">
                                            @endif
                                            <div class="block2-overlay trans-0-4">
                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <a href="" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        в корзину
                                                    </a>
                                                    <br>
                                                    <a href="{{url('good/' . $sale->id)}}" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                       купить сейчас
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="{{url('good/' . $sale->id)}}" class="block2-name dis-block s-text3 p-b-5">
                                                {{$sale->title}}
                                            </a>
                                            
                                            <span class="block2-price m-text6 p-r-5">
                                                <del>{{$sale->oldprice}} Тг.</del>
                                            </span>

                                            <span class="block2-newprice m-text8 p-r-5">
                                                {{$sale->price}} Тг.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!--  -->
                        <div class="tab-pane fade" id="top-rate" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                            <img src="images/item-02.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Herschel supply co 25l
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $75.00
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-03.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                Denim jacket blue
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
                                                $92.50
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <img src="images/item-05.jpg" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                </a>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                                    <!-- Button -->
                                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Coach slim easton black
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $165.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="images/item-07.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Frayed denim shorts
                                        </a>

                                        <span class="block2-oldprice m-text7 p-r-5">
                                            $29.50
                                        </span>

                                        <span class="block2-newprice m-text8 p-r-5">
                                            $15.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="images/item-10.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Coach slim easton black
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $165.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
                                        <img src="images/item-11.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Frayed denim shorts
                                        </a>

                                        <span class="block2-oldprice m-text7 p-r-5">
                                            $29.50
                                        </span>

                                        <span class="block2-newprice m-text8 p-r-5">
                                            $15.90
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                        <img src="images/item-12.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Herschel supply co 25l
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $75.00
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                <!-- Block2 -->
                                <div class="block2">
                                    <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                        <img src="images/item-15.jpg" alt="IMG-PRODUCT">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="block2-txt p-t-20">
                                        <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                            Denim jacket blue
                                        </a>

                                        <span class="block2-price m-text6 p-r-5">
                                            $92.50
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
