<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerz Bite</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/Frame1.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/lastudioicons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/dliconoutline.css')}}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightgallery-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <style type="text/css">


         .mobile-primary-menu .sub-menu {
        display: none;
        padding-left: 15px;
    }

    .mobile-primary-menu li.open > a {
        color: #ff3d3d; /* hoặc tuỳ bạn highlight khi mở menu */
    }

      body {
        margin-top: 20px;
        background: #f7f8fa;
      }

      .avatar-xxl {
        height: 7rem;
        width: 7rem;
      }

      .card {
        margin-bottom: 20px;
        -webkit-box-shadow: 0 2px 3px #eaedf2;
        box-shadow: 0 2px 3px #eaedf2;
      }

      .pb-0 {
        padding-bottom: 0 !important;
      }

      .font-size-16 {
        font-size: 16px !important;
      }
      .avatar-title {
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        background-color: #038edc;
        color: #fff;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        font-weight: 500;
        height: 100%;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 100%;
      }

      .bg-soft-primary {
        background-color: rgba(3, 142, 220, 0.15) !important;
      }
      .rounded-circle {
        border-radius: 50% !important;
      }

      .nav-tabs-custom .nav-item .nav-link.active {
        color: #038edc;
      }
      .nav-tabs-custom .nav-item .nav-link {
        border: none;
      }
      .nav-tabs-custom .nav-item .nav-link.active {
        color: #038edc;
      }

      .avatar-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 12px;
      }

      .border-end {
        border-right: 1px solid #eff0f2 !important;
      }

      .d-inline-block {
        display: inline-block !important;
      }

      .badge-soft-danger {
        color: #f34e4e;
        background-color: rgba(243, 78, 78, 0.1);
      }

      .badge-soft-warning {
        color: #f7cc53;
        background-color: rgba(247, 204, 83, 0.1);
      }

      .badge-soft-success {
        color: #51d28c;
        background-color: rgba(81, 210, 140, 0.1);
      }

      .avatar-group .avatar-group-item {
        margin-left: -14px;
        border: 2px solid #fff;
        border-radius: 50%;
        -webkit-transition: all 0.2s;
        transition: all 0.2s;
      }

      .avatar-sm {
        height: 2rem;
        width: 2rem;
      }

      .nav-tabs-custom .nav-item {
        position: relative;
        color: #343a40;
      }

      .nav-tabs-custom .nav-item .nav-link.active:after {
        -webkit-transform: scale(1);
        transform: scale(1);
      }

      .nav-tabs-custom .nav-item .nav-link::after {
        content: "";
        background: #038edc;
        height: 2px;
        position: absolute;
        width: 100%;
        left: 0;
        bottom: -2px;
        -webkit-transition: all 250ms ease 0s;
        transition: all 250ms ease 0s;
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      .badge-soft-secondary {
        color: #74788d;
        background-color: rgba(116, 120, 141, 0.1);
      }

      .badge-soft-secondary {
        color: #74788d;
      }

      .work-activity {
        position: relative;
        color: #74788d;
        padding-left: 5.5rem;
      }

      .work-activity::before {
        content: "";
        position: absolute;
        height: 100%;
        top: 0;
        left: 66px;
        border-left: 1px solid rgba(3, 142, 220, 0.25);
      }

      .work-activity .work-item {
        position: relative;
        border-bottom: 2px dashed #eff0f2;
        margin-bottom: 14px;
      }

      .work-activity .work-item:last-of-type {
        padding-bottom: 0;
        margin-bottom: 0;
        border: none;
      }

      .work-activity .work-item::after,
      .work-activity .work-item::before {
        position: absolute;
        display: block;
      }

      .work-activity .work-item::before {
        content: attr(data-date);
        left: -157px;
        top: -3px;
        text-align: right;
        font-weight: 500;
        color: #74788d;
        font-size: 12px;
        min-width: 120px;
      }

      .work-activity .work-item::after {
        content: "";
        width: 10px;
        height: 10px;
        border-radius: 50%;
        left: -26px;
        top: 3px;
        background-color: #fff;
        border: 2px solid #038edc;
      }

      /* Ẩn input file */
      input[type="file"] {
        display: none;
      }

      @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    .cart-bounce {
        animation: bounce 0.5s ease-in-out;
    }

    /* CSS cho fly-to-cart animation */
    @keyframes fly-to-cart {
        0% {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
        100% {
            opacity: 0;
            transform: translateY(-300px) translateX(200px) scale(0.1);
        }
    }

    .fly-to-cart-img {
        position: absolute;
        z-index: 9999;
        transition: all 1s ease-in-out;
        animation: fly-to-cart 1s forwards;
        opacity: 0;
    }




    </style>

</head>
<body >
       <!-- Header Start -->
       <div class="header-section header-transparent header-sticky">
        <div class="container position-relative">

            <div class="row align-items-center">

                <div class="col-lg-3 col-xl-3 col-7">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a id="countuser" href="{{ route('client.home')}}">

                            <img class="white-logo" src="{{asset('assets/images/logo-white.svg')}}" width="229" height="62" alt="Logo">
                        </a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col-lg-7 col-xl-6 d-none d-lg-block">
                    <!-- Header Menu Start -->
                    <div class="header-menu">
                        <ul class="header-primary-menu d-flex justify-content-center">
                            <li >
                                <a  href="{{ route('client.home') }}"  class="menu-item-link"><span >Home</span></a>
                            </li>
                            <li class="position-static">
                                <a class="menu-item-link" href="{{ route('shop_all')}}"><span>Shop</span></a>
                                <ul class="sub-menu sub-menu-mega">
                                    <li class="mega-menu-item">
                                        <ul>
                                            <li class="mega-menu-item-title">Product Types</li>
                                            <li><a class="sub-item-link" href="{{ route('shop_all') }}"><span>All Products</span></a></li>
                                            @foreach ($categories->take(4) as $category)
                                            <li><a class="sub-item-link" href="{{ route('shop.filterByCategory', ['category_id' => $category->category_id]) }}"><span>{{ $category->category_name }}</span></a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item">
                                        <ul>
                                            <li class="mega-menu-item-title">Featured Product</li>
                                            <li><a class="sub-item-link" href="{{ route('shop.filter_nonCatagory', ['isOption' => 3]) }}"><span>Discount</span></a></li>
                                            <li><a class="sub-item-link" href="{{ route('shop.filter_nonCatagory', ['isOption' => 4]) }}"><span>What Hot</span></a></li>
                                            <!-- Hiển thị 2 category cuối cùng -->
                                            @foreach ($categories->slice(-3) as $category)
                                            <li><a class="sub-item-link" href="{{ route('shop.filterByCategory', ['category_id' => $category->category_id]) }}"><span>{{ $category->category_name }}</span></a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="{{ route('client.home')}}">
                                                    <img src="{{asset('assets/images/product/featured-product-01.png')}}" alt="Shop">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-item banner-menu-content-wrap">
                                        <ul>
                                            <li>
                                                <a href="{{ route('client.home')}}">
                                                    <img src="{{asset('assets/images/product/featured-product-01.png')}}" alt="Shop">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="menu-item-link" href="{{ route('client.home')}}"><span>Pages</span></a>
                                <ul class="sub-menu">
                                    <li><a class="sub-item-link" href="{{ route('blog-detail') }}"><span>Workshop</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('client.blog') }}"><span>Blog</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('our-chef') }}"><span>Our Chef</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('faq') }}"><span>FAQs</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('pricing-plan') }}"><span>Bakerz Bite Rewards</span></a></li>
                                    <li><a class="sub-item-link" href="{{ route('coming-soon') }}"><span>Coming Soon</span></a></li>
                                </ul>
                            </li>
                            <li><a class="menu-item-link" href="{{ route('about') }}"><span>About</span></a>
                            </li>
                            <li><a class="menu-item-link" href="{{ route('contact') }}"><span>Contact</span></a></li>
                        </ul>
                    </div>
                    <!-- Header Menu End -->
                </div>
                <div class="col-lg-2 col-xl-3 col-5">
                    <!-- Header Meta Start -->
                    <div class="header-meta">
                        <ul class="header-meta__action d-flex justify-content-end">
                            <li><button class="action search-open"><i class="lastudioicon-zoom-1"></i></button></li>
                            @auth
                            <li>
                                <a href="{{ route('wishlist') }}"><button class="action" data-bs-toggle="offcanvas" data-bs-target="#">
                                    <i class="far fa-heart"></i>
                                </button></a>
                            </li>
                            @endauth

                            <li>
                                <button id="cart_icon" class="action" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart">
                                    <i class="lastudioicon-shopping-cart-2"></i>
                                    <span id="cart_quantity" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"></span>
                                </button>
                            </li>
                            <!-- header-primary-menu d-flex justify-content-center -->
                            <div class="header-meta__action d-flex justify-content-end">
                            @auth
                            <div class="header-menu">
                                <ul class="header-primary-menu d-flex justify-content-center">
                                    <li style="padding: 0px 0px !important; position: relative !important;"><a  class=" action" href="{{ route('client.profile', ['userid' => Auth::user()->user_id]) }}">
                                            <button class="action" data-bs-toggle="offcanvas" data-bs-target="#"><i class="far fa-user"></i></button>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a class="sub-item-link" href="{{ route('client.profile', ['userid' => Auth::user()->user_id]) }}"><span>Profile</span></a></li>
                                            <li >
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                <a  class="sub-item-link action" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <button class=" action" data-bs-toggle="offcanvas" data-bs-target="#"><i class="fas fa-sign-out-alt"></i>
                                                    </button>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                            @guest

                            <li >
                            <form id="login-form" action="{{ route('login') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                                <a  class="action" href="{{ route('login') }}">Login</a>
                            </li>

                            @endguest
                            </div>
                             <!-- button menu -->
              <li class="d-lg-none">
                <button class="action" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                  <i class="lastudioicon-menu-8-1"></i>
                </button>
              </li>
                        </ul>
                    </div>
                    <!-- Header Meta End -->
                </div>
            </div>

        </div>
    </div>
    <!-- Header End -->

    <!-- offcanvas Menu Start -->
