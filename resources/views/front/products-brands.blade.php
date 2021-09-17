@extends('front.master-category')
@section('content')
<main class="main">
    <div class="page-header text-center" style="background-image: url('{{asset('theme/assets/images/page-header-bg.jpg')}}')">
        <div class="container">
            <h1 class="page-title">{{$page_name}}<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item"><a href="{{url('/')}}/products/shop-by-brand">Brands</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$page_name}}</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            @include('front.tool')

            <div class="products">
                <div class="row">
                    @foreach($Products as $item)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                        <div class="product">
                            <figure class="product-media">
                                {{-- <span class="product-label label-out">Out of Stock</span> --}}
                                {{-- <span class="product-label label-new">New</span> --}}
                                <a href="{{url('/')}}/product/{{$item->slung}}">
                                    <img src="{{url('/')}}/uploads/product/{{$item->thumbnail}}" alt="{{$item->name}}" class="product-image">
                                </a>
    
                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="{{url('/')}}/popup/{{$item->slung}}" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
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
                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    @endforeach
                </div><!-- End .row -->

                <nav aria-label="Page navigation">
                    <?php echo $Products ?>
                </nav>
                <!-- End .load-more-container -->
            </div><!-- End .products -->

            <div class="sidebar-filter-overlay"></div><!-- End .sidebar-filter-overlay -->
            @include('front.filter')
        </div><!-- End .container -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
@endsection