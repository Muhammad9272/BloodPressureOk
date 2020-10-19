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
            @elseif($token==6) <!--Blogs page-->
                <div class="row">
                  @foreach($datas as $data)
                  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 ">
                                <div class="ps-post">
                                  <div class="ps-post__thumbnail"><a class="ps-post__overlay" href="{{route('front.article',$data->slug)}}"></a><img src="{{asset('assets/images/articles/'.$data->photo)}}" alt="">
                                    
                                  </div>
                                  <div class="ps-post__content">
                                    <div class="ps-post__top">
                                      <div class="ps-post__meta">
                                      </div><a class="ps-post__title" href="{{route('front.article',$data->slug)}}">{{$data->title}}</a>
                                    </div>
                                    <div class="ps-post__bottom">
                                      <p>{{$data->created_at->format('F d, Y')}}</p>
                                    </div>
                                  </div>
                                </div>
                  </div>
                  @endforeach

                </div>
                <div class="ps-pagination">
                  <ul class="pagination">
                    <li> {{$datas->Oneachside(2)->links('includes.pagination.default')}}</li>
                   
                  </ul>
                </div>
            @elseif($token==7)
            <div style="text-align: center;margin:30px 0;">
              <h2 style="font-weight: 600">Contact us</h2>
            </div>
            
            <div class="ps-contact-form">

              <div class="" style="padding: 0 40px;">
                <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                <form class="ps-form--contact-us" id="contactform" action="{{route('front.contact.submit')}}" method="POST">
                                {{csrf_field()}}
                 
                  <h3 style="text-align: left;font-size: 30px">Get In Touch</h3>
                   @include('includes.admin.form-both')
                  <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                  <div class="form-group">
                                    <input class="form-control border-cus-6" type="text" placeholder="Name *" name="name" required="">
                                  </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                                  <div class="form-group">
                                    <input class="form-control  border-cus-6" type="email" placeholder="Email *" name="email" required="">
                                  </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                  <div class="form-group">
                                    <input class="form-control  border-cus-6" type="text" placeholder="Phone *" name="phone" name="subject" required="">
                                  </div>
                                </div>                               
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                  <div class="form-group">
                                    <input class="form-control  border-cus-6" type="text" placeholder="Subject *" name="subject" required="">
                                  </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                  <div class="form-group">
                                    <textarea class="form-control border-cus-6" rows="5" placeholder="Message" name="text" required=""></textarea>
                                  </div>
                                </div>
                  </div>
                  <div class="form-group submit">

                    <button class="ps-btn submit-btn " id="contact-btn-sub" type="submit">
                      
                 Send message
                    </button>
                    
                  </div>
                </form>
              </div>
            </div>
            @else
            {!! $datta->desc !!}
            @endif
            
          </div>
          <div class="ps-blog__right pointed-area" >

            <aside class="widget widget--blog widget--categories">              
              <div class="widget__content">
  	            <div class="">
  	                <div class="" >
  	                  <img height="100%" src="{{asset('assets/front/homepage/2gg.jpg')}}">
  	                </div>
  	                <div class="press-cal-iner1" >
  	                  <div class="content" >
  	                    <p >Blood Pressure is one of the most important perameters characterizing the work of the circulatory system</p>
  	                      <form id="" action="{{route('front.readings')}}" method="get" enctype="multipart/form-data" class="form-horizontal calculationform">
                  
  	                      <div class="press-cal-form1">
  	                        <div class="form-group row">
  	                          <label  class="col-8 col-sm-8 col-md-8  col-form-label label-cus">Systole (Upper value):</label>
  	                          <div class="col-4 col-sm-4 col-md-4">
  	                            <input type="number" name="systole"  class="form-control-cus systole" required="">
  	                          </div>
  	                        </div>
  	                        <div class="form-group row">
  	                          <label  class="col-8 col-sm-8 col-md-8  col-form-label label-cus">Diastole (Lower value):</label>
  	                          <div class="col-4 col-sm-4 col-md-4">
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