<div class="offcanvas offcanvas-end offcanvas-menu bg-secondary" id="offcanvasMenu">
  <div class="offcanvas-header justify-content-end">
    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas">
      <i class="lastudioicon-e-remove"></i>
    </button>
  </div>
  <div class="offcanvas-body">
    <ul class="mobile-primary-menu">
      <li>
        <a href="{{ route('client.home') }}" class="menu-item-link active"><span>Home</span></a>
      </li>

      <li class="position-static">
        <a class="menu-item-link" href="{{ route('shop_all') }}"><span>Shop</span></a>
        <ul class="sub-menu sub-menu-mega">
          <li class="mega-menu-item">
            <ul>
              <li class="mega-menu-item-title">Product Types</li>
              <li><a class="sub-item-link" href="{{ route('shop_all') }}"><span>All Products</span></a></li>
              @foreach ($categories->take(4) as $category)
                <li>
                  <a class="sub-item-link" href="{{ route('shop.filterByCategory', ['category_id' => $category->category_id]) }}">
                    <span>{{ $category->category_name }}</span>
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
          <li class="mega-menu-item">
            <ul>
              <li class="mega-menu-item-title">Featured Product</li>
              <li><a class="sub-item-link" href="{{ route('shop.filter_nonCatagory', ['isOption' => 3]) }}"><span>Discount</span></a></li>
              <li><a class="sub-item-link" href="{{ route('shop.filter_nonCatagory', ['isOption' => 4]) }}"><span>What Hot</span></a></li>
              @foreach ($categories->slice(-3) as $category)
                <li>
                  <a class="sub-item-link" href="{{ route('shop.filterByCategory', ['category_id' => $category->category_id]) }}">
                    <span>{{ $category->category_name }}</span>
                  </a>
                </li>
              @endforeach
            </ul>
          </li>
        </ul>
      </li>

      <li class="has-submenu">
  <a class="menu-item-link" href="javascript:void(0)"><span>Pages</span></a>
  <ul class="sub-menu">
    <li><a class="sub-item-link" href="{{ route('blog-detail') }}"><span>Workshop</span></a></li>
    <li><a class="sub-item-link" href="{{ route('client.blog') }}"><span>Blog</span></a></li>
    <li><a class="sub-item-link" href="{{ route('our-chef') }}"><span>Our Chef</span></a></li>
    <li><a class="sub-item-link" href="{{ route('faq') }}"><span>FAQs</span></a></li>
    <li><a class="sub-item-link" href="{{ route('pricing-plan') }}"><span>Bakerz Bite Rewards</span></a></li>
    <li><a class="sub-item-link" href="{{ route('coming-soon') }}"><span>Coming Soon</span></a></li>
  </ul>
