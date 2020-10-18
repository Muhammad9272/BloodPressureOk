@extends('front.layouts.app')
@section('content')

    <div id="homepage-2">
      <div class="ps-home-banner">
        <div class="ps-carousel--nav-inside owl-slider " data-owl-auto="true" data-owl-loop="{{$sliders->count()>1?'true':'false'}}" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="{{$sliders->count()>1?'true':'false'}}" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">  
        @foreach($sliders as $data)        
          <div class="ps-banner--furniture ps-banner--furniture-mob" >
           <img class="slider-height" src="{{asset('assets/images/sliders/'.$data->photo)}}" alt="">
           
            <div class="ps-banner__content" style="margin-left: 18%">
              <p>{!! $data->text !!}</p>
              <p  style="margin-left: 24%"><a class="ps-btn point-area" href="">CHECK NOW</a>
            </div> 
                     
          </div>
        @endforeach
         
        </div>
      </div>
      <div class="ps-top-categories" id="pointed-area">
        <div class="container container-pad"  >
          <div class="ps-section__header">
            <h3>Blood Pressure Calculator</h3>
          </div>
          <div class="ps-section__content"></div>
          <div class="align-content-lg-stretch" >
            <div class="press-cal">
                <div class="press-cal-img" >
                  <img height="100%" src="{{asset('assets/front/homepage/home2.png')}}">
                </div>
                <div class="press-cal-iner" >
                  <div class="content" >
                    <p >Blood Pressure is one of the most important perameters characterizing the work of the circulatory system</p>
                    <form id="calculationform" action="{{route('front.readings')}}" method="get" enctype="multipart/form-data" class="form-horizontal">
                
                      
                      <div class="press-cal-form">
                        <div class="form-group row">
                          <label  class="col-sm-8 col-form-label label-cus">Systole (Upper value):</label>
                          <div class="col-sm-4">
                            <input type="number" name="systole"  class="form-control-cus systole" required="" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label  class="col-sm-8 col-form-label label-cus">Diastole (Lower value):</label>
                          <div class="col-sm-4">
                            <input type="number" name="diastole" class="form-control-cus diastole" required="">
                          </div>
                        </div>
                        <button class="ps-btn cal-btn " id="calculation-btn"  style="width: 100%;background: black">Check Now</button>
                      </div>
                    </form>

                  </div>
                </div>
            </div>
            <div class="press-cal-bot">
              <p style="font-weight: 500;">
              The Upper Value is systolic blood pressure, which shows the pressure in the arteries when the
              heart contracts and pushes blood into the arteries, it depends on the strength of the heart
              contraction, the resistance that the walls of blood vessels exert, and the number of contractions
              per unit time
              <p style="font-weight: 500;">The Lower Value, diastolic blood pressure, shows the pressure in the arteries when the heart
              muscle relaxes. This is the minimum pressure in the arteries,it is the resistance to.the resistance
              of the peripheral vessels. As the blood moves along the vascular bed, the amplitude of
              fluctuations in blood pressure decreases, venous and capillary pressure little depends on the
              phase of the cardiac cycle.<p>
              </p>

            </div>

          </div>
        </div>
      </div>
      @if($top_banner->status==1)
      <div class="ps-promotion ps-promotion--2">
        <div class=""><a class="ps-collection" href="{{$top_banner->link}}"><img  src="{{asset('assets/images/banners/'.$top_banner->photo)}}" alt=""></a></div>
      </div>
      @endif

      <div class="container container-pad"  >
        <div class="row row-about" >
          <div class="col-sm-6 row-about-1">
            <h4>About us</h4>
            <p>Mauris sollicitudin fermentum libero. Fusce egestas elit eget lorem. Praesent vestibulum dapibus nibh.Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. Donec vitae sapien ut libero venenatis faucibus.</p>
          </div>
          <div class="col-sm-6">
            <img src="{{asset('assets/front/homepage/about-us.png')}}">
          </div>
        </div>
      </div>
      @if($bottom_banner->status==1)
      <div class="ps-promotion ps-promotion--2">
        <div class=""><a class="ps-collection" href="{{$bottom_banner->link}}"><img  src="{{asset('assets/images/banners/'.$bottom_banner->photo)}}" alt=""></a></div>
      </div>
      @endif

      <div class="container container-pad lat-art" >
          <h4 >The Latest Articles</h4>
          <p class="lat-art-p">
            We all know what blood pressure is, but not
            many of us understand how it should be
            normal. You will learn more useful information
            from our articles
          </p>

          <div class="ps-section__content" style="padding: 8px;">
            <div class="row">
              <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="3" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="3" data-owl-duration="1000" data-owl-mousedrag="on">
                @foreach($articles as $data)
                <div class="pad-10" >
                  <div class="ps-post">
                    <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="blog-detail.html"></a><img src="{{asset('assets/images/articles/'.$data->photo)}}" alt=""></div>
                    <div class="ps-post__content"><a class="ps-post__title" href="#">{{$data->title}}</a>
                      <p>{{ $data->small_desc }}</p>
                    </div>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
      </div>
    </div>



@endsection