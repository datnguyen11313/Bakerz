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

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/vendor/lastudioicons.css">
    <link rel="stylesheet" href="./assets/css/vendor/dliconoutline.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="./assets/css/animate.min.css">
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="./assets/css/lightgallery-bundle.min.css">
    <link rel="stylesheet" href="./assets/css/magnific-popup.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <style>

        .pricing-card__price {
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: row;
  flex-wrap: wrap;
  text-align: center;
  color: white;
}

.pricing-card__price-value,
.pricing-card__price-suffix {
  font-size: 1rem;
  line-height: 1.5;
  word-break: break-word;
}

    </style>

</head>

<body>
@include('layouts.header')
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="assets/images/bg/breadcrumb-bg-4.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Bakerz Bite Rewards</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="{{ route('client.home') }}">Home</a></li>
                            <li>Bakerz Bite Rewards</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- Product Section Start -->
    <div class="blog-sidebar blog-sidebar-right">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 section-padding-04">
                    <div class="">
                        <div class="single-blog">
                            <div class="single-blog-content">
                                <ul class="blog-post-two__meta">
                                    <li><a href="{{ route('client.home') }}">Bakerz Bite</a></li>
                                    <li>-</li>
                                    <li><span>Oct 05, 2024</span></li>
                                </ul>
                                <h2 class="single-blog-title">What is Bakerz Bite Rewards?</h2>
                                <p class="single-blog-description">Bakerz Bite Rewards is a program created by Bakerz Bite for the purpose of paying tribute to Bakerz Bite customers. When you join, you will receive incentives based on the ranks you have achieved, divided into ranks such as: Bronze, Gold, and Diamond. Rankings will be calculated based on the level of spending and the number of points you accumulate for each order.</p>
                                <p class="single-blog-description">Bakerz Bite's upgrade criteria will be gradually increased by tier with the upgrade criteria will be:</p>
                                <al>
                                    <li>Bronze Member: This will be the most basic rank that every user will be able to use when making purchases at Bakerz Bite.</li>
                                    <li>Gold Tier: You need to accumulate 100 points, when you buy with $10 you will get 1 point, points are calculated according to the total value of each order.</li>
                                    <li>Diamond Tier: You need to accumulate 500 points, when you buy with $10 you will get 1 point, points are calculated according to the total value of each order.</li>
                                </al>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->
    <!-- Pricing Section Strat -->
    <div class="pricing-section section-padding-01 pt-5" style="padding-top: 0px !important;">
        <div class="container">
            <!-- Section Title Strat -->
            <div class="section-title-02 text-center">
                <h2 class="section-title-02__title">Bakerz Bite Rewards Upgrade Criteria</h2>
            </div>
            <!-- Section Title End -->

            <div class="row g-6 gx-xxl-10 justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">

                    <!-- Pricing Card Strat -->
                    <div class="pricing-card">
                        <div class="pricing-card__header">
                            <div class="pricing-card__heading pricing-bg-1">
                                <h3 class="pricing-card__title text-white">Bronze</h3>
                                <span class="pricing-card__sub-title text-white">( Nember )</span>
                            </div>
                        </div>
                        <div class="pricing-card__body">
                            <ul>
                                <li>You will get free shipping on orders under 5klm.</li>
                                <li>Receive a Members' Day offer notification.</li>
                                <li>Get free customer care consultation.</li>
                            </ul>
                        </div>
                        <div class="pricing-card__footer pricing-bg-1">
                            <div class="pricing-card__price">
                                <span class="pricing-card__price-value">0</span>
                                <span class="pricing-card__price-suffix">/ 99 point</span>
                            </div>
                            <div class="pricing-card__action">
                                <a class="pricing-card__icon" href="{{ route('shop_all') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="16" fill="none" viewBox="0 0 44 16">
                                        <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Card End -->

                </div>
                <div class="col-12 col-md-6 col-lg-4">

                    <!-- Pricing Card Strat -->
                    <div class="pricing-card">
                        <div class="pricing-card__header">
                            <div class="pricing-card__heading pricing-bg-2" style="background-color: #FFC107 !important;">
                                <h3 class="pricing-card__title text-white">Gold</h3>
                                <span class="pricing-card__sub-title text-white">( Vip )</span>
                            </div>
                        </div>
                        <div class="pricing-card__body">
                            <ul>
                                <li>Get all Bronze offers.</li>
                                <li>Get exceptional customer care.</li>
                                <li>Get birthday notifications from Bakerz Bite, with up to 50% off orders under $100.</li>
                                <li class="text-danger">Especially, all orders at checkout are discounted by 2%.</li>
                            </ul>
                        </div>
                        <div class="pricing-card__footer pricing-bg-2" style="background-color: #FFC107 !important;">
                            <div class="pricing-card__price">
                                <span class="pricing-card__price-value">100</span>
                                <span class="pricing-card__price-suffix">/ 499 point</span>
                            </div>
                            <div class="pricing-card__action">
                                <a class="pricing-card__icon" href="{{ route('shop_all') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="16" fill="none" viewBox="0 0 44 16">
                                        <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Card End -->

                </div>
               <div class="col-12 col-md-6 col-lg-4">

                    <!-- Pricing Card Strat -->
                    <div class="pricing-card">
                        <div class="pricing-card__header">
                            <div class="pricing-card__heading pricing-bg-3" style="background-color: #07e2ff  !important;">
                                <h3 class="pricing-card__title text-white">Diamond</h3>
                                <span class="pricing-card__sub-title text-white">( Supper Vip )</span>
                            </div>
                        </div>
                        <div class="pricing-card__body">
                            <ul>
                                <li>Get all Gold offers.</li>
                                <li>All orders at checkout are discounted by 5%.</li>
                                <li class="text-danger">In particular, they are enrolled in the Bakerz Bite's Workshop, enthusiastically guided by the store's famous chefs to create their own favorite cake.</li>
                            </ul>
                        </div>
                        <div class="pricing-card__footer pricing-bg-3" style="background-color: #07e2ff  !important;">
                            <div class="pricing-card__price">
                                <span class="pricing-card__price-value">500</span>
                                <span class="pricing-card__price-suffix">/ Supper Vip</span>
                            </div>
                            <div class="pricing-card__action">
                                <a class="pricing-card__icon" href="{{ route('shop_all') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="16" fill="none" viewBox="0 0 44 16">
                                        <path fill="currentColor" d="M43.707 8.707a1 1 0 0 0 0-1.414L37.343.929a1 1 0 1 0-1.414 1.414L41.586 8l-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM0 9h43V7H0v2z"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing Card End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Section End -->

    <div class="bg-dark-four dark-footer">
        <!-- Footer Strat -->
    <div class="footer-section">

        <!-- Footer Widget Section Strat -->
        <div class="footer-widget-section">
            <div class="container custom-container">
                <div class="row gy-6">
                    <div class="col-md-4">
                        <!-- Footer Widget Section Strat -->
                        <div class="footer-widget">
                            <div class="footer-widget__logo">
                                <a class="logo-dark" href="{{ route('client.home')}}"><img src="assets/images/logo.svg" alt="Logo"></a>
                                <a class="logo-white d-none" href="index.html"><img src="assets/images/logo-white.svg" alt="Logo"></a>
                            </div>
                            <div class="footer-widget__social">
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-facebook"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-twitter"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-pinterest"></i></a>
                                <a href="https://www.facebook.com/profile.php?id=61566020916878&sk=about" target="blank"><i class="lastudioicon-b-instagram"></i></a>
                            </div>
                        </div>
                        <!-- Footer Widget Section End -->
                    </div>
                    <div class="col-md-8">
                        <!-- Footer Widget Wrapper Strat -->
                        <div class="footer-widget-wrapper d-flex flex-wrap gap-4">

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Categories</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('category')}}">Sweet Breads</a></li>
                                    <li><a href="{{ route('category')}}">Baked Goods</a></li>
                                    <li><a href="{{ route('category')}}">Cakes</a></li>
                                    <li><a href="{{ route('category')}}">Cheesecakes</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Services</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('delivery')}}">Delivery</a></li>
                                    <li><a href="{{ route('checkout')}}">Payment</a></li>
                                    <li><a href="{{ route('exchange-return-policy')}}">Exchange & Return Policy</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Information</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="{{ route('about')}}">About Us</a></li>
                                    <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                    <li><a href="{{ route('blog-detail')}}">Latest Post</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                        </div>
                        <!-- Footer Widget Wrapper End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget Section End -->

        <!-- Footer Copyright Strat -->
        <div class="footer-copyright footer-copyright-two">
            <div class="container">
                <!-- Footer Copyright Text Strat -->
                <div class="footer-copyright-text text-center">
                    <p>&copy; 2024 <strong> Bakerz Bite </strong> Made with <i class="lastudioicon-heart-1"></i> by <a href="https://aptechvietnam.com.vn/">Aptech</a></p>
                </div>
                <!-- Footer Copyright Text End -->
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->
    </div>

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="./assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/countdown.min.js"></script>
    <script src="./assets/js/ion.rangeSlider.min.js"></script>
    <script src="./assets/js/lightgallery.min.js"></script>
    <script src="./assets/js/jquery.magnific-popup.min.js"></script>
    <script src="./assets/js/ajax.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>

    <!-- Activation JS -->
    <script src="./assets/js/main.js"></script>

</body>

</html>
