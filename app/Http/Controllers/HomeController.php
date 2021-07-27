<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use OpenGraph;
use SEOMeta;
use Twitter;
class HomeController extends Controller
{
    public function index()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle(' ' . $Settings->sitename . ' - ' . $Settings->intro . '');
            SEOMeta::setDescription('Vehicle Sounds Systems in Kenya, Vehicle Accessories in kenya, Car Sound Systems in Kenya, Car alarm Systems in Kenya,   ,in car Accessories  ,car stereo  ,car subwoofer  ,car stereo installation nairobi  , car audio shop
            ,car stereo shop  ,powered speakers  ,underseat subwoofer  ,car speakers  ,car amplifiers' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '');
            OpenGraph::addProperty('type', 'website');
            Twitter::setTitle('' . $Settings->sitename. '');
            Twitter::setSite('@amanisounds');

            
            $page_name = 'Home1';
            $page_title = 'Home Page';
           
            $keywords = 'Car Sound Systems, Car Alarm Systems, Car Surveillance Systems,   ,in car Accessories  ,car stereo  ,car subwoofer  ,car stereo installation nairobi  , car audio shop
            ,car stereo shop  ,powered speakers  ,underseat subwoofer  ,car speakers  ,car amplifiers';
            
            
            return view('front.index', compact('keywords'));
        }
    }

    public function all()
    {
        Session::forget('Category');
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Products | ' . $Settings->sitename .'');
            SEOMeta::setDescription('Pioneer Car Speakers, Sony Car Speakers, Kenwood Car speakers, Kenwood speakers, Sony Speakers' . $Settings->welcome . '');
            SEOMeta::setCanonical('' . $Settings->url . '/products');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/products');
            OpenGraph::addProperty('type', 'website');
            Twitter::setTitle('' . $Settings->sitename. '');
            Twitter::setSite('@amanisounds');
            $page_name = 'Products';
            $Copyright = DB::table('copyright')->get();
            $page_title = 'Products';
            $search_results ='';
            $search_results_category = '';
            $Products = DB::table('product')->OrderBy('id','DESC')->paginate(64);
            $keywords = 'Sony Car Tweeters, Sony Car Ampifires, Kenwood Car Speakers, Kenwood Car Subwoofers, Sony car Subwoofers';
            return view('front.products', compact('keywords','page_title', 'Products', 'page_name', 'search_results', 'search_results_category'));
        }
    }

 

    public function product_category($category){
        Session::forget('Category');
        $Category = DB::table('category')->where('slung',$category)->get();
       
            foreach ($Category as $key => $value) {
                $page_name = $value->cat;
                $SEOSettings = DB::table('seosettings')->get();
                foreach ($SEOSettings as $Settings) {
                    SEOMeta::setTitle(' '.$value->cat.'  | ' . $Settings->sitename .'');
                    SEOMeta::setDescription(''.$value->cat.' '.$value->keywords.'');
                    SEOMeta::setCanonical('' . $Settings->url . '/products/'.$category.'');
                    OpenGraph::setDescription('' . $value->cat . '');
                    OpenGraph::setTitle('' . $value->cat . '');
                    OpenGraph::setUrl('' . $Settings->url . '/products/'.$category.'');
                    OpenGraph::addProperty('type', 'website');
                    Twitter::setTitle('' . $Settings->sitename. '');
                    Twitter::setSite('@amanisounds');
                    // Set Session Here
                    Session::put('Category', $page_name);
                    $page_title = 'Products';
                    $search_results ='';
                    $search_results_category = '';
                    $keywords = "$page_name, $value->keywords";
                    // infinite Scroll
                    $Products = DB::table('product')->where('cat',$value->id)->paginate(24);
                    return view('front.products-category', compact('keywords','page_title', 'Products', 'page_name','search_results','search_results_category'));
            }
        }


       
    }

    public function brands($category){
       
        $Category = DB::table('brands')->where('name',$category)->get();
       
            foreach ($Category as $key => $value) {
                $page_name = $value->name;
                $SEOSettings = DB::table('seosettings')->get();
                foreach ($SEOSettings as $Settings) {
                    SEOMeta::setTitle('' . $value->name . ' Vehicle Accessories In Nairobi');
                    SEOMeta::setDescription(''.$value->name.' Vehicle Accessories In Nairobi');
                    SEOMeta::setCanonical('' . $Settings->url . '/products/'.$category.'');
                    OpenGraph::setDescription('' . $value->name . '');
                    OpenGraph::setTitle('' . $value->name . ' Vehicle Accessories In Nairobi');
                    OpenGraph::setUrl('' . $Settings->url . '/products/'.$category.'');
                    OpenGraph::addProperty('type', 'website');
                    Twitter::setTitle('' . $Settings->sitename. '');
                    Twitter::setSite('@amanisounds');
                    // Set Session Here
                   
                    $page_title = 'Products';
                    $search_results ='';
                    $search_results_category = '';
                    $keywords = "$page_name Vehicle Accessories in Kenya";
                    // infinite Scroll
                    $Products = DB::table('product')->where('brand',$value->name)->paginate(24);
                    return view('front.products-brands', compact('keywords','page_title', 'Products', 'page_name','search_results','search_results_category'));
            }
        }


       
    }

    

    public function categories(){
        Session::forget('Category');    
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Shop by Category  | ' . $Settings->sitename .'');
            SEOMeta::setDescription('Shop by Category | Car Sound Systems, Car Alarm Systems, Car Surveillance Systems');
            SEOMeta::setCanonical('' . $Settings->url . '/products/categories');
            OpenGraph::setDescription('Shop by Category | Car Sound Systems, Car Alarm Systems, Car Surveillance Systems');
            OpenGraph::setTitle('Shop by Category');
            OpenGraph::setUrl('' . $Settings->url . '/products/categories');
            OpenGraph::addProperty('type', 'website');
            Twitter::setTitle('' . $Settings->sitename. '');
            Twitter::setSite('@amanisounds');
            // Set Session Here
            $page_name = "Shop By Category";
            Session::put('Category', $page_name);
            $page_title = 'Products';
            
            $keywords = 'Car Sound Systems, Car Alarm Systems, Car Surveillance Systems,   ,in car Accessories  ,car stereo  ,car subwoofer  ,car stereo installation nairobi  , car audio shop
            ,car stereo shop  ,powered speakers  ,underseat subwoofer  ,car speakers  ,car amplifiers';
            
            // infinite Scroll
         
            return view('front.categories', compact('keywords','page_title','page_name'));
    }
        
    }

    public function brand(){
        Session::forget('Brand');    
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Shop by Brand  | ' . $Settings->sitename .'');
            SEOMeta::setDescription('Shop by Brand | Car Sound Systems, Car Alarm Systems, Car Surveillance Systems');
            SEOMeta::setCanonical('' . $Settings->url . '/products/brand');
            OpenGraph::setDescription('Shop by Brand | Car Sound Systems, Car Alarm Systems, Car Surveillance Systems');
            OpenGraph::setTitle('Shop by Brand');
            OpenGraph::setUrl('' . $Settings->url . '/products/brand');
            OpenGraph::addProperty('type', 'website');
            Twitter::setTitle('' . $Settings->sitename. '');
            Twitter::setSite('@amanisounds');
            // Set Session Here
            $page_name = "Shop By Brand";
            Session::put('Brand', $page_name);
            $page_title = 'Products';
            
            $keywords = 'Car Sound Systems, Car Alarm Systems, Car Surveillance Systems,   ,in car Accessories  ,car stereo  ,car subwoofer  ,car stereo installation nairobi  , car audio shop
            ,car stereo shop  ,powered speakers  ,underseat subwoofer  ,car speakers  ,car amplifiers';
            
            // infinite Scroll
         
            return view('front.brands', compact('keywords','page_title','page_name'));
    }
        
    }
       
    public function popup($slung){
        $Product =  DB::table('product')->where('slung',$slung)->get();
        return view('front.popup',compact('Product'));
    }

    public function fullscreen($slung){
        $Product =  DB::table('product')->where('slung',$slung)->get();
        return view('front.fullscreen',compact('Product'));
    }

    public function contact()
    {
        $SEOSettings = DB::table('seosettings')->get();
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('Contact Us | ' . $Settings->sitename . '');
            SEOMeta::setDescription('Amani Vehicle Sounds, Contact Vehicles Speakers in Kenya, Car Bass Speakers');
            SEOMeta::setCanonical('' . $Settings->url . '/contact-us');

            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/contact-us');
            OpenGraph::addProperty('type', 'website');

            Twitter::setTitle('' . $Settings->sitename. '');
            Twitter::setSite('@amanisounds');
            $page_name = 'Contact';
            $page_title = 'Contact Us';
            $SiteSettings = DB::table('sitesettings')->get();
            $keywords = 'Vehicle Sound Systems, Vehicle Alarm Systems, Vehicle Surveillance Systems';
            return view('front.contact', compact('page_title', 'SiteSettings', 'page_name','keywords'));
        }
    }

    public function about()
    {
        $SEOSettings = DB::table('seosettings')->get();
        
        foreach ($SEOSettings as $Settings) {
            SEOMeta::setTitle('About Us | ' . $Settings->sitename . '');
            SEOMeta::setDescription('Amani Vehicle Sounds, Amani Car Sound Systems  Car Speakers systems. Pioneer Car stereo, Speakers for sale in kenya ');
            SEOMeta::setCanonical('' . $Settings->url . '/about-us');
            OpenGraph::setDescription('' . $Settings->welcome . '');
            OpenGraph::setTitle('' . $Settings->sitename . ' - ' . $Settings->welcome . '');
            OpenGraph::setUrl('' . $Settings->url . '/about-us');
            OpenGraph::addProperty('type', 'website');
            Twitter::setTitle('' . $Settings->sitename. '');
            Twitter::setSite('@amanisounds');
         
            $About = DB::table('about')->get();
            $SiteSettings = DB::table('sitesettings')->get();
            $Services = DB::table('services')->inRandomOrder()->paginate(2);
            $page_title = 'About Us';
            $Testimonial = DB::table('testimonial')->inRandomOrder()->paginate(3);
            $page_name = 'About';
            $keywords = 'Car Music in kenya, Vehicle Alarm Systems in kenya';
            return view('front.about', compact('keywords','Testimonial', 'page_title', 'page_name', 'Services', 'SiteSettings', 'About'));
        }
    }

    public function search(Request $request)
            {
            if($request->search == null or $request->search == ''){
                $output = '';
                return Response($output);
            }else
                $url = url('/product-tags/');
                if($request->ajax())
                {
                $output="";
                $products=DB::table('tags')->where('title','LIKE','%'.$request->search."%")->paginate(10);
                if($products)
                {
                foreach ($products as $key => $product) {
                $output.='<tr>'.
                
                '<td style="padding:10px 10px 10px 10px;"><a style="color:#66139B; visibility:visible;" href="'.$url.'/'.$product->slung.'"><b>'.$product->title.'</b></a></td>'.
                
                '</tr>';
                }
                return Response($output);
                    }
                    }
     }

     public function product_tags($slung){
       
        $Category = DB::table('tags')->where('slung',$slung)->get();
            foreach ($Category as $key => $value) { 
                $page_name = $value->title;
                $SEOSettings = DB::table('seosettings')->get();
                foreach ($SEOSettings as $Settings) {
                    SEOMeta::setTitle(' '.$value->title.'  | ' . $Settings->sitename .'');
                    SEOMeta::setDescription(''.$value->title.' '.$value->keywords.'');
                    SEOMeta::setCanonical('' . $Settings->url . '/product-tags/'.$slung.'');
                    OpenGraph::setDescription('' . $value->title . '');
                    OpenGraph::setTitle('' . $value->title . '');
                    OpenGraph::setUrl('' . $Settings->url . '/product-tags/'.$slung.'');
                    OpenGraph::addProperty('type', 'website');
                    Twitter::setTitle('' . $Settings->sitename. '');
                    Twitter::setSite('@amanisounds');
                    // Set Session Here
                   
                    // End Session Here
                    $page_name = $value->title;
                
                    $page_title = 'Products';
                    $search_results ='';
                    $search_results_category = '';
                    $keywords = "$value->title, $value->keywords";
                    $Products = DB::table('product')->where('tag',$value->id)->paginate(12);
                    return view('front.tags', compact('Category','keywords','page_title', 'Products', 'page_name','search_results','search_results_category'));
            }
        }
    }

    public function product_single($title){
        Session::forget('Category');
        $SEOSettings = DB::table('seosettings')->get();
        $Products = DB::table('product')->where('slung',$title)->get();
        foreach ($Products as $key => $value) {
            foreach ($SEOSettings as $Settings) {
                SEOMeta::setTitle(' '.$value->name.' | ' . $Settings->sitename .'');
                SEOMeta::setDescription(''.$value->meta.'');
                SEOMeta::setCanonical('' . $Settings->url . '/product/'.$title.'');
                OpenGraph::setDescription(''.$value->meta.'');
                OpenGraph::setTitle(' '.$value->name.' | ' . $Settings->sitename .'');
                OpenGraph::setUrl('' . $Settings->url . '/product/'.$title.'');
                OpenGraph::addProperty('type', 'product.item');
                Twitter::setTitle('' . $Settings->sitename. '');
                Twitter::setSite('@amanisounds');
                $page_name = 'details';
                $Copyright = DB::table('copyright')->get();
                $page_title = $title;
                $Products = DB::table('product')->where('slung',$title)->get();
                $keywords = $value->name;
                return view('front.product', compact('keywords','page_title', 'Products', 'page_name'));
            }
        }
        
        
    }
    
}


