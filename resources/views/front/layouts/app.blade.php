<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="{{ $gs->meta_keys }}">
    <meta name="description" content="BloodPressure Calculator">

    <title>BloodPressure Calculator</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/fonts/Linearicons/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/autopart.css')}}">
  </head>
  <body>
    <header class="header header--standard header--autopart" data-sticky="true" >
      <nav class="navigation navigation-cus-1">
        <div class="container container-pad  pad-t-13">
          <div class="navigation__left">
                      <ul class="menu menu--furniture menu-mob" >

                        <li class="current-menu-item ">
                          <a class="navigation__item ps-toggle--sidebar" style="padding: 4px 9px;border: 1px solid black;border-radius: 4px;" href="#menu-mobile" id="custom-close-active"><i style="font-size: 30px" class="icon-menu"></i></a>
                        </li>
                      </ul>
                        <ul class="menu menu--furniture menu-lap" >

                          <li class="current-menu-item "><a href="{{url('/')}}">Home</a>
                          </li>

                          <li class="current-menu-item {{(count($pgbloods)>1)?'menu-item-has-children':''}}">
                            
                            @if(count($pgbloods)>1)
                            <a href="#">Blood Pressure</a>
                            @else
                            @foreach($pgbloods as $data)
                            <a href="{{route('front.pgblood',$data->slug)}}">Blood Pressure</a>
                            @endforeach
                            @endif

                                       @if(count($pgbloods)>1)
                                        <span class="sub-toggle"></span>
                                        <ul class="sub-menu">
                                          
                                           @foreach($pgbloods as $data)
                                            <li><a  href="{{route('front.pgblood',$data->slug)}}">{{$data->title}}</a></li>
                                            @endforeach
                                          
                                        </ul>
                                        @endif
                          </li>

                          <li class="current-menu-item {{(count($classifications)>1)?'menu-item-has-children':''}}">
                            
                            @if(count($classifications)>1)
                            <a href="#">Classification</a>
                            @else
                            @foreach($classifications as $data)
                            <a href="{{route('front.classification',$data->slug)}}">Classification</a>
                            @endforeach
                            @endif

                                       @if(count($classifications)>1)
                                        <span class="sub-toggle"></span>
                                        <ul class="sub-menu">
                                          
                                           @foreach($classifications as $data)
                                            <li><a  href="{{route('front.classification',$data->slug)}}">{{$data->title}}</a></li>
                                            @endforeach
                                          
                                        </ul>
                                        @endif
                          </li>

                          <li class="current-menu-item {{(count($remedies)>1)?'menu-item-has-children':''}}">
                            
                            @if(count($remedies)>1)
                            <a href="#">Remedies</a>
                            @else
                            @foreach($remedies as $data)
                            <a href="{{route('front.remedy',$data->slug)}}">Remedies</a>
                            @endforeach
                            @endif

                                       @if(count($remedies)>1)
                                        <span class="sub-toggle"></span>
                                        <ul class="sub-menu">
                                          
                                           @foreach($remedies as $data)
                                            <li><a  href="{{route('front.remedy',$data->slug)}}">{{$data->title}}</a></li>
                                            @endforeach
                                          
                                        </ul>
                                        @endif
                          </li>

                          <li class="current-menu-item {{(count($treatments)>1)?'menu-item-has-children':''}}">
                            
                            @if(count($treatments)>1)
                            <a href="#">Treatment</a>
                            @else
                            @foreach($treatments as $data)
                            <a href="{{route('front.treatment',$data->slug)}}">Treatment</a>
                            @endforeach
                            @endif

                                       @if(count($treatments)>1)
                                        <span class="sub-toggle"></span>
                                        <ul class="sub-menu">
                                          
                                           @foreach($treatments as $data)
                                            <li><a  href="{{route('front.treatment',$data->slug)}}">{{$data->title}}</a></li>
                                            @endforeach
                                          
                                        </ul>
                                        @endif
                          </li>
                        </ul>
          </div>
          <div class="navigation__right">
            <ul class="navigation__extra">
              <li><a href="{{url('/')}}"><img src="{{asset('assets/front/img/Blogo.png')}}"></a></li>

            </ul>
          </div>
        </div>
      </nav>

    </header>


    <div class="ps-panel--sidebar" id="menu-mobile">
      <div class="ps-panel__header">
        <h3>Menu</h3>
        <a class="ps-btn--close ps-btn--no-boder" id="custom-close" href="#navigation-mobile"></a>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <li class="current-menu-item "><a href="{{url('/')}}">Home</a>
          </li>



          <li class="current-menu-item {{(count($pgbloods)>1)?'menu-item-has-children':''}}">
            
            @if(count($pgbloods)>1)
            <a href="#">Blood Pressure</a>
            @else
            @foreach($pgbloods as $data)
            <a href="{{route('front.pgblood',$data->slug)}}">Blood Pressure</a>
            @endforeach
            @endif

                       @if(count($pgbloods)>1)
                        <span class="sub-toggle"></span>
                        <ul class="sub-menu">
                          
                           @foreach($pgbloods as $data)
                            <li><a  href="{{route('front.pgblood',$data->slug)}}">{{$data->title}}</a></li>
                            @endforeach
                          
                        </ul>
                        @endif
          </li>

          <li class="current-menu-item {{(count($classifications)>1)?'menu-item-has-children':''}}">
            
            @if(count($classifications)>1)
            <a href="#">Classification</a>
            @else
            @foreach($classifications as $data)
            <a href="{{route('front.classification',$data->slug)}}">Classification</a>
            @endforeach
            @endif

                       @if(count($classifications)>1)
                        <span class="sub-toggle"></span>
                        <ul class="sub-menu">
                          
                           @foreach($classifications as $data)
                            <li><a  href="{{route('front.classification',$data->slug)}}">{{$data->title}}</a></li>
                            @endforeach
                          
                        </ul>
                        @endif
          </li>

          <li class="current-menu-item {{(count($remedies)>1)?'menu-item-has-children':''}}">
            
            @if(count($remedies)>1)
            <a href="#">Remedies</a>
            @else
            @foreach($remedies as $data)
            <a href="{{route('front.remedy',$data->slug)}}">Remedies</a>
            @endforeach
            @endif

                       @if(count($remedies)>1)
                        <span class="sub-toggle"></span>
                        <ul class="sub-menu">
                          
                           @foreach($remedies as $data)
                            <li><a  href="{{route('front.remedy',$data->slug)}}">{{$data->title}}</a></li>
                            @endforeach
                          
                        </ul>
                        @endif
          </li>

          <li class="current-menu-item {{(count($treatments)>1)?'menu-item-has-children':''}}">
            
            @if(count($treatments)>1)
            <a href="#">Treatment</a>
            @else
            @foreach($treatments as $data)
            <a href="{{route('front.treatment',$data->slug)}}">Treatment</a>
            @endforeach
            @endif

                       @if(count($treatments)>1)
                        <span class="sub-toggle"></span>
                        <ul class="sub-menu">
                          
                           @foreach($treatments as $data)
                            <li><a  href="{{route('front.treatment',$data->slug)}}">{{$data->title}}</a></li>
                            @endforeach
                          
                        </ul>
                        @endif
          </li>


        </ul>
      </div>
    </div>


