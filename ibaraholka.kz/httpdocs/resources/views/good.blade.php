@extends('layouts.shopLayout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-editable/bootstrap-editable.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dropzone/basic.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.3/css/star-rating.css">
    <style>
        .star-rating {
          line-height:32px;
          font-size:1.25em;
        }

        .star-rating .fa-star{color: yellow;}
    </style>
@endsection

@section('nav')
<li>
    <a href="{{route('shop')}}">Магазин</a>
</li>

<li>
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

<li>
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
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        @foreach($categories as $category)
        <a href="index.html" class="s-text16">
            {{ App\Category::where('code', $category)->first()->title }}
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>
        @endforeach
        <!-- <a href="product.html" class="s-text16">
            Women
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="#" class="s-text16">
            T-Shirt
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
            Boxy T-Shirt with Roll Sleeve Detail
        </span> -->
    </div>
    <!-- Product Detail -->
    <div class="container p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        @if(count($photos)>0)
                        @foreach($photos as $photo)
                        <div class="item-slick3" data-thumb="{{asset('../resources/images') . '/' . $good->id . '/' . $photo->filename}}">
                            <div <?php
                             $date = Carbon\Carbon::now();
                             $date->subWeek();
                            if ($good->craeted_at > $date->toDateTimeString()) {
                                echo ' class="wrap-pic-w square block2-labelnew">';
                            }else{
                                echo ' class="wrap-pic-w square">';
                            } 
                                echo $good->created_at . '   ' . $date;?>
                                <img src="{{asset('../resources/images') . '/' . $good->id . '/' . $photo->filename}}" alt="фото-товара">
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="item-slick3" data-thumb="{{asset('../resources/images/product-detail-01.jpg')}}">
                            <div <?php 
                             $date1 = Carbon\Carbon::now();
                             $date1->subWeek();
                             if ($good->craeted_at > $date1) {
                                echo ' class="wrap-pic-w square block2-labelnew">';
                            }else{
                                echo ' class="wrap-pic-w square">';
                            } 
                                echo $good->created_at . '   ' . $date1;?>
                                <img src="{{asset('../resources/images/product-detail-01.jpg')}}" alt="добавьте фото">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="{{asset('../resources/images/product-detail-02.jpg')}}">
                            <div <?php 
                             $date2 = Carbon\Carbon::now();
                             $date2->subWeek();
                            if ($good->craeted_at > $date2) {
                                echo ' class="wrap-pic-w square block2-labelnew"';
                            }else{
                                echo ' class="wrap-pic-w square"';
                            } ?>>
                                <img src="{{asset('../resources/images/product-detail-02.jpg')}}" alt="добавьте фото">
                            </div>
                        </div>

                        <div <?php  
                            $date3 = Carbon\Carbon::now();
                            $date3->subWeek();
                            if ($good->craeted_at > $date3) {
                                echo ' class="wrap-pic-w square block2-labelnew"';
                            }else{
                                echo ' class="wrap-pic-w square"';
                            } ?> data-thumb="{{asset('../resources/images/product-detail-03.jpg')}}">
                            <div class="wrap-pic-w">
                                <img src="{{asset('../resources/images/product-detail-03.jpg')}}" alt="добавьте фото">
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    {{$good->title}}
                </h4>
                <span class="m-text17">
                    <del>{{$good->oldprice}} Тг.</del>
                </span>
                <span class="m-text17" style="color: #e65540">
                    {{$good->price}} Тг.
                </span>
                
                <hr>
                <div class="p-b-45">
                    <span class="s-text8"><b>Категория: </b>
                {{ App\Category::find($good->category)->title }}</span>
                </div>
                
                
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Описание
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <span class="muted s-text8 p-t-10">{{$good->description}} </span>
                        </p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Дополнительная информация
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                        </p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Отзывы ({{count($reviews)}})
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                        
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        @if(count($reviews) > 0)
                        @foreach($reviews as $review)
                        <p class="s-text8">
                            {{ $review->text }}
                        </p>
                        <p class="s-text">{{ $review->created_at }}</p>
                        
                        <div class="star-rating{{$review->id}}" onClick="ratingFunction('{{$review->id}}');" onLoad="ratingFunction('{{$review->id}}');">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                        </div>


                        <div class="row lead">
                            <div id="stars-existing" class="starrr" data-rating='{{ $review->points }}'></div>
                            You gave a rating of <span id="count-existing">{{ $review->points }}</span>
                        </div>
                        <!-- <b>Points: </b><span class="s-text">{{ $review->points }}</span> -->
                        <br><br>
                        @endforeach
                        @else
                        <p class="s-text8">
                            Нет отзывов                            
                        </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{ asset('dropzone/dropzone.js') }}"></script>
    <script src="{{ asset('dropzone/dropzone-config.js') }}"></script>
    <script src="{{ asset('bootstrap-editable/bootstrap-editable.min.js') }}"></script>
    <script src="{{ asset('bootstrap-editable/bootstrap-editable.js') }}"></script>
    <script>
        var SetRatingStar = function($id) {
          var $star_rating = $('.star-rating' + $id + ' .fa');
          return $star_rating.each(function() {
            if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
              return $(this).removeClass('fa-star-o').addClass('fa-star');
            } else {
              return $(this).removeClass('fa-star').addClass('fa-star-o');
            }
          });
        };

        function ratingFunction($id){
          var $star_rating = $('.star-rating' + $id + ' .fa');
          $star_rating.siblings('input.rating-value').val($(this).data('rating'));
          return SetRatingStar($id); 
        }
        // $star_rating.on('click', function() {
        //   $star_rating.siblings('input.rating-value').val($(this).data('rating'));
        //   return SetRatingStar();
        // });

        //SetRatingStar();
        $(document).ready(function() {

        });
    </script>
@endsection