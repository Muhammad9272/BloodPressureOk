<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Calculation;
use App\Models\PgBlood;
use App\Models\PgClassification;
use App\Models\PgFaq;
use App\Models\PgOther;
use App\Models\PgRemedy;
use App\Models\PgTreat;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
    	$sliders = Slider::orderBy('id','desc')->where('status',1)->get();
    	$top_banner = Banner::where('slug','top-banner')->first();
    	$bottom_banner = Banner::where('slug','bottom-banner')->first();
    	// $banners = Banner::where('slug','side-banner1')->first();
    	// $banners = Banner::where('slug','side-banner2')->first();

    	$articles = Article::orderBy('id','desc')->where('status',1)->get();
    	return view('front.home',compact('sliders','top_banner','bottom_banner','articles'));
    }

      public function page($slug)
    {
    	
        $datas =  DB::table('pg_others')->where('slug',$slug)->where('status',1)->first();
        if(empty($datas))
        {
            return view('errors.404');
        }
      $token=0;       
    	return view('front.page',compact('datas','token'));
    }

      public function BloodPressureid()
    {
      $datas = PgBlood::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    }

      public function BloodPressure($slug)
    {
      $datas = PgBlood::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datas','token'));
    }




      public function Classificationid()
    {
      $datas = PgClassification::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    }
      public function Classification($slug)
    {
      $datas = PgClassification::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datas','token'));
    }



      public function Remedyid()
    {
      $datas = PgRemedy::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    } 
      public function Remedy($slug)
    {
      $datas = PgRemedy::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datas','token'));
    }    


      public function Treatmentid()
    {
      $datas = PgTreat::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    }
      public function Treatment($slug)
    {
      $datas = PgTreat::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datas','token'));
    }

      public function Article($slug)
    {
      $datas = Article::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datas','token'));
    }
      public function faq()
    {

    	$datas = PgFaq::orderBy('id','desc')->where('status',1)->get();       
    	return view('front.faq',compact('datas'));
    }

        public function calculationCheck(Request $request)
    { 




       $systole=$request->systole;
       $diastole=$request->diastole;
 
        $data= Calculation::
             where('upper1','<=',$systole)->where('upper2','>=',$systole)
             ->where('lower1','<=',$diastole)->where('lower2','>=',$diastole)
             ->first();
        if($data) {   
        $result = preg_replace("/{upper_val}/", $systole,$data->desc);
        $result = preg_replace("/{lower_val}/", $diastole ,$result);

        $token=1;
        return view('front.page',compact('datas','result','token'));
        }
        else{
          $token=5;
        return view('front.page',compact('token'));
        }
    }
}
