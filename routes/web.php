<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishListController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentsConroller;
use App\Http\Controllers\DemoController;







/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/find-us',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/about-us',[App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/terms-and-conditions',[App\Http\Controllers\HomeController::class, 'terms'])->name('terms');
Route::get('/privacy-policy',[App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
Route::get('/shipping-policy',[App\Http\Controllers\HomeController::class, 'shipping'])->name('shipping');
Route::get('/delivery',[App\Http\Controllers\HomeController::class, 'delivery'])->name('delivery');
Route::get('/copyright',[App\Http\Controllers\HomeController::class, 'copyright'])->name('copyright');
Route::get('/our-portfolio',[App\Http\Controllers\HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/our-portfolio/{id}',[App\Http\Controllers\HomeController::class, 'folio'])->name('folio');

//Search
Route::get('/search',[App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::post('/search-results',[App\Http\Controllers\HomeController::class, 'searchsite'])->name('search-results');
Route::get('/filter',[App\Http\Controllers\HomeController::class, 'filter'])->name('search-filter');


// Tags
Route::get('/product-tags/{slung}', [App\Http\Controllers\HomeController::class, 'product_tags'])->name('product_tags');

// Products
Route::group(['prefix'=>'products'], function(){
Route::get('/', [App\Http\Controllers\HomeController::class, 'all'])->name('all');
Route::get('/shop-by-category', [App\Http\Controllers\HomeController::class, 'categories'])->name('shop-by-category');
Route::get('/shop-by-brand', [App\Http\Controllers\HomeController::class, 'brand'])->name('shop-by-brand');
Route::get('/{slung}', [App\Http\Controllers\HomeController::class, 'product_category'])->name('product-category');
Route::get('/brand/{brand}', [App\Http\Controllers\HomeController::class, 'brands'])->name('shop-by-brand');
});
// Single Product
Route::get('product/{slung}', [App\Http\Controllers\HomeController::class, 'product_single'])->name('product-single');
// Product Helpers
Route::get('/popup/{slung}', [App\Http\Controllers\HomeController::class, 'popup'])->name('popup');
Route::get('/fullscreen/{slung}', [App\Http\Controllers\HomeController::class, 'fullscreen'])->name('fullscreen');
// Blog Posts
Route::group(['prefix'=>'blog-posts'], function(){
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
    Route::get('/{slung}', [App\Http\Controllers\BlogController::class, 'blog'])->name('blog.post');
});
// Cart Routes
Route::group(['prefix'=>'shopping-cart'], function(){
Route::get('/', [CartController::class, 'index'])->name('cart');
Route::get('add-to-cart/{id}', [CartController::class, 'addCart'])->name('add.to.cart');
Route::post('update-cart', [CartController::class, 'update'])->name('update.cart');
Route::get('remove-from-cart/{id}', [CartController::class, 'destroy'])->name('remove.from.cart');
// Checkout
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/payment', [CheckoutController::class, 'payment'])->name('payment');
Route::post('checkout/login', [CheckoutController::class, 'login'])->name('checkout.login');
Route::post('checkout/create-user', [CheckoutController::class, 'create'])->name('checkout.create');
Route::get('checkout/placeOrder', [CheckoutController::class, 'placeOrderGet'])->name('checkout.order.get');
Route::post('checkout/placeOrder', [CheckoutController::class, 'placeOrder'])->name('checkout.order');
Route::post('/checkout/process-coupon', [CheckoutController::class, 'process_coupon'])->name('process_coupon');

});
// WishList
Route::group(['prefix'=>'wishlist'], function(){
Route::get('/', [WishListController::class, 'index'])->name('wishlist');
Route::get('add-to-wishlist/{id}', [WishListController::class, 'addWish'])->name('add.to.wishlist');
Route::get('remove-from-wishlist/{id}', [WishListController::class, 'destroy'])->name('remove.from.wishlist');
});
// Compare
Route::group(['prefix'=>'compare'], function(){
Route::get('/', [CompareController::class, 'index'])->name('compare');
Route::get('add-to-compare/{id}', [CompareController::class, 'addCompare'])->name('add.to.compare');
Route::get('remove-from-compare/{id}', [CompareController::class, 'destroy'])->name('remove.from.compare');
Route::get('clear-compare', [CompareController::class, 'clear'])->name('clear.compare');
});

//Payment pages

Route::post('payments/veryfy/mpesa',[PaymentsConroller::class, 'verify']);//The Lipa na MPESA Page
Route::post('payments/veryfy/sitoki',[PaymentsConroller::class, 'stk']); //The Lipa na MPESA Page
Route::get('mpesa/confirm',[PaymentsConroller::class, 'confirm']);           //Rquired URL
Route::get('mpesa/validate',[PaymentsConroller::class, 'validation']);         //Rquired URL
Route::get('mpesa/register',[PaymentsConroller::class, 'register']);           //Rquired URL

Route::get('export', [DemoController::class, 'export']); 
Route::get('importExportView', [DemoController::class, 'importExportView']); 
Route::get('import', [DemoController::class, 'import']); 

Route::post('/secure-login', [App\Http\Controllers\HomeController::class, 'handleLogin']); 




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Users Routes
Auth::routes();
Route::group(['prefix'=>'dashboard'], function(){
Route::get('/', [ClientController::class, 'index'])->name('dashboard.home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
// SocialMedia
Route::get('/facebook', [LoginController::class, 'facebook']);
Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
Route::get('/google', [LoginController::class, 'google']);
Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);

});

// Admin Routes
Auth::routes();

Route::group(['prefix'=>'admin'], function(){

  
//Login route


Route::get('/',  [AdminsController::class, 'index'])->name('admin.home')->middleware('is_admin');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
 
//reset password

//Testimonial
Route::get('/addTestimonial',  [AdminsController::class, 'addTestimonial'])->middleware('is_admin');
Route::post('/add_Testimonial',  [AdminsController::class, 'add_Testimonial'])->middleware('is_admin');
Route::get('/testimonials', [AdminsController::class, 'testimonials'])->middleware('is_admin');
Route::get('/editTestimonial/{id}',  [AdminsController::class, 'editTestimonial'])->middleware('is_admin');
Route::get('/deleteTestimonial/{id}',  [AdminsController::class, 'deleteTestimonial'])->middleware('is_admin');
Route::post('/edit_Testimonial/{id}',  [AdminsController::class, 'edit_Testimonial'])->middleware('is_admin');


Route::get('/edit-Product-slung',  [AdminsController::class, 'edit_Product_slung'])->middleware('is_admin');

Route::get('/addProductToFacebookPixel','AdminsController@addProductToFacebookPixel');
Route::get('/emptyProductToFacebookPixel','AdminsController@emptyProductToFacebookPixel');

//Terms Privacy copyright
//copyright
Route::get('/copyright', [AdminsController::class, 'copyright'])->middleware('is_admin');
Route::post('/edit_copyright',  [AdminsController::class, 'edit_copyright'])->middleware('is_admin');
// Delivery Terms
Route::get('/delivery', [AdminsController::class, 'delivery'])->middleware('is_admin');
Route::post('/edit_delivery',  [AdminsController::class, 'edit_delivery'])->middleware('is_admin');
//Privacy
Route::get('/privacy', [AdminsController::class, 'privacy'])->middleware('is_admin');
Route::get('/addPrivacy',  [AdminsController::class, 'addPrivacy'])->middleware('is_admin');
Route::get('/editPrivacy/{id}',  [AdminsController::class, 'editPrivacy'])->middleware('is_admin');
Route::post('/add_privacy',  [AdminsController::class, 'add_privacy'])->middleware('is_admin');
Route::get('/delete_privacy/{id}', [AdminsController::class, 'delete_privacy'])->middleware('is_admin');
Route::post('/edit_privacy/{id}',  [AdminsController::class, 'edit_privacy'])->middleware('is_admin');

//values
Route::get('/coupons', [AdminsController::class, 'coupons'])->middleware('is_admin');
Route::get('/addCoupon',  [AdminsController::class, 'addCoupon'])->middleware('is_admin');
Route::get('/editCoupon/{id}',  [AdminsController::class, 'editCoupon'])->middleware('is_admin');
Route::post('/add_Coupon',  [AdminsController::class, 'add_Coupon'])->middleware('is_admin');
Route::get('/delete_Coupon/{id}', [AdminsController::class, 'delete_Coupon'])->middleware('is_admin');
Route::post('/edit_Coupon/{id}',  [AdminsController::class, 'edit_Coupon'])->middleware('is_admin');

// Operations
Route::get('/operations', [AdminsController::class, 'operations'])->middleware('is_admin');

//values
Route::get('/values', [AdminsController::class, 'values'])->middleware('is_admin');
Route::get('/addValues',  [AdminsController::class, 'addValues'])->middleware('is_admin');
Route::get('/editValues/{id}',  [AdminsController::class, 'editValues'])->middleware('is_admin');
Route::post('/add_values',  [AdminsController::class, 'add_values'])->middleware('is_admin');
Route::get('/delete_values/{id}', [AdminsController::class, 'delete_values'])->middleware('is_admin');
Route::post('/edit_values/{id}',  [AdminsController::class, 'edit_values'])->middleware('is_admin');


//Offers
Route::get('/Products_offer', [AdminsController::class, 'Products_offer'])->middleware('is_admin');
Route::get('/swapoffer/{id}', [AdminsController::class, 'swapoffer'])->middleware('is_admin');
Route::get('/deleteOffer/{id}', [AdminsController::class, 'deleteOffer'])->middleware('is_admin');
Route::post('/swap_offer/{id}', [AdminsController::class, 'swap_offer'])->middleware('is_admin');
Route::get('/special_offer/{id}', [AdminsController::class, 'special_offer'])->middleware('is_admin');
Route::post('/special_offer_post', [AdminsController::class, 'special_offer_post'])->middleware('is_admin');
Route::get('/special_offer_edit/{id}', [AdminsController::class, 'special_offer_edit'])->middleware('is_admin');
Route::get('/swap_full/{id}', [AdminsController::class, 'swap_full'])->middleware('is_admin');

// Featured& trending
Route::get('/swapTrending/{id}', [AdminsController::class, 'swapTrending'])->middleware('is_admin');
Route::get('/swapFeatured/{id}', [AdminsController::class, 'swapFeatured'])->middleware('is_admin');
Route::get('/swapSlider/{id}', [AdminsController::class, 'swapSlider'])->middleware('is_admin');
Route::get('/swapBanner/{id}', [AdminsController::class, 'swapBanner'])->middleware('is_admin');

Route::get('/wishlist', [AdminsController::class, 'wishlist'])->middleware('is_admin');

//Who
Route::get('/who', [AdminsController::class, 'who'])->middleware('is_admin');
Route::get('/editWho/{id}',  [AdminsController::class, 'editWho'])->middleware('is_admin');
Route::get('/delete_who/{id}', [AdminsController::class, 'delete_who'])->middleware('is_admin');
Route::post('/edit_who/{id}',  [AdminsController::class, 'edit_who'])->middleware('is_admin');

//Terms
Route::get('/terms', [AdminsController::class, 'terms'])->middleware('is_admin');
Route::get('/addTerms',  [AdminsController::class, 'addTerms'])->middleware('is_admin');
Route::get('/editTerm/{id}',  [AdminsController::class, 'editTerm'])->middleware('is_admin');
Route::post('/add_term',  [AdminsController::class, 'add_term'])->middleware('is_admin');
Route::post('/edit_term/{id}',  [AdminsController::class, 'edit_term'])->middleware('is_admin');
Route::get('/delete_term/{id}', [AdminsController::class, 'delete_term'])->middleware('is_admin');
//About
Route::get('/about', [AdminsController::class, 'about'])->middleware('is_admin');
Route::post('/about_save',  [AdminsController::class, 'about_save'])->middleware('is_admin');
//Services
Route::get('/services', [AdminsController::class, 'services'])->middleware('is_admin');
Route::get('/deleteService/{id}', [AdminsController::class, 'deleteService'])->middleware('is_admin');
Route::post('/edit_Services/{id}',  [AdminsController::class, 'edit_Services'])->middleware('is_admin');
Route::get('/editServices/{id}',  [AdminsController::class, 'editServices'])->middleware('is_admin');
Route::get('/addService',  [AdminsController::class, 'addService'])->middleware('is_admin');
Route::post('/add_Service',  [AdminsController::class, 'add_Service'])->middleware('is_admin');

//Pricing
Route::get('/pricing', [AdminsController::class, 'pricing'])->middleware('is_admin');
Route::get('/deletePricing/{id}', [AdminsController::class, 'deletePricing'])->middleware('is_admin');
Route::post('/edit_Pricing/{id}',  [AdminsController::class, 'edit_Pricing'])->middleware('is_admin');
Route::get('/editPricing/{id}',  [AdminsController::class, 'editPricing'])->middleware('is_admin');
Route::get('/addPricing',  [AdminsController::class, 'addPricing'])->middleware('is_admin');
Route::post('/add_Pricing',  [AdminsController::class, 'add_Pricing'])->middleware('is_admin');

//Video
Route::get('/videos', [AdminsController::class, 'videos'])->middleware('is_admin');
Route::get('/deleteVideo/{id}', [AdminsController::class, 'deleteVideo'])->middleware('is_admin'); 
Route::post('/edit_Video/{id}',  [AdminsController::class, 'edit_Video'])->middleware('is_admin');
Route::get('/editVideo/{id}',  [AdminsController::class, 'editVideo'])->middleware('is_admin');
Route::post('/add_Video/{id}',  [AdminsController::class, 'add_Video'])->middleware('is_admin');
Route::get('/addVideo',  [AdminsController::class, 'addVideo'])->middleware('is_admin');


//Porfolio
Route::get('/portfolio', [AdminsController::class, 'portfolio'])->middleware('is_admin');
Route::get('/deletePortfolio/{id}', [AdminsController::class, 'deletePortfolio'])->middleware('is_admin');
Route::post('/edit_Portfolio/{id}',  [AdminsController::class, 'edit_Portfolio'])->middleware('is_admin');
Route::get('/editPortfolio/{id}',  [AdminsController::class, 'editPortfolio'])->middleware('is_admin');
Route::get('/addPortfolio',  [AdminsController::class, 'addPortfolio'])->middleware('is_admin');
Route::post('/add_Portfolio',  [AdminsController::class, 'add_Portfolio'])->middleware('is_admin');

//How It Works
Route::get('/how', [AdminsController::class, 'how'])->middleware('is_admin');
Route::get('/deleteHow/{id}', [AdminsController::class, 'deleteHow'])->middleware('is_admin');
Route::post('/edit_How/{id}',  [AdminsController::class, 'edit_How'])->middleware('is_admin');
Route::get('/editHow/{id}',  [AdminsController::class, 'editHow'])->middleware('is_admin');
Route::get('/addHow',  [AdminsController::class, 'addHow'])->middleware('is_admin');
Route::post('/add_How',  [AdminsController::class, 'add_How'])->middleware('is_admin');

//Gallery
Route::get('/gallery', [AdminsController::class, 'gallery'])->middleware('is_admin');
Route::get('/editGallery/{id}', [AdminsController::class, 'editGallery'])->middleware('is_admin');
Route::get('/deleteGallery/{id}', [AdminsController::class, 'deleteGallery'])->middleware('is_admin');
Route::post('/save_gallery/{id}',  [AdminsController::class, 'save_gallery'])->middleware('is_admin');
Route::get('/addGallery',  [AdminsController::class, 'addGallery'])->middleware('is_admin');
Route::get('/galleryList',  [AdminsController::class, 'galleryList'])->middleware('is_admin');
Route::post('/add_Gallery',  [AdminsController::class, 'add_Gallery'])->middleware('is_admin');

//Slider
Route::get('/slider', [AdminsController::class, 'slider'])->middleware('is_admin');
Route::get('/editSlider/{id}', [AdminsController::class, 'editSlider'])->middleware('is_admin');
Route::get('/deleteSlider/{id}', [AdminsController::class, 'deleteSlider'])->middleware('is_admin');
Route::post('/edit_Slider/{id}',  [AdminsController::class, 'edit_Slider'])->middleware('is_admin');
Route::get('/addSlider',  [AdminsController::class, 'addSlider'])->middleware('is_admin');
Route::post('/add_Slider',  [AdminsController::class, 'add_Slider'])->middleware('is_admin');

//Banner
Route::get('/banner', [AdminsController::class, 'banners'])->middleware('is_admin');
Route::get('/editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
Route::post('/edit_Banner/{id}',  [AdminsController::class, 'edit_Banner'])->middleware('is_admin');

//Clients
Route::get('/addClient',  [AdminsController::class, 'addClient'])->middleware('is_admin');
Route::post('/add_Client',  [AdminsController::class, 'add_Client'])->middleware('is_admin');
Route::get('/clients', [AdminsController::class, 'clients'])->middleware('is_admin');
Route::get('/editClient/{id}',  [AdminsController::class, 'editClient'])->middleware('is_admin');
Route::get('/deleteClient/{id}',  [AdminsController::class, 'deleteClient'])->middleware('is_admin');
Route::post('/edit_Client/{id}',  [AdminsController::class, 'edit_Client'])->middleware('is_admin');


//Clients
Route::get('/addBrand',  [AdminsController::class, 'addBrand'])->middleware('is_admin');
Route::post('/add_Brand',  [AdminsController::class, 'add_Brand'])->middleware('is_admin');
Route::get('/brands', [AdminsController::class, 'brands'])->middleware('is_admin');
Route::get('/editBrand/{id}',  [AdminsController::class, 'editBrand'])->middleware('is_admin');
Route::get('/deleteBrand/{id}',  [AdminsController::class, 'deleteBrand'])->middleware('is_admin');
Route::post('/edit_Brand/{id}',  [AdminsController::class, 'edit_Brand'])->middleware('is_admin');

//Statisctics
Route::get('/stats', [AdminsController::class, 'stats'])->middleware('is_admin');
Route::get('/editStats/{id}',  [AdminsController::class, 'editStats'])->middleware('is_admin');
Route::get('/deleteStats/{id}',  [AdminsController::class, 'deleteStats'])->middleware('is_admin');
Route::post('/edit_Stats/{id}',  [AdminsController::class, 'edit_Stats'])->middleware('is_admin');

//Pages
Route::get('/pages', [AdminsController::class, 'pages'])->middleware('is_admin');
Route::get('/editPage/{id}', [AdminsController::class, 'editPage'])->middleware('is_admin');
Route::get('/deletePage/{id}', [AdminsController::class, 'deletePage'])->middleware('is_admin');
Route::post('/edit_Page/{id}',  [AdminsController::class, 'edit_Page'])->middleware('is_admin');
Route::get('/addPage',  [AdminsController::class, 'addPage'])->middleware('is_admin');
Route::post('/add_Page',  [AdminsController::class, 'add_Page'])->middleware('is_admin');
Route::post('/set_Page/{name}',  [AdminsController::class, 'set_Page'])->middleware('is_admin');
Route::get('/setPage/{name}',  [AdminsController::class, 'setPage'])->middleware('is_admin');

// My Api
Route::get('/myApi',  [AdminsController::class, 'myApi'])->middleware('is_admin');
Route::get('/invoices',  [AdminsController::class, 'invoices'])->middleware('is_admin');
Route::get('/deleteInvoice/{id}',  [AdminsController::class, 'deleteInvoice'])->middleware('is_admin');
Route::get('/approveInvoice/{id}',  [AdminsController::class, 'approveInvoice'])->middleware('is_admin');


//Priducts
Route::get('/products', [AdminsController::class, 'products'])->middleware('is_admin');
Route::get('/Products-lte', [AdminsController::class, 'productslte'])->middleware('is_admin');

Route::get('/editProduct/{id}', [AdminsController::class, 'editProduct'])->middleware('is_admin');
Route::get('/editProductDetails/{id}', [AdminsController::class, 'editProductDetails'])->middleware('is_admin');
Route::get('/deleteProduct/{id}', [AdminsController::class, 'deleteProduct'])->middleware('is_admin');
Route::post('/edit_Product/{id}',  [AdminsController::class, 'edit_Product'])->middleware('is_admin');
Route::post('/edit_Product_Details/{id}',  [AdminsController::class, 'edit_Product_Details'])->middleware('is_admin');
Route::get('/addProduct',  [AdminsController::class, 'addProduct'])->middleware('is_admin');
Route::post('/add_Product',  [AdminsController::class, 'add_Product'])->middleware('is_admin');


//Admin
Route::get('/admins', [AdminsController::class, 'admins'])->middleware('is_admin');
Route::get('/editAdmin/{id}', [AdminsController::class, 'editAdmin'])->middleware('is_admin');
Route::get('/deleteAdmin/{id}', [AdminsController::class, 'deleteAdmin'])->middleware('is_admin');
Route::post('/edit_Admin/{id}',  [AdminsController::class, 'edit_Admin'])->middleware('is_admin');
Route::get('/addAdmin',  [AdminsController::class, 'addAdmin'])->middleware('is_admin');
Route::post('/add_Admin',  [AdminsController::class, 'add_Admin'])->middleware('is_admin');

//Orders
Route::get('/orders', [AdminsController::class, 'orders'])->middleware('is_admin');
Route::get('/editOrders/{id}', [AdminsController::class, 'editOrders'])->middleware('is_admin');
Route::get('/deleteOrders/{id}', [AdminsController::class, 'deleteOrders'])->middleware('is_admin');
Route::get('/confrimOrder/{id}', [AdminsController::class, 'confrimOrder'])->middleware('is_admin');
Route::get('/swapOrder/{id}', [AdminsController::class, 'swapOrder'])->middleware('is_admin');
Route::post('/edit_Orders/{id}',  [AdminsController::class, 'edit_Orders'])->middleware('is_admin');
Route::get('/addOrder',  [AdminsController::class, 'addOrder'])->middleware('is_admin');
Route::post('/add_Order',  [AdminsController::class, 'add_Order'])->middleware('is_admin');

//User
Route::get('/users', [AdminsController::class, 'users'])->middleware('is_admin');
Route::get('/editUser/{id}', [AdminsController::class, 'editUser'])->middleware('is_admin');
Route::get('/deleteUser/{id}', [AdminsController::class, 'deleteUser'])->middleware('is_admin');
Route::post('/edit_User/{id}',  [AdminsController::class, 'edit_User'])->middleware('is_admin');
Route::get('/addUser',  [AdminsController::class, 'addUser'])->middleware('is_admin');
Route::post('/add_User',  [AdminsController::class, 'add_User'])->middleware('is_admin');

//Blog Controls
Route::get('/blog', [AdminsController::class, 'blog'])->middleware('is_admin');
Route::get('/editBlog/{id}', [AdminsController::class, 'editBlog'])->middleware('is_admin'); 
Route::get('/delete_Blog/{id}', [AdminsController::class, 'delete_Blog'])->middleware('is_admin');
Route::post('/edit_Blog/{id}',  [AdminsController::class, 'edit_Blog'])->middleware('is_admin');
Route::get('/addBlog',  [AdminsController::class, 'addBlog'])->middleware('is_admin');
Route::post('/add_blog',  [AdminsController::class, 'add_Blog'])->middleware('is_admin');
//Categories Control
Route::get('/categories', [AdminsController::class, 'categories'])->middleware('is_admin');
Route::get('/editCategories/{id}', [AdminsController::class, 'editCategories'])->middleware('is_admin');
Route::get('/deleteCategory/{id}', [AdminsController::class, 'deleteCategory'])->middleware('is_admin');
Route::post('/edit_Category/{id}',  [AdminsController::class, 'edit_Category'])->middleware('is_admin');
Route::get('/addCategory',  [AdminsController::class, 'addCategory'])->middleware('is_admin');
Route::post('/add_Category',  [AdminsController::class, 'add_Category'])->middleware('is_admin');

Route::get('/categoriesBanners', [AdminsController::class, 'categoriesBanners'])->middleware('is_admin');
Route::get('/editCategoriesBanners/{id}', [AdminsController::class, 'editCategoriesBanners'])->middleware('is_admin');
Route::get('/deleteCategoryBanners/{id}', [AdminsController::class, 'deleteCategoryBanners'])->middleware('is_admin');
Route::post('/edit_CategoryBanners/{id}',  [AdminsController::class, 'edit_CategoryBanners'])->middleware('is_admin');
Route::get('/addCategoryBanners',  [AdminsController::class, 'addCategoryBanners'])->middleware('is_admin');
Route::post('/add_CategoryBanners',  [AdminsController::class, 'add_CategoryBanners'])->middleware('is_admin');

Route::get('/tags', [AdminsController::class, 'tags'])->middleware('is_admin');
Route::get('/editTag/{id}', [AdminsController::class, 'editTag'])->middleware('is_admin');
Route::get('/deleteTag/{id}', [AdminsController::class, 'deleteTag'])->middleware('is_admin');
Route::post('/edit_Tag/{id}',  [AdminsController::class, 'edit_Tag'])->middleware('is_admin');
Route::get('/addTag',  [AdminsController::class, 'addTag'])->middleware('is_admin');
Route::post('/add_Tag',  [AdminsController::class, 'add_Tag'])->middleware('is_admin');

//Service Renreded Control
Route::get('/service_rendered', [AdminsController::class, 'service_rendered'])->middleware('is_admin');
Route::get('/editService_rendered/{id}', [AdminsController::class, 'editService_rendered'])->middleware('is_admin');
Route::get('/deleteService_rendered/{id}', [AdminsController::class, 'deleteService_rendered'])->middleware('is_admin');
Route::post('/edit_Service_rendered/{id}',  [AdminsController::class, 'edit_Service_rendered'])->middleware('is_admin');
Route::get('/addService_rendered',  [AdminsController::class, 'addService_rendered'])->middleware('is_admin');
Route::post('/add_Service_rendered',  [AdminsController::class, 'add_Service_rendered'])->middleware('is_admin');

//Daily
Route::get('/daily', [AdminsController::class, 'daily'])->middleware('is_admin');
Route::get('/editDaily/{id}', [AdminsController::class, 'editDaily'])->middleware('is_admin');
Route::get('/deleteDaily/{id}', [AdminsController::class, 'deleteDaily'])->middleware('is_admin');
Route::post('/edit_Daily/{id}',  [AdminsController::class, 'edit_Daily'])->middleware('is_admin');
Route::get('/addDaily',  [AdminsController::class, 'addDaily'])->middleware('is_admin');
Route::post('/add_Daily',  [AdminsController::class, 'add_Daily'])->middleware('is_admin');


//Sub Categories
Route::get('/subCategories', [AdminsController::class, 'subCategories'])->middleware('is_admin');
Route::get('/editSubCategories/{id}', [AdminsController::class, 'editSubCategories'])->middleware('is_admin');
Route::get('/deleteSubCategory/{id}', [AdminsController::class, 'deleteSubCategory'])->middleware('is_admin');
Route::post('/edit_SubCategory/{id}',  [AdminsController::class, 'edit_SubCategory'])->middleware('is_admin');
Route::get('/addSubCategory',  [AdminsController::class, 'addSubCategory'])->middleware('is_admin');
Route::post('/add_SubCategory',  [AdminsController::class, 'add_SubCategory'])->middleware('is_admin');

//Active Services 
Route::get('/traceServices', [AdminsController::class, 'traceServices'])->middleware('is_admin');
Route::get('/editTraceServices/{id}', [AdminsController::class, 'editTraceServices'])->middleware('is_admin');
Route::get('/deleteTraceServices/{id}', [AdminsController::class, 'deleteTraceServices'])->middleware('is_admin');
Route::post('/edit_TraceServices/{id}',  [AdminsController::class, 'edit_TraceServices'])->middleware('is_admin');
Route::get('/addTraceServices',  [AdminsController::class, 'addTraceServices'])->middleware('is_admin');
Route::post('/add_TraceServices',  [AdminsController::class, 'add_TraceServices'])->middleware('is_admin');

// Generic Routes
Route::get('/form', [AdminsController::class, 'form'])->middleware('is_admin');
Route::get('/list', [AdminsController::class, 'list'])->middleware('is_admin');
Route::get('/formfile', [AdminsController::class, 'formfile'])->middleware('is_admin');
Route::get('/formfiletext', [AdminsController::class, 'formfiletext'])->middleware('is_admin');

//Payments
Route::get('/payments', [AdminsController::class, 'payments'])->middleware('is_admin');
Route::get('/payments/explore/{id}', [AdminsController::class, 'payments_explore'])->middleware('is_admin');
//MPESA Routes
Route::get('/balance', [AdminsController::class, 'balance'])->middleware('is_admin');
Route::get('/reverse', [AdminsController::class, 'reverse'])->middleware('is_admin');
Route::get('/lnmo', [AdminsController::class, 'lnmo'])->middleware('is_admin');
Route::get('/b2b', [AdminsController::class, 'b2b'])->middleware('is_admin');
Route::get('/b2c', [AdminsController::class, 'b2c'])->middleware('is_admin');
Route::get('/lnmo/confirm/{id}', [AdminsController::class, 'lnmo_confirm'])->middleware('is_admin');


// Order
Route::get('/orders/explore/{id}', [AdminsController::class, 'order_explore'])->middleware('is_admin');

//Notifications
Route::get('/notifications', [AdminsController::class, 'notifications'])->middleware('is_admin');
Route::get('/notification/{id}', [AdminsController::class, 'notification'])->middleware('is_admin');
Route::get('/deleteNotification/{id}', [AdminsController::class, 'deleteNotification'])->middleware('is_admin');

//Service Requests
Route::get('/requests', [AdminsController::class, 'quoterequeste'])->middleware('is_admin');
Route::get('/markRequest/{id}/{status}/{type}', [AdminsController::class, 'markRequest'])->middleware('is_admin');

//Comments
Route::get('/reviews', [AdminsController::class, 'reviews'])->middleware('is_admin');
Route::get('/approve/{id}', [AdminsController::class, 'approve'])->middleware('is_admin');
Route::get('/decline/{id}', [AdminsController::class, 'decline'])->middleware('is_admin');

// Error Pages
Route::get('/403', [AdminsController::class, 'error403'])->middleware('is_admin');
Route::get('/404', [AdminsController::class, 'error404'])->middleware('is_admin');
Route::get('/405', [AdminsController::class, 'error405'])->middleware('is_admin');
Route::get('/500', [AdminsController::class, 'error500'])->middleware('is_admin');
Route::get('/503', [AdminsController::class, 'error503'])->middleware('is_admin');





// Subscribers Mail
Route::post('/updatemail', [AdminsController::class, 'updatemail'])->middleware('is_admin');


//Updates
Route::get('/updates', [AdminsController::class, 'updates'])->middleware('is_admin');
Route::get('/update/{id}', [AdminsController::class, 'update'])->middleware('is_admin');
Route::get('/mark/{id}', [AdminsController::class, 'mark'])->middleware('is_admin');

//profile
Route::get('/profile', [AdminsController::class, 'profile'])->middleware('is_admin');
Route::post('/profile_save/{id}', [AdminsController::class, 'profile_save'])->middleware('is_admin');
Route::get('/editFile/{id}', [AdminsController::class, 'editFile'])->middleware('is_admin');
Route::post('/edit_File/{id}', [AdminsController::class, 'edit_File'])->middleware('is_admin');

// Gallery
Route::get('/gallery', [AdminsController::class, 'gallery'])->middleware('is_admin');

//Under Contruction
Route::get('/under_construction', [AdminsController::class, 'under_construction'])->middleware('is_admin');

//Wizard
Route::get('/wizard', [AdminsController::class, 'wizard'])->middleware('is_admin');

//Maps
Route::get('/maps', [AdminsController::class, 'maps'])->middleware('is_admin');
// SiteSettings
Route::get('/sitesettings', [AdminsController::class, 'sitesettings'])->middleware('is_admin');
Route::post('/savesitesettings', [AdminsController::class, 'savesitesettings'])->middleware('is_admin'); 
//Messages
Route::get('/allMessages',  [AdminsController::class, 'allMessages'])->middleware('is_admin');
Route::get('/unread',  [AdminsController::class, 'unread'])->middleware('is_admin');
Route::get('/read/{id}',  [AdminsController::class, 'read'])->middleware('is_admin');
Route::post('/reply/{id}',  [AdminsController::class, 'reply'])->middleware('is_admin');
Route::get('/deleteMessage/{id}',  [AdminsController::class, 'deleteMessage'])->middleware('is_admin');

//Subscribers
Route::get('/subscribers',  [AdminsController::class, 'subscribers'])->middleware('is_admin');
Route::get('/mailSubscribers/{email}',  [AdminsController::class, 'mailSubscribers'])->middleware('is_admin');
Route::get('/mailSubscriber/{email}',  [AdminsController::class, 'mailSubscriber'])->middleware('is_admin');
Route::get('/deleteSubscriber/{id}',  [AdminsController::class, 'deleteSubscriber'])->middleware('is_admin');
// Version Control
Route::get('/version',  [AdminsController::class, 'version'])->middleware('is_admin');

// Seo Settings
// SeoSettings
Route::get('/seosettings', [AdminsController::class, 'seosettings'])->middleware('is_admin');
Route::post('/saveseosettings', [AdminsController::class, 'saveseosettings'])->middleware('is_admin');

Route::get('/addProductToFacebookPixel', [AdminsController::class, 'addProductToFacebookPixel'])->middleware('is_admin');
Route::get('/emptyProductToFacebookPixel', [AdminsController::class, 'emptyProductToFacebookPixel'])->middleware('is_admin');
Route::get('/updateCategory', [AdminsController::class, 'updateCategory'])->middleware('is_admin');
Route::get('/Without', [AdminsController::class, 'google_product_category'])->middleware('is_admin');
});

Route::get('get/details/{id}', 'PaymentsConroller@getDetails')->name('getDetails'); 

// MPESA 
Route::group(['prefix'=>'payments'], function(){
Route::post('/B2C/{AccID}','PaymentsConroller@B2C');
Route::get('/balance/{AccID}','PaymentsConroller@Balance');
Route::post('/reverse','PaymentsConroller@reversal');
Route::post('/TransactionStatus/{AccID}','PaymentsConroller@TransactionStatus');
Route::post('/B2B/{AccID}','PaymentsConroller@B2B');
Route::post('/C2B','PaymentsConroller@C2B');
Route::post('/transStatus/{AccID}','PaymentsConroller@TransactionStatus');
Route::get('/stk','PaymentsConroller@stk');
Route::get('/C2B','PaymentsConroller@C2B');
//Post STK
Route::post('/stk','PaymentsConroller@stk');
Route::get('/check/{ref}','PaymentsConroller@check');
});


Route::get('sitemap', function() {

	// create new sitemap object
	$sitemap = App::make('sitemap');

	// set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
	// by default cache is disabled
	$sitemap->setCache('laravel.sitemap', 10);

	// check if there is cached sitemap and build new only if is not
	if (!$sitemap->isCached()) {
		// add item to the sitemap (url, date, priority, freq)
		$sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
		

	
		// get all posts from db
		$post = DB::table('category')->orderBy('created_at', 'desc')->get();

        // add every category to the sitemap
		foreach ($post as $post) {
			$sitemap->add("https://www.amanivehiclesounds.co.ke/products/$post->slung",'2012-08-25T20:10:00+02:00', '0.9', 'daily');
		}

        // get all posts from db
		$post = DB::table('brands')->orderBy('created_at', 'desc')->get();

        // add every category to the sitemap
		foreach ($post as $post) {
			$sitemap->add("https://www.amanivehiclesounds.co.ke/products/brand/$post->name",'2012-08-25T20:10:00+02:00', '0.9', 'daily');
		}


		  // get all posts from db
		  $post = DB::table('tags')->orderBy('created_at', 'desc')->get();

		  // add every category to the sitemap
		  foreach ($post as $post) {
			  $sitemap->add("https://www.amanivehiclesounds.co.ke/product-tags/$post->slung",'2012-08-25T20:10:00+02:00', '0.9', 'daily');
		  }


        // get all posts from db
        $posts = DB::table('product')->orderBy('created_at', 'desc')->get();
		// add every product to the sitemap
		foreach ($posts as $post) {
			$sitemap->add("https://www.amanivehiclesounds.co.ke/product/$post->slung",'2012-08-25T20:10:00+02:00', '0.8', 'daily');
		}
	}

	// show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
	return $sitemap->render('xml');
});


