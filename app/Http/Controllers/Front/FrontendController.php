<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Banner;
use App\Models\Calculation;
use App\Models\Generalsetting;
use App\Models\PgBlood;
use App\Models\PgClassification;
use App\Models\PgFaq;
use App\Models\PgOther;
use App\Models\PgRemedy;
use App\Models\PgTreat;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
    	$sliders = Slider::orderBy('id','desc')->where('status',1)->get();
    	$top_banner = Banner::where('slug','top-banner')->first();
    	$bottom_banner = Banner::where('slug','bottom-banner')->first();
    	// $banners = Banner::where('slug','side-banner1')->first();
    	// $banners = Banner::where('slug','side-banner2')->first();

    	$articles = Article::orderBy('id','desc')->where('status',1)->take(8);
    	return view('front.home',compact('sliders','top_banner','bottom_banner','articles'));
    }

      public function page($slug)
    {
    	
        $datta =  DB::table('pg_others')->where('slug',$slug)->where('status',1)->first();
        if(empty($datta))
        {
            return view('errors.404');
        }
      $token=0;       
    	return view('front.page',compact('datta','token'));
    }

      public function BloodPressureid()
    {
      $datas = PgBlood::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    }

      public function BloodPressure($slug)
    {
      $datta = PgBlood::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datta','token'));
    }




      public function Classificationid()
    {
      $datas = PgClassification::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    }
      public function Classification($slug)
    {
      $datta = PgClassification::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datta','token'));
    }



      public function Remedyid()
    {
      $datas = PgRemedy::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    } 
      public function Remedy($slug)
    {
      $datta = PgRemedy::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datta','token'));
    }    


      public function Treatmentid()
    {
      $datas = PgTreat::orderBy('id','desc')->where('status',1)->get();
      $token=2;       
      return view('front.page',compact('datas','token'));
    }
      public function Treatment($slug)
    {
      $datta = PgTreat::where('slug',$slug)->first();
      $token=0;       
      return view('front.page',compact('datta','token'));
    }

      public function Articleid()
    {
      $datas = Article::orderBy('id','desc')->where('status',1)->paginate(10);
      $token=6;       
      return view('front.page',compact('datas','token'));
    }

      public function Article($slug)
    {

      $datta = Article::where('slug',$slug)->first();
      $token=0; 
    
      return view('front.page',compact('datta','token'));
    }
      public function faq()
    {

    	$datas = PgFaq::orderBy('id','desc')->where('status',1)->get();       
    	return view('front.faq',compact('datas'));
    }

      public function Contact()
    {
      $token=7;
      
      return view('front.page',compact('token'));
    }

    public function contactemail(Request $request)
    {   

        $gs = Generalsetting::findOrFail(1);

        // if($gs->is_capcha == 1)
        // {

        // // Capcha Check
        // $value = session('captcha_string');
        // if ($request->codes != $value){
        //     return response()->json(array('errors' => [ 0 => 'Please enter Correct Capcha Code.' ]));
        // }

        // }

        // Login Section


        $details = [
          'title' => 'Mail from BloodPressureCalculator.com',
          'subject' =>$request->subject ,
          'to' => $gs->to_email,
          'name' => $request->name,
          'phone' => $request->phone,
          'from' => $request->email,
          'msg' => $request->text,
         ];

        \Mail::to($gs->to_email)->send(new \App\Mail\GeniusMailer($details));        

        // Login Section Ends

        // Redirect Section
        return response()->json("Email Received.We will shortly reply you !");
    }

        public function calculationCheck(Request $request)
    { 




       $systole=$request->systole;
       $diastole=$request->diastole;
 
        $datta= Calculation::
             where('upper1','<=',$systole)->where('upper2','>=',$systole)
             ->where('lower1','<=',$diastole)->where('lower2','>=',$diastole)
             ->first();
        if($datta) {   
        $result = preg_replace("/{upper_val}/", $systole,$datta->desc);
        $result = preg_replace("/{lower_val}/", $diastole ,$result);

        $token=1;
        return view('front.page',compact('datta','result','token'));
        }
        else{
          $token=5;
        return view('front.page',compact('token'));
        }
    }
}