</li>


      <li><a class="menu-item-link" href="{{ route('about') }}"><span>About</span></a></li>
      <li><a class="menu-item-link" href="{{ route('contact') }}"><span>Contact</span></a></li>

      @auth
      <li>
        <a class="menu-item-link" href="{{ route('client.profile', ['userid' => Auth::user()->user_id]) }}"><span>Profile</span></a>
      </li>
      <li>
        <form id="logout-form-offcanvas" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-offcanvas').submit();" class="menu-item-link">
          <span>Logout</span>
        </a>
      </li>
      @endauth

      @guest
      <li>
        <a class="menu-item-link" href="{{ route('login') }}"><span>Login</span></a>
      </li>
      @endguest
    </ul>

    <ul class="hotline-wrapper offcanvas-hotline">
      <li>
        <div class="hotline">
          <i class="lastudioicon lastudioicon-support248"></i>
          <div class="hotline-content">
            <span class="hotline-text">Hotline</span>
            <a class="hotline-link" href="tel:0123456789">(012) 345-6789</a>
          </div>
        </div>
      </li>
      <li>
        <div class="hotline">
          <i class="lastudioicon lastudioicon-pin-check"></i>
          <div class="hotline-content">
            <span class="hotline-text">Store Location</span>
            <a class="hotline-link" href="#">6391 Elgin St. Celina, Delaware 10299</a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
