<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png')}}">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="{{asset('theme/assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css')}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/plugins/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/plugins/magnific-popup/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/plugins/jquery.countdown.css')}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/skins/skin-demo-13.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/demos/demo-13.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-10 header-intro-clearance">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li>   
                                        <div class="header-dropdown">
                                            <a href="#">Engligh</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li class="login">
                                        <a href="#signin-modal" data-toggle="modal">Sign in / Sign up</a>
                                    </li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.html" class="logo">
                            <img src="{{asset('theme/assets/images/demos/demo-13/logo.png')}}" alt="Molla Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Departments</option>
                                            <option value="1">Fashion</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Men</option>
                                            <option value="4">- Jewellery</option>
                                            <option value="5">- Kids Fashion</option>
                                            <option value="6">Electronics</option>
                                            <option value="7">- Smart TVs</option>
                                            <option value="8">- Cameras</option>
                                            <option value="9">- Games</option>
                                            <option value="10">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="12">- Cars and Trucks</option>
                                            <option value="15">- Boats</option>
                                            <option value="16">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                        <div class="header-dropdown-link">
                            <div class="dropdown compare-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                    <i class="icon-random"></i>
                                    <span class="compare-txt">Compare</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="compare-products">
                                        <li class="compare-product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                        </li>
                                        <li class="compare-product">
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                            <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                        </li>
                                    </ul>

                                    <div class="compare-actions">
                                        <a href="#" class="action-link">Clear All</a>
                                        <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                    </div>
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .compare-dropdown -->

                            <a href="wishlist.html" class="wishlist-link">
                                <i class="icon-heart-o"></i>
                                <span class="wishlist-count">3</span>
                                <span class="wishlist-txt">Wishlist</span>
                            </a>

                            <div class="dropdown cart-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">2</span>
                                    <span class="cart-txt">Cart</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Beige knitted elastic runner shoes</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $84.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{asset('theme/assets/images/products/cart/product-1.jpg')}}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-cart-details">
                                                <h4 class="product-title">
                                                    <a href="product.html">Blue utility pinafore denim dress</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    x $76.00
                                                </span>
                                            </div><!-- End .product-cart-details -->

                                            <figure class="product-image-container">
                                                <a href="product.html" class="product-image">
                                                    <img src="{{asset('theme/assets/images/products/cart/product-2.jpg')}}" alt="product">
                                                </a>
                                            </figure>
                                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>Total</span>

                                        <span class="cart-total-price">$160.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-primary">View Cart</a>
                                        <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .cart-dropdown -->
                        </div>
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown show is-on" data-visible="true">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-display="static" title="Browse Categories">
                                Browse Categories
                            </a>

                            <div class="dropdown-menu show">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#">Electronics</a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Laptops & Computers</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Desktop Computers</a></li>
                                                                        <li><a href="#">Monitors</a></li>
                                                                        <li><a href="#">Laptops</a></li>
                                                                        <li><a href="#">iPad & Tablets</a></li>
                                                                        <li><a href="#">Hard Drives & Storage</a></li>
                                                                        <li><a href="#">Printers & Supplies</a></li>
                                                                        <li><a href="#">Computer Accessories</a></li>
                                                                    </ul>

                                                                    <div class="menu-title">TV & Video</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">TVs</a></li>
                                                                        <li><a href="#">Home Audio Speakers</a></li>
                                                                        <li><a href="#">Projectors</a></li>
                                                                        <li><a href="#">Media Streaming Devices</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->

                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Cell Phones</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Carrier Phones</a></li>
                                                                        <li><a href="#">Unlocked Phones</a></li>
                                                                        <li><a href="#">Phone & Cellphone Cases</a></li>
                                                                        <li><a href="#">Cellphone Chargers </a></li>
                                                                    </ul>

                                                                    <div class="menu-title">Digital Cameras</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Digital SLR Cameras</a></li>
                                                                        <li><a href="#">Sports & Action Cameras</a></li>
                                                                        <li><a href="#">Camcorders</a></li>
                                                                        <li><a href="#">Camera Lenses</a></li>
                                                                        <li><a href="#">Photo Printer</a></li>
                                                                        <li><a href="#">Digital Memory Cards</a></li>
                                                                        <li><a href="#">Camera Bags, Backpacks & Cases</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="{{asset('theme/assets/images/demos/demo-13/menu/banner-1.jpg')}}" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#">Furniture</a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Bedroom</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Beds, Frames & Bases</a></li>
                                                                        <li><a href="#">Dressers</a></li>
                                                                        <li><a href="#">Nightstands</a></li>
                                                                        <li><a href="#">Kids' Beds & Headboards</a></li>
                                                                        <li><a href="#">Armoires</a></li>
                                                                    </ul>

                                                                    <div class="menu-title">Living Room</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Coffee Tables</a></li>
                                                                        <li><a href="#">Chairs</a></li>
                                                                        <li><a href="#">Tables</a></li>
                                                                        <li><a href="#">Futons & Sofa Beds</a></li>
                                                                        <li><a href="#">Cabinets & Chests</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->

                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Office</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Office Chairs</a></li>
                                                                        <li><a href="#">Desks</a></li>
                                                                        <li><a href="#">Bookcases</a></li>
                                                                        <li><a href="#">File Cabinets</a></li>
                                                                        <li><a href="#">Breakroom Tables</a></li>
                                                                    </ul>

                                                                    <div class="menu-title">Kitchen & Dining</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#">Dining Sets</a></li>
                                                                        <li><a href="#">Kitchen Storage Cabinets</a></li>
                                                                        <li><a href="#">Bakers Racks</a></li>
                                                                        <li><a href="#">Dining Chairs</a></li>
                                                                        <li><a href="#">Dining Room Tables</a></li>
                                                                        <li><a href="#">Bar Stools</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="{{asset('theme/assets/images/demos/demo-13/menu/banner-2.jpg')}}" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#">Cooking</a>

                                            <div class="megamenu">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <div class="menu-title">Cookware</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Cookware Sets</a></li>
                                                                <li><a href="#">Pans, Griddles & Woks</a></li>
                                                                <li><a href="#">Pots</a></li>
                                                                <li><a href="#">Skillets & Grill Pans</a></li>
                                                                <li><a href="#">Kettles</a></li>
                                                                <li><a href="#">Soup & Stockpots</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="menu-title">Dinnerware & Tabletop</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Plates</a></li>
                                                                <li><a href="#">Cups & Mugs</a></li>
                                                                <li><a href="#">Trays & Platters</a></li>
                                                                <li><a href="#">Coffee & Tea Serving</a></li>
                                                                <li><a href="#">Salt & Pepper Shaker</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="menu-title">Cooking Appliances</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Microwaves</a></li>
                                                                <li><a href="#">Coffee Makers</a></li>
                                                                <li><a href="#">Mixers & Attachments</a></li>
                                                                <li><a href="#">Slow Cookers</a></li>
                                                                <li><a href="#">Air Fryers</a></li>
                                                                <li><a href="#">Toasters & Ovens</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="row menu-banners">
                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    <img src="{{asset('theme/assets/images/demos/demo-13/menu/1.jpg')}}" alt="image">
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    <img src="{{asset('theme/assets/images/demos/demo-13/menu/2.jpg')}}" alt="image">
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->

                                                        <div class="col-md-4">
                                                            <div class="banner">
                                                                <a href="#">
                                                                    <img src="{{asset('theme/assets/images/demos/demo-13/menu/3.jpg')}}" alt="image">
                                                                </a>
                                                            </div><!-- End .banner -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li class="megamenu-container">
                                            <a class="sf-with-ul" href="#">Clothing</a>

                                            <div class="megamenu">
                                                <div class="row no-gutters">
                                                    <div class="col-md-8">
                                                        <div class="menu-col">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Women</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                        <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                        <li><a href="#"><strong>Trending</strong></a></li>
                                                                        <li><a href="#">Clothing</a></li>
                                                                        <li><a href="#">Shoes</a></li>
                                                                        <li><a href="#">Bags</a></li>
                                                                        <li><a href="#">Accessories</a></li>
                                                                        <li><a href="#">Jewlery & Watches</a></li>
                                                                        <li><a href="#"><strong>Sale</strong></a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->

                                                                <div class="col-md-6">
                                                                    <div class="menu-title">Men</div><!-- End .menu-title -->
                                                                    <ul>
                                                                        <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                        <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                        <li><a href="#"><strong>Trending</strong></a></li>
                                                                        <li><a href="#">Clothing</a></li>
                                                                        <li><a href="#">Shoes</a></li>
                                                                        <li><a href="#">Bags</a></li>
                                                                        <li><a href="#">Accessories</a></li>
                                                                        <li><a href="#">Jewlery & Watches</a></li>
                                                                    </ul>
                                                                </div><!-- End .col-md-6 -->
                                                            </div><!-- End .row -->
                                                        </div><!-- End .menu-col -->
                                                    </div><!-- End .col-md-8 -->

                                                    <div class="col-md-4">
                                                        <div class="banner banner-overlay">
                                                            <a href="category.html" class="banner banner-menu">
                                                                <img src="{{asset('theme/assets/images/demos/demo-13/menu/banner-3.jpg')}}" alt="Banner">
                                                            </a>
                                                        </div><!-- End .banner banner-overlay -->
                                                    </div><!-- End .col-md-4 -->
                                                </div><!-- End .row -->

                                                <div class="menu-col menu-brands">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="{{asset('theme/assets/images/brands/1.png')}}" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="{{asset('theme/assets/images/brands/2.png')}}" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="{{asset('theme/assets/images/brands/3.png')}}" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="{{asset('theme/assets/images/brands/4.png')}}" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="{{asset('theme/assets/images/brands/5.png')}}" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->

                                                        <div class="col-lg-2">
                                                            <a href="#" class="brand">
                                                                <img src="{{asset('theme/assets/images/brands/6.png')}}" alt="Brand Name">
                                                            </a>
                                                        </div><!-- End .col-lg-2 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-brands -->
                                            </div><!-- End .megamenu -->
                                        </li>
                                        <li><a href="#">Home Appliances</a></li>
                                        <li><a href="#">Healthy & Beauty</a></li>
                                        <li><a href="#">Shoes & Boots</a></li>
                                        <li><a href="#">Travel & Outdoor</a></li>
                                        <li><a href="#">Smart Phones</a></li>
                                        <li><a href="#">TV & Audio</a></li>
                                        <li><a href="#">Gift Ideas</a></li>
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .col-lg-3 -->
                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="index.html" class="sf-with-ul">Home</a>

                                    <div class="megamenu demo">
                                    <div class="menu-col">
                                        <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                        <div class="demo-list">
                                            <div class="demo-item">
                                                <a href="index-1.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                    <span class="demo-title">01 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-2.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/2.jpg);"></span>
                                                    <span class="demo-title">02 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-3.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/3.jpg);"></span>
                                                    <span class="demo-title">03 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-4.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                    <span class="demo-title">04 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-5.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/5.jpg);"></span>
                                                    <span class="demo-title">05 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-6.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/6.jpg);"></span>
                                                    <span class="demo-title">06 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-7.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/7.jpg);"></span>
                                                    <span class="demo-title">07 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-8.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/8.jpg);"></span>
                                                    <span class="demo-title">08 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-9.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/9.jpg);"></span>
                                                    <span class="demo-title">09 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-10.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                    <span class="demo-title">10 - shoes store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-11.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                    <span class="demo-title">11 - furniture simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-12.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                    <span class="demo-title">12 - fashion simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-13.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/13.jpg);"></span>
                                                    <span class="demo-title">13 - market</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-14.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/14.jpg);"></span>
                                                    <span class="demo-title">14 - market fullwidth</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-15.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/15.jpg);"></span>
                                                    <span class="demo-title">15 - lookbook 1</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-16.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/16.jpg);"></span>
                                                    <span class="demo-title">16 - lookbook 2</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-17.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/17.jpg);"></span>
                                                    <span class="demo-title">17 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-18.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/18.jpg);"></span>
                                                    <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-19.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                    <span class="demo-title">19 - games store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-20.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                    <span class="demo-title">20 - book store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-21.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                    <span class="demo-title">21 - sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-22.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/22.jpg);"></span>
                                                    <span class="demo-title">22 - tools store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-23.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/23.jpg);"></span>
                                                    <span class="demo-title">23 - fashion left navigation store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-24.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                    <span class="demo-title">24 - extreme sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-25.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/25.jpg);"></span>
                                                    <span class="demo-title">25 - jewelry store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-26.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/26.jpg);"></span>
                                                    <span class="demo-title">26 - market store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-27.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/27.jpg);"></span>
                                                    <span class="demo-title">27 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-28.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/28.jpg);"></span>
                                                    <span class="demo-title">28 - food market store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-29.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/29.jpg);"></span>
                                                    <span class="demo-title">29 - t-shirts store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-30.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/30.jpg);"></span>
                                                    <span class="demo-title">30 - headphones store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-31.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/31.jpg);"></span>
                                                    <span class="demo-title">31 - yoga store</span>
                                                </a>
                                            </div><!-- End .demo-item -->
                                        </div><!-- End .demo-list -->
                                        <div class="megamenu-action text-center">
                                            <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .text-center -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .megamenu -->
                                </li>
                                <li>
                                    <a href="category.html" class="sf-with-ul">Shop</a>

                                    <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-list.html">Shop List</a></li>
                                                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                            <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>

                                                        <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->

                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="dashboard.html">My Account</a></li>
                                                            <li><a href="#">Lookbook</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-8 -->

                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="category.html" class="banner banner-menu">
                                                    <img src="{{asset('theme/assets/images/menu/banner-1.jpg')}}" alt="Banner">

                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner banner-overlay -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="product.html" class="sf-with-ul">Product</a>

                                    <div class="megamenu megamenu-sm">
                                        <div class="row no-gutters">
                                            <div class="col-md-6">
                                                <div class="menu-col">
                                                    <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                    <ul>
                                                        <li><a href="product.html">Default</a></li>
                                                        <li><a href="product-centered.html">Centered</a></li>
                                                        <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                        <li><a href="product-gallery.html">Gallery</a></li>
                                                        <li><a href="product-sticky.html">Sticky Info</a></li>
                                                        <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                        <li><a href="product-fullwidth.html">Full Width</a></li>
                                                        <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                    </ul>
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-6 -->

                                            <div class="col-md-6">
                                                <div class="banner banner-overlay">
                                                    <a href="category.html">
                                                        <img src="{{asset('theme/assets/images/menu/banner-2.jpg')}}" alt="Banner">

                                                        <div class="banner-content banner-content-bottom">
                                                            <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                        </div><!-- End .banner-content -->
                                                    </a>
                                                </div><!-- End .banner -->
                                            </div><!-- End .col-md-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-sm -->
                                </li>
                                <li>
                                    <a href="#" class="sf-with-ul">Pages</a>

                                    <ul>
                                        <li>
                                            <a href="about.html" class="sf-with-ul">About</a>

                                            <ul>
                                                <li><a href="about.html">About 01</a></li>
                                                <li><a href="about-2.html">About 02</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html" class="sf-with-ul">Contact</a>

                                            <ul>
                                                <li><a href="contact.html">Contact 01</a></li>
                                                <li><a href="contact-2.html">Contact 02</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html" class="sf-with-ul">Blog</a>

                                    <ul>
                                        <li><a href="blog.html">Classic</a></li>
                                        <li><a href="blog-listing.html">Listing</a></li>
                                        <li>
                                            <a href="#">Grid</a>
                                            <ul>
                                                <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                                <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                                <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                                <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Masonry</a>
                                            <ul>
                                                <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                                <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                                <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                                <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Mask</a>
                                            <ul>
                                                <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                                <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Single Post</a>
                                            <ul>
                                                <li><a href="single.html">Default with sidebar</a></li>
                                                <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                                <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                    <ul>
                                        <li><a href="elements-products.html">Products</a></li>
                                        <li><a href="elements-typography.html">Typography</a></li>
                                        <li><a href="elements-titles.html">Titles</a></li>
                                        <li><a href="elements-banners.html">Banners</a></li>
                                        <li><a href="elements-product-category.html">Product Category</a></li>
                                        <li><a href="elements-video-banners.html">Video Banners</a></li>
                                        <li><a href="elements-buttons.html">Buttons</a></li>
                                        <li><a href="elements-accordions.html">Accordions</a></li>
                                        <li><a href="elements-tabs.html">Tabs</a></li>
                                        <li><a href="elements-testimonials.html">Testimonials</a></li>
                                        <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                        <li><a href="elements-portfolio.html">Portfolio</a></li>
                                        <li><a href="elements-cta.html">Call to Action</a></li>
                                        <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                    </ul>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .col-lg-9 -->
                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        @yield('content')       

        <footer class="footer footer-2">
            <div class="icon-boxes-container">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rocket"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                    <p>Orders $50 or more</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                        
                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                    <p>Within 30 days</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-info-circle"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                    <p>When you sign up</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->

                        <div class="col-sm-6 col-lg-3">
                            <div class="icon-box icon-box-side">
                                <span class="icon-box-icon">
                                    <i class="icon-life-ring"></i>
                                </span>

                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                    <p>24/7 amazing services</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-sm-6 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .icon-boxes-container -->

            <div class="footer-middle border-0">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="widget widget-about">
                                <img src="{{asset('theme/assets/images/demos/demo-13/logo-footer.png')}}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                                <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. </p>
                                
                                <div class="widget-about-info">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-4">
                                            <span class="widget-about-title">Got Question? Call us 24/7</span>
                                            <a href="tel:123456789">+0123 456 789</a>
                                        </div><!-- End .col-sm-6 -->
                                        <div class="col-sm-6 col-md-8">
                                            <span class="widget-about-title">Payment Method</span>
                                            <figure class="footer-payments">
                                                <img src="{{asset('theme/assets/images/payments.png')}}" alt="Payment methods" width="272" height="20">
                                            </figure><!-- End .footer-payments -->
                                        </div><!-- End .col-sm-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .widget-about-info -->
                            </div><!-- End .widget about-widget -->
                        </div><!-- End .col-sm-12 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Information</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="about.html">About Molla</a></li>
                                    <li><a href="#">How to shop on Molla</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="contact.html">Contact us</a></li>
                                    <li><a href="login.html">Log in</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Payment Methods</a></li>
                                    <li><a href="#">Money-back guarantee!</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-4 col-lg-3 -->

                        <div class="col-sm-4 col-lg-2">
                            <div class="widget">
                                <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                                <ul class="widget-list">
                                    <li><a href="#">Sign In</a></li>
                                    <li><a href="cart.html">View Cart</a></li>
                                    <li><a href="#">My Wishlist</a></li>
                                    <li><a href="#">Track My Order</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul><!-- End .widget-list -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-sm-64 col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Social Media</span>
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container mobile-menu-light">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            
            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                    <nav class="mobile-nav">
                        <ul class="mobile-menu">
                            <li class="active">
                                <a href="index.html">Home</a>

                                <ul>
                                    <li><a href="index-1.html">01 - furniture store</a></li>
                                    <li><a href="index-2.html">02 - furniture store</a></li>
                                    <li><a href="index-3.html">03 - electronic store</a></li>
                                    <li><a href="index-4.html">04 - electronic store</a></li>
                                    <li><a href="index-5.html">05 - fashion store</a></li>
                                    <li><a href="index-6.html">06 - fashion store</a></li>
                                    <li><a href="index-7.html">07 - fashion store</a></li>
                                    <li><a href="index-8.html">08 - fashion store</a></li>
                                    <li><a href="index-9.html">09 - fashion store</a></li>
                                    <li><a href="index-10.html">10 - shoes store</a></li>
                                    <li><a href="index-11.html">11 - furniture simple store</a></li>
                                    <li><a href="index-12.html">12 - fashion simple store</a></li>
                                    <li><a href="index-13.html">13 - market</a></li>
                                    <li><a href="index-14.html">14 - market fullwidth</a></li>
                                    <li><a href="index-15.html">15 - lookbook 1</a></li>
                                    <li><a href="index-16.html">16 - lookbook 2</a></li>
                                    <li><a href="index-17.html">17 - fashion store</a></li>
                                    <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                                    <li><a href="index-19.html">19 - games store</a></li>
                                    <li><a href="index-20.html">20 - book store</a></li>
                                    <li><a href="index-21.html">21 - sport store</a></li>
                                    <li><a href="index-22.html">22 - tools store</a></li>
                                    <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                                    <li><a href="index-24.html">24 - extreme sport store</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="category.html">Shop</a>
                                <ul>
                                    <li><a href="category-list.html">Shop List</a></li>
                                    <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                    <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                    <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                    <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                    <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                    <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                    <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="#">Lookbook</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>
                                <ul>
                                    <li><a href="product.html">Default</a></li>
                                    <li><a href="product-centered.html">Centered</a></li>
                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                    <li><a href="product-gallery.html">Gallery</a></li>
                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html">Elements</a>
                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav><!-- End .mobile-nav -->
                </div><!-- .End .tab-pane -->
                <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                    <nav class="mobile-cats-nav">
                        <ul class="mobile-cats-menu">
                            <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                            <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                            <li><a href="#">Beds</a></li>
                            <li><a href="#">Lighting</a></li>
                            <li><a href="#">Sofas & Sleeper sofas</a></li>
                            <li><a href="#">Storage</a></li>
                            <li><a href="#">Armchairs & Chaises</a></li>
                            <li><a href="#">Decoration </a></li>
                            <li><a href="#">Kitchen Cabinets</a></li>
                            <li><a href="#">Coffee & Tables</a></li>
                            <li><a href="#">Outdoor Furniture </a></li>
                        </ul><!-- End .mobile-cats-menu -->
                    </nav><!-- End .mobile-cats-nav -->
                </div><!-- .End .tab-pane -->
            </div><!-- End .tab-content -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill nav-border-anim" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{asset('theme/assets/images/popup/newsletter/logo.png')}}" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                            <p>Subscribe to the Molla eCommerce newsletter to receive timely updates from your favorite products.</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                    <div class="input-group-append">
                                        <button class="btn" type="submit"><span>go</span></button>
                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="{{asset('theme/assets/images/popup/newsletter/img-1.jpg')}}" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plugins JS File -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.hoverIntent.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/superfish.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap-input-spinner.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.plugin.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.countdown.min.js')}}"></script>
    
    <!-- Main JS File -->
    <script src="{{asset('theme/assets/js/main.js')}}"></script>
    <script src="{{asset('theme/assets/js/demos/demo-13.js')}}"></script>
</body>


</html>