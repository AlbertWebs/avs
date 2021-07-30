@extends('front.master')
@section('content')
<main class="main bg-light">
    <?php $Slider = DB::table('product')->where('stock','In Stock')->limit(10)->InRandomOrder()->where('slider','1')->get(); $CountSlider = count($Slider); ?> 
    @if($CountSlider == 0)

    @else
    <div class="intro-slider-container">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                "nav": false,
                "responsive": {
                    "992": {
                        "nav": true
                    }
                }
            }'>
            @foreach($Slider as $slider)
            <div class="intro-slide" style="background-image: url('{{url('/')}}/uploads/product/{{$slider->image_two}}');">
                <div class="container intro-content">
                    <div class="row">
                        <?php $Category = DB::table('category')->where('id',$slider->cat)->get(); ?>
                        @foreach ($Category as $Cat)
                        <div class="col-auto offset-lg-3 intro-col">
                            <h3 class="intro-subtitle">{{$Cat->cat}}</h3><!-- End .h3 intro-subtitle -->
                            <h1 class="intro-title width-300">{{$slider->name}}
                                <span>
                                    <sup class="font-weight-light">from</sup>
                                    <span class="text-primary">KES {{$slider->price}}<sup>,00</sup></span>
                                </span>
                            </h1><!-- End .intro-title -->

                            <a href="{{url('/')}}/product/{{$slider->slung}}" class="btn btn-outline-primary-2">
                                <span>Shop Now</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div><!-- End .col-auto offset-lg-3 -->
                        @endforeach
                    </div><!-- End .row -->
                </div><!-- End .container intro-content -->
            </div><!-- End .intro-slide -->
            @endforeach
        </div><!-- End .owl-carousel owl-simple -->

        <span class="slider-loader"></span><!-- End .slider-loader -->
    </div><!-- End .intro-slider-container -->
    @endif

    <div class="mb-4"></div><!-- End .mb-2 -->

    <div class="container">
        <h2 class="title text-center mb-2">Explore Popular Categories</h2><!-- End .title -->

        <div class="cat-blocks-container">
            <div class="row">
                <?php $Categories = DB::table('category')->limit('6')->get(); ?>
                @foreach($Categories as $Cat)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{url('/')}}/products/{{$Cat->slung}}" class="cat-block">
                        <figure>
                            <span>
                                <img style="max-width:131px;" src="{{url('/')}}/uploads/categories/{{$Cat->image}}" alt="{{$Cat->cat}}">
                            </span>
                        </figure>

                        <h3 class="cat-block-title">{{$Cat->cat}}</h3><!-- End .cat-block-title -->
                    </a>
                </div><!-- End .col-sm-4 col-lg-2 -->
                @endforeach
            </div><!-- End .row -->
        </div><!-- End .cat-blocks-container -->
    </div><!-- End .container -->

    <div class="mb-2"></div><!-- End .mb-2 -->
    <h1 style="font-size:2px; margin:0 auto; color:#fff">Car Audio Shop in Nairobi</h1>
    <?php $Full = DB::table('product')->where('stock','In Stock')->where('offer','11')->limit('10')->inRandomOrder()->get();  ?>
    @if($Full->isEmpty())

    @else
    <div class="container">
        <div class="row">
            @foreach($Full as $full)
            <div class="col-sm-6 col-lg-4 ">
                <div class="banner banner-overlay"> 
                    <a href="{{url('/')}}/product/{{$full->slung}}">
                        <img src="{{url('/')}}/uploads/product/{{$full->offer_banner}}" alt="{{$full->name}}">
                    </a>

                    <div class="banner-content">
                        {{-- <h4 class="banner-subtitle text-white"><a href="#">Weekend Sale</a></h4> --}}
                        {{-- <h3 class="banner-title text-white"><a href="#">Lighting <br>& Accessories <br><span>25% off</span></a></h3> --}}
                        {{-- <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a> --}}
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-3 -->
            @endforeach

        </div><!-- End .row -->
    </div><!-- End .container -->
    @endif

    <div class="mb-3"></div><!-- End .mb-3 -->
    
    <div class="bg-light pt-3 pb-5">
        <div class="container mt-2" >
            <div class="heading heading-flex heading-border mb-3">
                <div class="heading-left">
                    <h2 class="title">Hot Deals Products</h2><!-- End .title -->
                </div><!-- End .heading-left -->

               <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a href="{{url('/')}}/products" class="nav-link active" id="hot-all-link"   role="tab" >All Products</a>
                        </li>
                    </ul>
               </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="hot-all-tab" role="tabpanel" aria-labelledby="hot-all-link">
                    <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 10,
                            "loop": true,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1280": {
                                    "items":5,
                                    "nav": true
                                }
                            }
                        }'>
                        <?php $Trending = DB::table('product')->where('stock','In Stock')->where('trending','1')->limit('10')->get(); ?>
                        
                        @foreach ($Trending as $item)
                        <div class="product">
                            <figure class="product-media">
                                {{-- <span class="product-label label-out">Out of Stock</span> --}}
                                {{-- <span class="product-label label-new">New</span> --}}
                                <a href="{{url('/')}}/product/{{$item->slung}}">
                                    <img style="max-width:217px !important;" src="{{url('/')}}/uploads/product/{{$item->thumbnail}}" alt="{{$item->name}}" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="{{url('/')}}/wishlist/add-to-wishlist/{{$item->id}}" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="{{url('/')}}/compare/add-to-compare/{{$item->id}}" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="{{url('/')}}/popup/{{$item->slung}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$item->id}}" class="btn-product btn-cart" title="Buy Now"><span>Buy Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <?php $Category = DB::table('category')->where('id',$item->cat)->get(); ?>
                                    @foreach ($Category as $Cat)
                                    <a href="{{url('/products')}}/{{$Cat->slung}}"> {{$Cat->cat}} </a> 
                                    @endforeach
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{url('/')}}/product/{{$item->slung}}">{{$item->name}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    KES{{$item->price}}
                                </div><!-- End .product-price -->
                                <?php 
                                $Reviews = DB::table('reviews')->where('product_id',$item->id)->get(); 
                                $CountReviews = count($Reviews);
                                $Ratings = DB::table('reviews')->where('product_id',$item->id)->avg('rating');
                                $avg = ceil($Ratings);
                                    ?>
                                    @if($Reviews->isEmpty())

                                    @else
                                    <div class="ratings-container">
                                        <div class="ratings">
                                            <?php
                                                //Average Rating 
                                            ?>
                                            <div class="ratings-val" style="width: {{$avg}}%;"></div><!-- End .ratings-val -->
                                        </div>
                                        <span class="ratings-text">( {{$CountReviews}} Reviews )</span>
                                    </div>
                                    @endif
                                    <!-- End .rating-container -->
                                    {{--  --}}
                                    <div class="product-cat meta">
                                        <a href="{{url('/product')}}/{{$item->slung}}"> {{$item->meta}} </a> 
                                    </div>
                            <!-- End .product-cat -->
                                {{--  --}}
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->
        </div><!-- End .container -->
    </div><!-- End .bg-light pt-5 pb-5 -->

   

    <div class="mb-3"></div><!-- End .mb-3 -->
    <?php $ctaBanner = DB::table('product')->where('id','127')->get(); ?>
    @if($ctaBanner->isEmpty())

    @else
    @foreach ($ctaBanner as $item)
    <div class="container">
        <div class="cta cta-border mb-5" style="background-image: url('{{asset('theme/assets/images/demos/demo-4/bg-1.jpg')}}');">
            <img width="258" src="{{url('/')}}/uploads/product/5-Inch-Foldable-Car-LCD-Dashboard-mon-001-removebg-preview.png" alt="camera" class="cta-img">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="cta-content">
                        <div class="cta-text text-right text-white">
                            <p>{{$item->meta}} <br><strong>{{$item->name}}</strong></p>
                        </div><!-- End .cta-text -->
                        <a href="{{url('/')}}/product/{{$item->slung}}" class="btn btn-primary btn-round"><span>Shop Now - KES{{$item->price}}</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .cta-content -->
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .cta -->
    </div>
    @endforeach
    @endif

    <?php $Category = DB::table('category')->limit('15')->get(); $counter = 1; ?>
    @foreach ($Category as $category)
    <div class="container electronics bg-light">
        <div class="heading heading-flex heading-border mb-3">
            <div class="heading-left">
                <h2 class="title">{{$category->cat}}</h2><!-- End .title -->
            </div><!-- End .heading-left -->

           <div class="heading-right">
                <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a href="{{url('/')}}/products/{{$category->slung}}" class="nav-link active" id="elec-new-link" data-toggle="tab" href="#elec-new-tab" role="tab" aria-controls="elec-new-tab" aria-selected="true">View All {{$category->cat}}</a>
                    </li>
                </ul>
           </div><!-- End .heading-right -->
        </div><!-- End .heading -->

        <div class="tab-content tab-content-carousel">
            <div class="products">
                <div class="row">
                    <?php $Featured = DB::table('product')->where('stock','In Stock')->where('cat',$category->id)->where('featured','1')->limit('4')->get(); $CountFeatured = count($Featured); $balance = 8-$CountFeatured; ?>
                    
                    @foreach ($Featured as $item)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3" >
                        <div class="product">
                            <figure class="product-media">
                                {{-- <span class="product-label label-out">Out of Stock</span> --}}
                                {{-- <span class="product-label label-new">New</span> --}}
                                <a href="{{url('/')}}/product/{{$item->slung}}">
                                    <img style="max-width:217px !important; margin:0 auto;" src="{{url('/')}}/uploads/product/{{$item->thumbnail}}" alt="{{$item->name}}" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="{{url('/')}}/popup/{{$item->slung}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Buy Now"><span>Buy Now</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <?php $Category = DB::table('category')->where('id',$item->cat)->get(); ?>
                                    @foreach ($Category as $Cat)
                                    <a href="{{url('/products')}}/{{$Cat->slung}}"> {{$Cat->cat}} </a> 
                                    @endforeach
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="{{url('/')}}/product/{{$item->slung}}">{{$item->name}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    KES{{$item->price}}
                                </div><!-- End .product-price -->
                                <?php 
                                    $Reviews = DB::table('reviews')->where('product_id',$item->id)->get(); 
                                    $CountReviews = count($Reviews);
                                    $Ratings = DB::table('reviews')->where('product_id',$item->id)->avg('rating');
                                    $avg = ceil($Ratings);
                                ?>
                                @if($Reviews->isEmpty())

                                @else
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <?php
                                             //Average Rating 
                                        ?>
                                        <div class="ratings-val" style="width: {{$avg}}%;"></div><!-- End .ratings-val -->
                                    </div>
                                    <span class="ratings-text">( {{$CountReviews}} Reviews )</span>
                                </div>
                                @endif
                                <!-- End .rating-container -->
                                {{--  --}}
                                <div class="product-cat meta">
                                    <a href="{{url('/product')}}/{{$item->slung}}"> {{$item->meta}} </a> 
                                </div>
                                <!-- End .product-cat -->
                                {{--  --}}
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div>
                    @endforeach
                    
                    {{--  --}}
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->

    <?php $OfferBanners = DB::table('offers')->where('category_id',$category->id)->get(); ?>

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($OfferBanners as $offer)
            @if($offer->format == '1')
            <div class="col-12">
                <div class="banner banner-rad mt-5">
                    <div class="bg-image d-flex justify-content-center pt-4 pb-4 mb-4 car-audio" style=" background-image: url('{{url('/')}}/uploads/CategoryBanners/{{$offer->banner}}'); background-size:cover">
                        <div class="banner-content position-relative pt-0">
                            <h4 class="banner-subtitle letter-spacing-normal font-size-normal text-white text-center pt-0 mb-1">
                                <a href="#"></a>
                            </h4>
                            <!-- End .banner-subtitle letter-spacing-normal font-size-normal -->
                            <h3 class="banner-title text-white text-center font-weight-bold mb-0">
                                <a href="#">
                                    <br> </a>
                            </h3>
                            <!-- End .banner-title -->
                            {{-- <h4 class="banner-text text-secondary text-center font-weight-light text-uppercase">Sale Up 35% Off</h4> --}}
                        </div>
                        <!-- End .banner-content -->
                    </div>
                </div>
            </div>
            @else
           
            <div class="col-sm-6 col-md-<?php if($offer->format == '1'){ echo "12"; }elseif($offer->format == '2'){ echo "6"; }else { echo "4"; } ?>">
                <div class="banner banner-overlay banner-sm banner-ad content-right align-center">
                    <a href="#">
                        <img src="{{url('/')}}/uploads/CategoryBanners/{{$offer->banner}}" alt="Banner">
                    </a>
                    <div class="banner-content">
                        <h4 class="banner-subtitle" style="color:#ffffff;">{!!html_entity_decode($offer->content)!!}</h4>
                        <h4 class="banner-price"><span style="color:#ffffff;" class="price">{{$offer->title}}</span></h4>
                        <a href="#" class="banner-link">Buy Now<i class="icon-long-arrow-right"></i></a>
                    </div>
                </div><!-- End .banner -->
            </div><!-- End .col-md-4 -->
            

            @endif
            @endforeach

        </div><!-- End .row -->
    </div>
    {{--  --}}

    {{-- One Banner --}}
  


   
{{-- Offer Banner Area --}}
    <div class="mb-3"></div><!-- End .mb-3 -->

    @if($counter==1)
    <div class="bg-light deal-container pt-7 pb-7 mb-5">
        <div class="container">
            <div class="heading text-center mb-4">
                <h2 class="title">Weekly Deals</h2><!-- End .title -->
                <p class="title-desc">Best Deals This Week</p><!-- End .title-desc -->
            </div><!-- End .heading -->

            <div class="row">
                <?php $WeeklySpecial = DB::table('product')->where('offer','1')->limit('1')->get(); ?>
                @foreach($WeeklySpecial as $week)
                <div class="col-lg-6 deal-col">
                    <div class="deal" style="background-image: url('{{url('/')}}/uploads/product/{{$week->fb_pixels}}'); ">
                        {{-- <div class="deal-top">
                            <h2>Deal of the Week.</h2>
                            <h4>Limited quantities. </h4>
                        </div> --}}
                        <!-- End .deal-top -->

                        <div class="deal-content">
                            {{-- <h3 class="product-title"><a href="{{url('/')}}/product/{{$week->slung}}">{{$week->name}}</a></h3><!-- End .product-title --> --}}

                            {{-- <div class="product-price">
                                <span class="new-price">KES {{$week->price}}</span>
                                <span class="old-price">Was {{$week->price_raw}}</span>
                            </div> --}}
                            <!-- End .product-price -->

                            {{-- <a href="{{url('/')}}/product/{{$week->slung}}" class="btn btn-link"><span>Shop Now</span><i class="icon-long-arrow-right"></i></a> --}}
                        </div><!-- End .deal-content -->

                        <div class="deal-bottom">
                            {{-- <div class="deal-countdown is-countdown" data-until="+10h"><span class="countdown-row countdown-show3"><span class="countdown-section"><span class="countdown-amount">09</span><span class="countdown-period">hours</span></span><span class="countdown-section"><span class="countdown-amount">00</span><span class="countdown-period">minutes</span></span><span class="countdown-section"><span class="countdown-amount">46</span><span class="countdown-period">seconds</span></span></span></div><!-- End .deal-countdown --> --}}
                        </div><!-- End .deal-bottom -->
                    </div><!-- End .deal -->
                </div><!-- End .col-lg-6 -->
                @endforeach
                <div class="col-lg-6">
                    <div class="products">
                        <div class="row">
                            <?php $Weekly = DB::table('product')->where('weekly','1')->limit('2')->get(); ?>
                            @foreach($Weekly as $week)
                            <div class="col-6">
                                <div class="product product-2">
                                    <figure class="product-media">
                                        <a href="{{url('/')}}/product/{{$week->slung}}">
                                            <img  src="{{url('/')}}/uploads/product/{{$week->thumbnail}}" alt="{{$week->name}}" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="{{url('/')}}/wishlist/add-to-wishlist/{{$item->id}}" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                        </div><!-- End .product-action -->

                                        <div class="product-action product-action-dark">
                                            <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$item->id}}" class="btn-product btn-cart" title="Buy Now"><span>Buy Now</span></a>
                                            <a href="{{url('/')}}/popup/{{$item->slung}}" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <?php $Category = DB::table('category')->where('id',$item->cat)->get(); ?>
                                            @foreach ($Category as $Cat)
                                            <a href="{{url('/products')}}/{{$Cat->slung}}"> {{$Cat->cat}} </a> 
                                            @endforeach
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="{{url('/')}}/product/{{$item->slung}}">{{$item->name}}</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            KES{{$item->price}}
                                        </div><!-- End .product-price -->
                                        <?php 
                                        $Reviews = DB::table('reviews')->where('product_id',$item->id)->get(); 
                                        $CountReviews = count($Reviews);
                                        $Ratings = DB::table('reviews')->where('product_id',$item->id)->avg('rating');
                                        $avg = ceil($Ratings);
                                            ?>
                                            @if($Reviews->isEmpty())
        
                                            @else
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <?php
                                                        //Average Rating 
                                                    ?>
                                                    <div class="ratings-val" style="width: {{$avg}}%;"></div><!-- End .ratings-val -->
                                                </div>
                                                <span class="ratings-text">( {{$CountReviews}} Reviews )</span>
                                            </div>
                                            @endif
                                            <!-- End .rating-container -->
                                            {{--  --}}
                                            <div class="product-cat meta">
                                                <a href="{{url('/product')}}/{{$item->slung}}"> {{$item->meta}} </a> 
                                            </div>
                                        <!-- End .product-cat -->
                                        {{--  --}}
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .col-sm-6 -->
                            @endforeach
                        </div><!-- End .row -->
                    </div><!-- End .products -->
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->

            <div class="more-container text-center mt-3 mb-0">
                <a href="{{url('/')}}/special-offers" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Weekly deals</span><i class="icon-long-arrow-right"></i></a>
            </div><!-- End .more-container -->
        </div><!-- End .container -->
    </div>

  
    @endif
    <?php $counter = $counter+1; ?>
    @endforeach
    <div class="mb-1"></div><!-- End .mb-1 -->




    <div class="container">
        <h2 class="title title-border mb-5">Shop by Brands</h2><!-- End .title -->
        <div class="owl-carousel mb-5 owl-simple" data-toggle="owl" 
            data-owl-options='{
                "nav": false, 
                "dots": true,
                "margin": 30,
                "loop": false,
                "responsive": {
                    "0": {
                        "items":2
                    },
                    "420": {
                        "items":3
                    },
                    "600": {
                        "items":4
                    },
                    "900": {
                        "items":5
                    },
                    "1024": {
                        "items":6
                    },
                    "1280": {
                        "items":6,
                        "nav": true,
                        "dots": false
                    }
                }
            }'>
            <?php $Brand = DB::table('brands')->get() ?>
            @foreach($Brand as $brand)
            <a href="{{url('/')}}/products/brand/{{$brand->name}}" class="brand">
                <img src="{{url('/')}}/uploads/brands/{{$brand->image}}" alt="{{$brand->name}}">
            </a>
            @endforeach
        </div><!-- End .owl-carousel -->
    </div><!-- End .container -->

    <div class="cta cta-horizontal cta-horizontal-box bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2xl-5col">
                    <h3 class="cta-title text-white">Join Our Newsletter</h3><!-- End .cta-title -->
                    <p class="cta-desc text-white">Subcribe to get information about products and coupons</p><!-- End .cta-desc -->
                </div><!-- End .col-lg-5 -->
                
                <div class="col-3xl-5col">
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                            </div><!-- .End .input-group-append -->
                        </div><!-- .End .input-group -->
                    </form>
                </div><!-- End .col-lg-7 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .cta -->

    <div class="blog-posts bg-light pt-4 pb-7">
        <div class="container">
            <h2 class="title">From Our Blog</h2><!-- End .title-lg text-center -->

            <div class="owl-carousel owl-simple" data-toggle="owl" 
                data-owl-options='{
                    "nav": false, 
                    "dots": true,
                    "items": 3,
                    "margin": 20,
                    "loop": false,
                    "responsive": {
                        "0": {
                            "items":1
                        },
                        "600": {
                            "items":2
                        },
                        "992": {
                            "items":3
                        },
                        "1280": {
                            "items":3,
                            "nav": true, 
                            "dots": false
                        }
                    }
                }'>
                <?php $Blogs = DB::table('blogs')->orderBy('id','DESC')->limit('5')->get(); ?>
                @foreach ($Blogs as $item)
                <article class="entry">
                    <figure class="entry-media">
                        <a href="{{url('/')}}/blog-posts/{{$item->slung}}">
                            <img src="{{url('/')}}/uploads/blog/{{$item->image_one}}" alt="{{$item->title}}">
                        </a>
                    </figure><!-- End .entry-media -->

                    <div class="entry-body">
                        <div class="entry-meta">
                            <a href="#">
                                <?php 
                                    $RawDate = $item->created_at;
                                    $FormatDate = strtotime($RawDate);
                                    $Month = date('M',$FormatDate);
                                    $Date = date('D',$FormatDate);
                                    $date = date('d',$FormatDate);
                                    $Year = date('Y',$FormatDate);
                                ?>
                                {{$Month}} {{$date}}, {{$Year}}
                            </a> &nbsp; | &nbsp;
                            <?php echo count($Comments = DB::table('comments')->where('blog_id',$item->id)->get()); ?> Comments
                        </div><!-- End .entry-meta -->

                        <h3 class="entry-title">
                            <a href="{{url('/')}}/blog-posts/{{$item->slung}}">{{$item->title}}</a>
                        </h3><!-- End .entry-title -->

                        <div class="entry-content">
                            <p>{{$item->meta}}...</p>
                            <a href="{{url('/')}}/blog-posts/{{$item->slung}}" class="read-more">Read More</a>
                        </div><!-- End .entry-content -->
                    </div><!-- End .entry-body -->
                </article><!-- End .entry -->
                @endforeach
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->
    </div><!-- End .blog-posts -->
</main><!-- End .main -->
@endsection