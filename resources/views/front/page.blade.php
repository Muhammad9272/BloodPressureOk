@extends('front.layouts.app')
@section('content')

    <div class="ps-page--blog">
      <div class="container container-pad">
        <div  style="margin-top: 50px;">

        </div>
        <div class="ps-blog--sidebar">
          <div class="ps-blog__left">
          	@if($token==1)
            {!! $result !!}
            @elseif($token==2)
             
                @foreach($datas as $data)
                <h2 style="font-weight: 600">{{$data->title}} </h2>
                {!! $data->desc !!}
                <br><br>
                @endforeach
            @elseif($token==5)
            <h2 style="font-weight: 600">Data Not Found  </h2>
            @else
            {!! $datas->desc !!}
            @endif
            
          </div>
          <div class="ps-blog__right">

            <aside class="widget widget--blog widget--categories">              
              <div class="widget__content">
	            <div class="">
	                <div class="" >
	                  <img height="100%" src="{{asset('assets/front/homepage/2gg.jpg')}}">
	                </div>
	                <div class="press-cal-iner1" >
	                  <div class="content" >
	                    <p >Blood Pressure is one of the most important perameters characterizing the work of the circulatory system</p>
	                      <form id="calculationform" action="{{route('front.readings')}}" method="get" enctype="multipart/form-data" class="form-horizontal">
                
	                      <div class="press-cal-form1">
	                        <div class="form-group row">
	                          <label  class="col-sm-8 col-form-label label-cus">Systole (Upper value):</label>
	                          <div class="col-sm-4">
	                            <input type="number" name="systole"  class="form-control-cus systole" required="">
	                          </div>
	                        </div>
	                        <div class="form-group row">
	                          <label  class="col-sm-8 col-form-label label-cus">Diastole (Lower value):</label>
	                          <div class="col-sm-4">
	                            <input type="number"  name="diastole" class="form-control-cus diastole" required="">
	                          </div>
	                        </div>
	                        <button class="ps-btn" id="calculation-btn" style="width: 100%;background: black">Check Now</button>
	                      </div>
	                    </form>

	                  </div>
	                </div>
	            </div>
              </div>
            </aside>
           
           @if($sb1->status=1)
            <aside class="widget widget--blog widget--categories">
	            <div class="pad-lr-20">
                <a href="{{$sb1->link}}"><img  src="{{asset('assets/images/banners/'.$sb1->photo)}}"></a>
	            	
	            </div>    
            </aside>
            @endif


            <aside class="widget widget--blog widget--recent-comments">
              <h3 class="widget__title widget__title-cus" style="">Calssifications</h3>
              <div class="blue_bordr"></div>
              <div class="widget__content" style="margin-left: 20px">
                @foreach($classifications as $data)
                <p><a class="author" href="{{route('front.classification',$data->slug)}}">{{$data->title}}</a></p>
                @endforeach
              </div>
            </aside>
            @if($sb2->status==1)
              <aside class="widget widget--blog widget--categories">
  	            <div class="pad-lr-20">
                  <a href="{{$sb2->link}}"><img  src="{{asset('assets/images/banners/'.$sb2->photo)}}"></a>
  	            	
  	            </div>    
              </aside>
            @endif

            <aside class="widget widget--blog widget--recent-comments">
              <h3 class="widget__title widget__title-cus" style="">Articles</h3>
              <div class="blue_bordr"></div>
              <div class="widget__content" style="margin-left: 20px">
                @foreach($articles as $data)
                <p><a class="author" href="{{route('front.article',$data->slug)}}">{{$data->title}}</a></p>
                @endforeach
              </div>
            </aside>

            <aside class="widget widget--blog widget--recent-comments">
              <h3 class="widget__title widget__title-cus" style="">Remedies</h3>
              <div class="blue_bordr"></div>
              <div class="widget__content" style="margin-left: 20px">
                @foreach($remedies as $data)
                <p><a class="author" href="{{route('front.remedy',$data->slug)}}">{{$data->title}}</a></p>
                @endforeach
              </div>
            </aside>


          </div>
        </div>
      </div>
    </div>

@endsection