<!-- offcanvas Menu End -->

    <!-- Search Start  -->
    <div class="search-popup position-fixed top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center p-6 bg-black bg-opacity-75">
        <div class="search-popup__form position-relative">

            <form action="{{ route('shop_all') }}" method="GET">
                <input class="search-popup__field border-0 border-bottom bg-transparent text-white w-100 tra py-3" name="query" type="text" placeholder="Search…" value="{{ request()->query('query') }}">
                <button type="submit"  class="search-popup__icon text-white border-0 bg-transparent position-absolute top-50 end-0 translate-middle-y"><i class="lastudioicon-zoom-1"></i></button>
            </form>
        </div>
        <button type="submit" class="search-popup__close position-absolute top-0 end-0 m-8 p-3 lh-1 border-0 text-white fs-4"><i class="lastudioicon-e-remove"></i></button>
    </div>
    <!-- Search End -->

    <!-- Add cart Error modal  -->
<div class="quickview-product-modal modal fade"  id="outOfStock" style="z-index: 1050 !important ;">
    <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close bg-warning" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="fas fa-exclamation-triangle"></i> Out Of Stock!
                </div>
            </div>
        </div>
</div>
<!-- Add cart OK modal  -->
<div class="quickview-product-modal modal fade" id="modalCart">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> Added To Cart Successfully!
                </div>
            </div>
        </div>
    </div>
        <!-- Offcanvas Cart Start  -->
<div class="offcanvas offcanvas-end offcanvas-cart" id="offcanvasCart">

  <div class="offcanvas-header">
      <h4 class="offcanvas-title">My Cart</h4>
      <button type="button" class="btn-close text-secondary" data-bs-dismiss="offcanvas"><i class="lastudioicon lastudioicon-e-remove"></i></button>
  </div>

  @include('client.shop.others.cartpartials')

  <div class="offcanvas-footer d-flex flex-column gap-4">

      <!-- Mini Cart Total End  -->
      <div class="mini-cart-totla">
          <span class="label">Total:</span>
          <span id="total_price" class="value">$24.95</span>
      </div>
      <!-- Mini Cart Total End  -->

      <!-- Mini Cart Button End  -->
      <div class="mini-cart-btn d-flex flex-column gap-2">
        @auth
          <a class="d-block btn btn-secondary btn-hover-primary" href="{{ route('cart') }}">View cart</a>
          <a id="btnCheckout" class="d-block btn btn-secondary btn-hover-primary" href="{{ route('checkout') }}">Checkout</a>
        @endauth
      </div>
      <!-- Mini Cart Button End  -->

  </div>

