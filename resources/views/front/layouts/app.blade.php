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
                        <ul class="menu menu--furniture">
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

    <div class="ps-panel--sidebar" id="cart-mobile">
      <div class="ps-panel__header">
        <h3>Shopping Cart</h3>
      </div>
      <div class="navigation__content">
        <div class="ps-cart--mobile">
          <div class="ps-cart__content">
            <div class="ps-product--cart-mobile">
              <div class="ps-product__thumbnail"><a href="#"><img src="{{asset('assets/front/img/products/clothing/7.jpg')}}" alt=""></a></div>
              <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
              </div>
            </div>
          </div>
          <div class="ps-cart__footer">
            <h3>Sub Total:<strong>$59.99</strong></h3>
            <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
      <div class="ps-panel__header">
        <h3>Categories</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <li class="current-menu-item "><a href="#">Hot Promotions</a>
          </li>
          <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Consumer Electronic</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Electronic<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="#">Home Audio &amp; Theathers</a>
                  </li>
                  <li class="current-menu-item "><a href="#">TV &amp; Videos</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Camera, Photos &amp; Videos</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Cellphones &amp; Accessories</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Headphones</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Videosgames</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Wireless Speakers</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Office Electronic</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Accessories &amp; Parts<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="#">Digital Cables</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Audio &amp; Video Cables</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Batteries</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="current-menu-item "><a href="#">Clothing &amp; Apparel</a>
          </li>
          <li class="current-menu-item "><a href="#">Home, Garden &amp; Kitchen</a>
          </li>
          <li class="current-menu-item "><a href="#">Health &amp; Beauty</a>
          </li>
          <li class="current-menu-item "><a href="#">Yewelry &amp; Watches</a>
          </li>
          <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">Computer &amp; Technology</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Computer &amp; Technologies<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="#">Computer &amp; Tablets</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Laptop</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Monitors</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Networking</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Drive &amp; Storages</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Computer Components</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Security &amp; Protection</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Gaming Laptop</a>
                  </li>
                  <li class="current-menu-item "><a href="#">Accessories</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="current-menu-item "><a href="#">Babies &amp; Moms</a>
          </li>
          <li class="current-menu-item "><a href="#">Sport &amp; Outdoor</a>
          </li>
          <li class="current-menu-item "><a href="#">Phones &amp; Accessories</a>
          </li>
          <li class="current-menu-item "><a href="#">Books &amp; Office</a>
          </li>
          <li class="current-menu-item "><a href="#">Cars &amp; Motocycles</a>
          </li>
          <li class="current-menu-item "><a href="#">Home Improments</a>
          </li>
          <li class="current-menu-item "><a href="#">Vouchers &amp; Services</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="navigation--list">
      <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> Cart</span></a></div>
    </div>

    <div class="ps-panel--sidebar" id="menu-mobile">
      <div class="ps-panel__header">
        <h3>Menu</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
            <ul class="sub-menu">
              <li class="current-menu-item "><a href="index.html">Marketplace Full Width</a>
              </li>
              <li class="current-menu-item "><a href="homepage-2.html">Home Auto Parts</a>
              </li>
              <li class="current-menu-item "><a href="homepage-10.html">Home Technology</a>
              </li>
              <li class="current-menu-item "><a href="homepage-9.html">Home Organic</a>
              </li>
              <li class="current-menu-item "><a href="homepage-3.html">Home Marketplace V1</a>
              </li>
              <li class="current-menu-item "><a href="homepage-4.html">Home Marketplace V2</a>
              </li>
              <li class="current-menu-item "><a href="homepage-5.html">Home Marketplace V3</a>
              </li>
              <li class="current-menu-item "><a href="homepage-6.html">Home Marketplace V4</a>
              </li>
              <li class="current-menu-item "><a href="homepage-7.html">Home Electronic</a>
              </li>
              <li class="current-menu-item "><a href="homepage-8.html">Home Furniture</a>
              </li>
              <li class="current-menu-item "><a href="homepage-kids.html">Home Kids</a>
              </li>
              <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                  </li>
                  <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                  </li>
                  <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                  </li>
                  <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                  </li>
                  <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                  </li>
                  <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Product Layout<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="product-default.html">Default</a>
                  </li>
                  <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                  </li>
                  <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                  </li>
                  <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                  </li>
                  <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                  </li>
                  <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Product Types<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="product-default.html">Simple</a>
                  </li>
                  <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                  </li>
                  <li class="current-menu-item "><a href="product-image-swatches.html">Images Swatches</a>
                  </li>
                  <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                  </li>
                  <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                  </li>
                  <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                  </li>
                  <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                  </li>
                  <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                  </li>
                  <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                  </li>
                  <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                  </li>
                  <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Woo Pages<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                  </li>
                  <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                  </li>
                  <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                  </li>
                  <li class="current-menu-item "><a href="compare.html">Compare</a>
                  </li>
                  <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                  </li>
                  <li class="current-menu-item "><a href="my-account.html">My Account</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="">Pages</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Basic Page<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="about-us.html">About Us</a>
                  </li>
                  <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                  </li>
                  <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                  </li>
                  <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                  </li>
                  <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                  </li>
                  <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                  </li>
                  <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                  </li>
                  <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
          <li class="menu-item-has-children has-mega-menu"><a href="">Blogs</a><span class="sub-toggle"></span>
            <div class="mega-menu">
              <div class="mega-menu__column">
                <h4>Blog Layout<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                  </li>
                </ul>
              </div>
              <div class="mega-menu__column">
                <h4>Single Blog<span class="sub-toggle"></span></h4>
                <ul class="mega-menu__list">
                  <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                  </li>
                  <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                  </li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>


@yield('content')




    <footer class="ps-footer ps-footer--2">
          <div class="container container-pad" >
            <nav class="navigation-cus">              
                <ul class="menu-cus">
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
                  <li class="current-menu-item "><a href="homepage-2.html">Faq</a>
                  </li>
                </ul>              
            </nav>
          </div>
      <div class="ps-vendor-banner bg--cover" data-background="{{asset('assets/front/homepage/footer.png')}}" {{-- style="background: url(././img/bg/vendor.jpg);" --}}>
        <div class="container">
          <h3 style="    text-align: left;  margin-left: 18.5%;">Blood Pressure Calculator</h3>
          <h2>WE CARE ABOUT YOUR HEALTH.</h2><a class="ps-btn ps-btn--lg point-area" href="#">Check Now</a>
        </div>
      </div>

    </footer>
{{--     <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div> --}}
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
   $(document).on('submit','#calculationform',function(e){
      // e.preventDefault();
      var admin_loader=0;
      var systole=Number($('.systole').val());
      var diastole=Number($('.diastole').val());

     
      if(systole <= diastole){
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