<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
    public function popup($slung){
        $Product =  DB::table('product')->where('slung',$slung)->get();
        return view('front.popup',compact('Product'));
    }

    
}