@yield('content')




    <footer class="ps-footer ps-footer--2">
          <div class="container container-pad" >
            <nav class="navigation-cus"> 

                <div class="ps-panel__content ps-panel__content-footerr-mob">
                  <ul class="menu--mobile menu--mobile-footer" >
                    <li class="menu-item-has-children" ><a href="" style="padding-left: 0px;    font-weight: 500; font-size: 18px;">Explore Footer menu</a><span class="sub-toggle"></span>
                      <ul class="sub-menu menu-cus">
                        <li class="current-menu-item "><a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="current-menu-item "><a href="{{route('front.pgblood.id')}}">Blood Pressure</a>
                        </li>
                        <li class="current-menu-item "><a href="{{route('front.classification.id')}}">Classification</a>
                        </li>
                        <li class="current-menu-item "><a href="{{route('front.remedy.id')}}">Remedies</a>
                        </li>
                        <li class="current-menu-item "><a href="{{route('front.treatment.id')}}">Treatment</a>
                        </li>
                        @foreach($opages as $page)
                        <li class="current-menu-item "><a href="{{route('front.page',$page->slug)}}">{{$page->title}}</a>
                        </li>
                        @endforeach
                        <li class="current-menu-item "><a href="{{route('front.faq')}}">Faq</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>


                <ul class="menu-cus ps-panel__content-footerr">
                  <li class="current-menu-item "><a href="{{url('/')}}">Home</a>
                  </li>
                  <li class="current-menu-item "><a href="{{route('front.pgblood.id')}}">Blood Pressure</a>
                  </li>
                  <li class="current-menu-item "><a href="{{route('front.classification.id')}}">Classification</a>
                  </li>
                  <li class="current-menu-item "><a href="{{route('front.remedy.id')}}">Remedies</a>
                  </li>
                  <li class="current-menu-item "><a href="{{route('front.treatment.id')}}">Treatment</a>
                  </li>
                  @foreach($opages as $page)
                  <li class="current-menu-item "><a href="{{route('front.page',$page->slug)}}">{{$page->title}}</a>
                  </li>
                  @endforeach
                  <li class="current-menu-item "><a href="{{route('front.faq')}}">Faq</a>
                  </li>
                </ul>              
            </nav>
          </div>
      <div class="ps-vendor-banner bg--cover" data-background="{{asset('assets/front/homepage/footer.png')}}" {{-- style="background: url(././img/bg/vendor.jpg);" --}}>
        <div class="container">
          <h3 class="fotter-h3">Blood Pressure Calculator</h3>
          <h2>WE CARE ABOUT YOUR HEALTH.</h2><a class="ps-btn ps-btn--lg point-area" href="#">Check Now</a>
        </div>
      </div>

    </footer>
    {{-- <div id="back2top"><i class="pe-7s-angle-up"></i></div> --}}
    <div class="" id="ps-site-overlay-block"  ></div>
{{--     <div id="loader-wrapper">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div> --}}
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
      <div class="ps-search__content">
        <form class="ps-form--primary-search" action="do_action" method="post">
          <input class="form-control" type="text" placeholder="Search for...">
          <button><i class="aroma-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
    <script src="{{asset('assets/front/plugins/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/gmap3.min.js')}}"></script>
    <!-- custom scripts-->
    <script src="{{asset('assets/front/js/main.js')}}"></script>
        <script src="{{asset('assets/front/js/custom.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>

     <script type="text/javascript">
 
     $(".point-area").click(function() {
    $('html,body').animate({
        scrollTop: $("#pointed-area").offset().top},
        'slow');

   })
 </script>  

 <script type="text/javascript">
   $(document).on('submit','.calculationform',function(e){
      // e.preventDefault();
      var admin_loader=0;
      var systole=Number($(this).find('.systole').val());
      var diastole=Number($(this).find('.diastole').val());
      if((systole) <= (diastole)){
        alert("Your lower value (diastole) can not be higher than your upper value (systole). Please check your readings.");
        return false;
      }
       if(systole>300 || systole<50){
        alert("The values given do not seem to be valid. Your systole cannot be higher than 300 or lower than 50. Your diastole cannot be higher than 200 or lower than 40. Please check your readings.");
        return false;
      }
      else if(diastole>200 || diastole<40){
        alert("The values given do not seem to be valid. Your systole cannot be higher than 300 or lower than 50. Your diastole cannot be higher than 200 or lower than 40. Please check your readings.");
        return false;

      }
      else
        $('#calculationform').submit();

});

 </script>

  </body>
</html>