</div>
<!-- Offcanvas Cart End -->
      <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/js/vendor/modernizr-3.11.7.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugins JS -->
    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('assets/js/lightgallery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/ajax.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>

    <!-- Activation JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- Vendors JS -->
    <script>
$(document).ready(function () {
        // Khi click vào menu có submenu trong offcanvas
        $('.offcanvas-menu .mobile-primary-menu > li > a').on('click', function (e) {
            var $parent = $(this).parent('li');
            var $submenu = $parent.find('.sub-menu').first();

            if ($submenu.length > 0) {
                e.preventDefault(); // chặn chuyển trang
                $submenu.slideToggle(300); // toggle menu xuống

                // Toggle class 'open' để biết menu đã mở
                $parent.toggleClass('open');
            }
        });
    });







        $(window).on("scroll", function (event) {
            var scroll = $(window).scrollTop();
            if (scroll <= 0) {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).removeClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "{{asset('assets/images/logo-white.svg')}}"
                );
            } else {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).addClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "{{asset('assets/images/logo.svg')}}"
                );
            }
        });

        $(document).ready(function() {
          updateCartView();
          // Kiểm tra trạng thái mỗi giây (1000ms)
          setInterval(updateonlineUser, 1000);

          // Khi mở modal #outOfStock
          $('#outOfStock').on('shown.bs.modal', function () {
            // Đóng exampleProductModal trước khi mở outOfStock
            $('#exampleProductModal').modal('hide');
            $('.modal-backdrop').not(':last').remove();
            // Đảm bảo modal outOfStock có z-index cao
            $('#outOfStock').css('z-index', 1060);
        });

        var isAnimating = false;
        var cart = $('#cart_icon'); // Lấy vị trí của biểu tượng giỏ hàng
          $(document).on('click', '.add-to-cart', function(e) {
            e.preventDefault();

              var productId = $(this).data('product-id');
              var imgtodrag = $(this).closest('.product-item').find('img').eq(0);
            //   var cart = $('#cart_icon'); // Lấy vị trí của biểu tượng giỏ hàng
              $.ajax({
                  url: "{{ route('cart.checkinventory') }}",
                  method: "GET",
                  data: {
                      _token: "{{ csrf_token() }}",
                      product_id: productId,
                      quantity: 1
                  },
                  success: function(response) {
                      if (response.error === 'out_of_stock'){
                        var outStockModal = new bootstrap.Modal(document.getElementById('outOfStock'));
                        outStockModal.show();
                        return;
                    }
                      $.ajax({
                          url: "{{ route('cart.new_add') }}",
                          method: "POST",
                          data: {
                              _token: "{{ csrf_token() }}",
                              product_id: productId,
                              quantity: 1
                          },
                          success: function(response) {
                              if (response.status === 'success') {
                                  // Cập nhật số lượng sản phẩm trong giỏ hàng
                                //   var modalCart = new bootstrap.Modal(document.getElementById('modalCart'));
                                //   modalCart.show();
                                  updateCartView();
                                  // Thêm hiệu ứng animation vào icon giỏ hàng
                                    $('#cart_icon').addClass('cart-bounce');
                                    setTimeout(function() {
                                        $('#cart_icon').removeClass('cart-bounce');
                                    }, 500); // Thời gian của animation

                                    // Start

                                    if (imgtodrag.length > 0) {
                                    // Tạo một thẻ img clone để thực hiện animation bay
                                    var imgclone = imgtodrag.clone()
                                        .css({
                                            'position': 'absolute',
                                            'z-index': '9999',
                                            'top': imgtodrag.offset().top,
                                            'left': imgtodrag.offset().left,
                                            'width': imgtodrag.width(),
                                            'height': imgtodrag.height()
                                        })
                                        .appendTo($('body')) // Chỉ append vào body một lần
                                        .addClass('fly-to-cart-img'); // Thêm class để apply animation
                                    // Animation bay đến giỏ hàng
                                    imgclone.animate({
                                        'top': cart.offset().top,
                                        'left': cart.offset().left,
                                        'width': 50,
                                        'height': 50
                                    }, 1000, function() {
                                        imgclone.remove(); // Xóa clone sau khi animation kết thúc
                                    });

                                    }
                                    // End
                              } else {
                                  alert(response.message);
                              }
                          },
                          error: function(xhr) {
                              window.location.href = "{{ route('login') }}"; // Sử dụng route trong Blade để tạo đường dẫn
                              // console.error('Error:', xhr.responseText);
                          }
                      });
                  },
                  error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                  }
              });

          });

          // delete cart
          $(document).on('click', '.cart_delete', function(e) {

                e.preventDefault();

                var productId = $(this).data('product-id');
                console.log(productId); // In ra product_id để đảm bảo nó có giá trị đúng

                $.ajax({
                    url: "{{ route('cart.delete', ':id') }}".replace(':id', productId), // Truyền product_id vào URL
                    method: "DELETE",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId
                    },
                    success: function(response) {
                        if (response.status === 'success') {
                            updateCartView();
                        } else {
                            //   alert(response.message);
                        }
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                    }
                });
            });
            function updateCartView() {
                $.ajax({
                    url: "{{ route('cart.show') }}", // Đường dẫn để lấy lại giỏ hàng từ session
                    method: "GET",
                    success: function(response) {
                        $('#cart-content').html(response.cart_html); // Cập nhật lại nội dung giỏ hàng
                        $('#cart-content2').html(response.cart_html2); // Cập nhật lại nội dung giỏ hàng
                        $('#cart_quantity').text(response.cart_quantity); // Cập nhật lại số lượng giỏ hàng

                        console.log(response.cart_quantity);
                        calculateTotal();
                        // Sử dụng jQuery animate để tạo hiệu ứng di chuyển
                        $('#cart_icon').css('color', 'red')// Đổi màu thành đỏ
                        .animate({
                            top: '-10px'
                        }, 200, function() {
                            $(this).animate({
                                top: '0px'
                            }, 200, function() {
                                // Lặp lại lần nữa
                                $(this).animate({
                                    top: '-10px'
                                }, 200, function() {
                                    $(this).animate({
                                        top: '0px'
                                    }, 200, function() {
                                        // Sau khi hiệu ứng hoàn thành, đổi lại màu ban đầu
                                        $(this).css('color', '');
                                    });
                                });
                            });
                        });
                    },
                    error: function(xhr) {
                        console.error('Error:', xhr.responseText);
                        // alert('An error occurred while updating the cart.');
                    }
                });
            }

        });
        function calculateTotal() {
            var total = 0;
            // Duyệt qua tất cả các phần tử có class 'subtotal'
            $('.subtotal').each(function() {
                // Lấy giá trị của từng phần tử và loại bỏ ký tự $
                var subtotal = parseFloat($(this).text().replace('$', ''));
                // Cộng tổng lại
                total += subtotal;
            });

            // Hiển thị tổng đã tính
            $('#total_price').text(total.toFixed(2) + ' $');
        }
        function updateonlineUser() {
            $.ajax({
                url: "{{ route('online-users') }}", // Đường dẫn để lấy lại giỏ hàng từ session
                method: "GET",
                success: function(response) {
                    $('#onlineCount').text(response.onlineCount); // Cập nhật lại số lượng giỏ hàng
                },
                error: function(xhr) {
                    console.error('Error:', xhr.responseText);
                    // alert('An error occurred while updating the cart.');
                }
            });
        }

          document.querySelectorAll('.mobile-menu-expand').forEach(function (toggle) {
    toggle.addEventListener('click', function (e) {
      const parentLi = toggle.closest('li.menu-item-has-children');
      parentLi.classList.toggle('active-expand');

      // Toggle sub menu visibility
      const submenu = parentLi.querySelector('.sub-menu');
      if (submenu) {
        submenu.style.display =
          submenu.style.display === 'block' ? 'none' : 'block';
      }

      e.stopPropagation(); // Tránh lặp click với phần tử cha
    });
  });



    </script>
</body>

</html>
