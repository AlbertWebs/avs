@extends('front.master')
@section('content')
<main class="main">
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
                <?php $Categories = DB::table('category')->limit('12')->get(); ?>
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
    <?php $Full = DB::table('product')->where('stock','In Stock')->where('offer','1')->limit('10')->inRandomOrder()->get();  ?>
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
        <div class="container">
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
                            "margin": 20,
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
                                    "items":6,
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
                                    <a href="popup/{{$item->slung}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div><!-- End .product-action-vertical -->

                                <div class="product-action">
                                    <a href="{{url('/')}}/shopping-cart/add-to-cart/{{$item->id}}" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
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

                                {{-- <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 90%;"></div><!-- End .ratings-val -->
                                    </div>
                                    <span class="ratings-text">( 12 Reviews )</span>
                                </div> --}}
                                <!-- End .rating-container -->
                                {{--  --}}
                                {{-- <div class="product-cat">
                                    <a href="{{url('/product')}}/{{$item->slung}}"> {{$item->meta}} </a> 
                                </div> --}}
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

    <?php $Category = DB::table('category')->limit('15')->get(); ?>
    @foreach ($Category as $category)
    <div class="container electronics">
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
            <div class="tab-pane p-0 fade show active" id="elec-new-tab" role="tabpanel" aria-labelledby="elec-new-link">
                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": true,
                        "margin": 20,
                        "loop": false,
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
                    <?php $Featured = DB::table('product')->where('stock','In Stock')->where('cat',$category->id)->where('featured','1')->limit('10')->get(); ?>
                    @foreach ($Featured as $item)
                    <div class="product">
                        <figure class="product-media">
                            {{-- <span class="product-label label-out">Out of Stock</span> --}}
                            {{-- <span class="product-label label-new">New</span> --}}
                            <a href="{{url('/')}}/product/{{$item->slung}}">
                                <img style="max-width:217px !important;" src="{{url('/')}}/uploads/product/{{$item->thumbnail}}" alt="{{$item->name}}" class="product-image">
                            </a>

                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                <a href="popup/{{$item->slung}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            </div><!-- End .product-action-vertical -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
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

                            {{-- <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 90%;"></div><!-- End .ratings-val -->
                                </div>
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div> --}}
                            <!-- End .rating-container -->
                            {{--  --}}
                            {{-- <div class="product-cat">
                                <a href="{{url('/product')}}/{{$item->slung}}"> {{$item->meta}} </a> 
                            </div> --}}
                            <!-- End .product-cat -->
                            {{--  --}}
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                    @endforeach
                </div><!-- End .owl-carousel -->
            </div><!-- .End .tab-pane -->
        </div><!-- End .tab-content -->
    </div><!-- End .container -->
   
{{-- Offer Banner Area --}}
    <div class="mb-3"></div><!-- End .mb-3 -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner banner-overlay banner-overlay-light">
                    <a href="#">
                        <img src="{{asset('theme/assets/images/demos/demo-13/banners/banner-4.jpg')}}" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle d-none d-sm-block"><a href="#">Spring Sale is Coming</a></h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title"><a href="#">All Smart Watches <br>Discount <br><span class="text-primary">15% off</span></a></h3><!-- End .banner-title -->
                        <a href="#" class="banner-link banner-link-dark">Discover Now <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->

            <div class="col-lg-6">
                <div class="banner banner-overlay">
                    <a href="#">
                        <img src="{{asset('theme/assets/images/demos/demo-13/banners/banner-5.png')}}" alt="Banner">
                    </a>

                    <div class="banner-content">
                        <h4 class="banner-subtitle text-white  d-none d-sm-block"><a href="#">Amazing Value</a></h4><!-- End .banner-subtitle -->
                        <h3 class="banner-title text-white"><a href="#">Headphones Trending <br>JBL Harman <br><span>from $59,99</span></a></h3><!-- End .banner-title -->
                        <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
            </div><!-- End .col-lg-6 -->
        </div><!-- End .row -->
    </div><!-- End .container -->
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
            <a href="{{url('/')}}/product/brands/{{$brand->name}}" class="brand">
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