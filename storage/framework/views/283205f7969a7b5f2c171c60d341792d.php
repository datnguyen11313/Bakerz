<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<title>Bakerz Bite</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">
    <style>
        .pagination li {
            display: inline-block;
            margin: 0 5px;
        }

        .pagination li a {
            padding: 10px 15px;
            color: #333;
            text-decoration: none;


        }

        .pagination li.active a {
            background-color: #BC8157;


        }

        .pagination li.disabled a {
            color: #ccc;
            pointer-events: none;
            cursor: not-allowed;
        }

        .pagination li a:hover {
            background-color: #9b8e8e;
        }
        .sidebars_widget__instagram {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
            list-style: none;
        }

        .sidebars_widget__instagram li {
            width: 50%;
        }

        .sidebars_widget__instagram li a {
            display: block;
            position: relative;
            width: 100%;
            padding-bottom: 100%;
            overflow: hidden;
        }

        .sidebars_widget__instagram img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .sidebars_widget__instagram i {
            position: absolute;
            bottom: 10px;
            right: 10px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 18px;
        }


        .sidebars_widget__banner {
            position: relative;
            display: block;
            width: 100%;
        }

        .sidebars_widget__banner img {
            width: 100%;
            height: auto;
            display: block;
        }

        .banner-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 100%;
        }

        .banner-content_title {
            font-size: 50px;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
            background-color: rgba(0, 0, 0, 0.5);
            padding: 10px 20px;
            border-radius: 5px;
        }
        .active-category {
            background-color: #e5a591;
            color: white !important;
            width: 55%;
            text-align: center;
            border-radius: 10px;
            font-weight: bold;
}

    </style>
</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Breadcrumb Section Start -->
    <div class="breadcrumb" data-bg-image="<?php echo e(asset('assets/images/bg/breadcrumb-bg.jpg')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h1 class="breadcrumb_title">Shop</h1>
                        <ul class="breadcrumb_list">
                            <li><a href="<?php echo e(route('client.home')); ?>">Home</a></li>
                            <li>
                            <a href="">
                                <?php if(request()->is('shop_all')): ?>
                                    All Products
                                <?php elseif(request()->is('shop/3/filter_nonCatagory*')): ?>
                                    Discount
                                <?php elseif(request()->is('shop/4/filter_nonCatagory*')): ?>
                                    What Hot
                                <?php else: ?>
                                    Category
                                <?php endif; ?>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Start -->
    <div class="shop-product-section sidebar-left overflow-hidden">
        <div class="container">
            <div class="row flex-md-row-reverse">
                <!-- Main Content Section -->
                <div class="col-md-8 section-padding-04">
                    <!-- Shop Top Bar Start -->
<div class="shop-topbar">

    <div class="shop-topbar-item shop-topbar-left">
        <p>Showing <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> of <?php echo e($products->total()); ?> result</p>
    </div>

    <div class="shop-topbar-right">
        <div class="shop-topbar-item">
            <form id="sortForm" action="<?php echo e(url()->current()); ?>" method="GET">
                <select name="sort" id="SortBy" onchange="document.getElementById('sortForm').submit();">
                    <option value="best-selling" <?php echo e(request('sort') == 'best-selling' ? 'selected' : ''); ?>>Sort by Latest</option>
                    <option value="price-ascending" <?php echo e(request('sort') == 'price-ascending' ? 'selected' : ''); ?>>Price ↑</option>
                    <option value="price-descending" <?php echo e(request('sort') == 'price-descending' ? 'selected' : ''); ?>>Price ↓</option>
                </select>
            </form>
        </div>


    </div>

</div>
<!-- Shop Top Bar End -->

                    <!-- Product Section Start -->

                    <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-sm-2 row-cols-1 mb-n50">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col mb-50">
                            <!-- Product Item Start -->
                            <div class="product-item text-center">

                                <div class="product-item__image border w-100">
                                    <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>">

                                        <img width="350" height="350" src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
                                    </a>
                                    <ul class="product-item__meta">
                                    <li class="product-item__meta-action">
                                            <a
                                            class="labtn-icon-quickview quickview"
                                            href="#"
                                            data-product-id="<?php echo e($product->product_id); ?>"
                                            data-bs-tooltip="tooltip"
                                            data-bs-placement="top"
                                            title=""
                                            data-bs-original-title="Quick View"
                                            aria-label="Quick View"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleProductModal"
                                            ></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a
                                            class="shadow-1 labtn-icon-cart add-to-cart"
                                            href="#"
                                            data-product-id="<?php echo e($product->product_id); ?>"
                                            ></a>
                                        </li>
                                        <li class="product-item__meta-action">
                                            <a class="labtn-icon-wishlist" href="#" data-product-id="<?php echo e($product->product_id); ?>" data-bs-tooltip="tooltip" data-bs-placement="top" title="Add to wishlist"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-item__content pt-5">
                                    <h5 class="product-item__title">
                                        <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>"><?php echo e($product->product_name); ?></a>
                                    </h5>
                                    <span class="product-item__price">
                                        <?php if($product->price != $product->getDiscountedPrice()): ?>
                                        <del><?php echo e(formatPriceVND($product->price)); ?></del>
                                        <!-- Giá gốc -->
                                    
                                        <strong style="color: red;"
                                        >$<?php echo e(number_format($product->getDiscountedPrice(),2)); ?></strong
                                        >
                                        <!-- Giá sau khi giảm -->
                                        <?php else: ?> <?php echo e(formatPriceVND($product->price)); ?>

                                        <!-- Giá không giảm -->
                                        <?php endif; ?>
                                    </span>

                                </div>
                            </div>
                            <!-- Product Item End -->
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <!-- Shop bottom Bar Start -->
                    <div class="shop-bottombar">
                        <div class="pagination"><?php echo e($products->links('client.custom-pagination')); ?></div>
                    </div>

                    <!-- Shop bottom Bar End -->
                </div>
                <!-- Sidebar Section -->
                <div class="col-md-4">
                    <div class="sidebars">
                        <div class="sidebars_inner">
                           <!-- Search Widget Start -->
                                <form action="<?php echo e(route('shop_all')); ?>" method="GET" class="sidebars_search">
                                    <input type="text" name="query" placeholder="Search Here" class="sidebars_search__input" value="<?php echo e(request()->query('query')); ?>">
                                    <button class="sidebars_search__btn" type="submit"><i class="lastudioicon-zoom-1"></i></button>
                                </form>
                                <!-- Search Widget End -->



                             <!-- Category Widget Start -->
                             <div class="sidebars_widget">
                                    <h3 class="sidebars_widget__title">Category</h3>
                                    <ul class="sidebars_widget__category">
                                        <li>
                                            <a href="<?php echo e(route('shop_all')); ?>" class="<?php echo e(request()->is('shop_all') ? 'active-category' : ''); ?>">All Products</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('shop.filter_nonCatagory', ['isOption' => 3])); ?>" class="<?php echo e(request()->is('shop/3/filter_nonCatagory*') ? 'active-category' : ''); ?>">Discount</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('shop.filter_nonCatagory', ['isOption' => 4])); ?>" class="<?php echo e(request()->is('shop/4/filter_nonCatagory*') ? 'active-category' : ''); ?>">What Hot</a>
                                        </li>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <a href="<?php echo e(route('shop.filterByCategory', ['category_id' => $category->category_id])); ?>" class="<?php echo e(request('category_id') == $category->category_id ? 'active-category' : ''); ?>">
                                                    <?php echo e($category->category_name); ?>

                                                </a>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>

                             <!-- Category Widget End -->


                             <!-- Price Filter Widget Start -->

                                <div class="sidebars_widget">
                                    <h3 class="sidebars_widget__title">Price Filter</h3>
                                    <div class="range-slider">

                                        <input id="price-range" type="text" name="price" value="" />
                                    </div>
                                    <div class="extra-controls">
                                        <button id="filter-btn" class="extra-controls_btn">Filter</button>
                                        <div class="extra-controls_filter">
                                            <label>Price: </label>

                                            <span id="price-range-value">0 - 50</span>
                                        </div>
                                    </div>
                                </div>

                            <!-- Price Filter Widget End -->

<!-- Popular Product Widget Start -->
<div class="sidebars_widget">
    <h3 class="sidebars_widget__title">Popular products</h3>
    <ul class="sidebars_widget__product">
        <?php $__currentLoopData = $bestSellingProducts->take(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Single Product Start -->
        <li class="single-product">
            <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>" class="single-product_thumb" style="border: none; width: 127px;">
                <img src="<?php echo e(asset('storage/products/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
            </a>
            <div class="single-product_content">
                <a href="<?php echo e(route('product.single', ['product' => $product->product_id])); ?>" class="single-product_content__title"><?php echo e($product->product_name); ?></a>
                <span class="single-product_content__price">
                    <?php if($product->price != $product->getDiscountedPrice()): ?>
                        <del><?php echo e(formatPriceVND($product->price)); ?></del>
                        <!-- Giá gốc -->
                    
                        <strong style="color: red;"
                        >$<?php echo e(number_format($product->getDiscountedPrice(),2)); ?></strong
                        >
                    <!-- Giá sau khi giảm -->
                    <?php else: ?> <?php echo e(formatPriceVND($product->price)); ?>

                    <!-- Giá không giảm -->
                    <?php endif; ?>
                </span>
            </div>
        </li>
        <!-- Single Product End -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<!-- Popular Product Widget End -->


                         <!-- Instagram Widget Start -->
                         <div class="sidebars_widget">
                            <h3 class="sidebars_widget__title">Instagram</h3>
                            <ul class="sidebars_widget__instagram " >
                            <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(strpos($media->name, 'Instagram') !== false): ?>
                                <li>
                                    <a class="instagram-thumb" href="<?php echo e($media->link); ?>">
                                        <img src="https://i.pinimg.com/564x/80/35/60/803560020f0f772bb12862e1eb2f50c0.jpg"  alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-thumb" href="<?php echo e($media->link); ?>">
                                        <img src="https://i.pinimg.com/564x/61/e1/38/61e13860559dac54522ad4c622c37705.jpg" alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-thumb" href="<?php echo e($media->link); ?>">
                                        <img src="https://i.pinimg.com/564x/d0/e5/10/d0e5108a1db4e95a60a13e520531bc13.jpg" alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="instagram-thumb" href="<?php echo e($media->link); ?>">
                                        <img src="https://i.pinimg.com/564x/8e/f4/b9/8ef4b9e35ed97c97fde4b0cfb45d5af3.jpg" alt="Image">
                                        <i class="lastudioicon lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <!-- Instagram Widget End -->

                        <!-- Banner Widget Start -->
                            <!-- Banner Widget Start -->
                            <div class="sidebars_widget">
                            <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if(strpos($media->name, 'Advertise') !== false): ?>
                                <a href="<?php echo e($media->link); ?>" class="sidebars_widget__banner">
                                <?php if($media->image): ?>
                                    <img src="<?php echo e(asset('storage/' . $media->image)); ?>" alt="banner-Image">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/images/banner/default-banner.jpg')); ?>" alt="default-banner">
                                <?php endif; ?>
                                    <div class="banner-content">
                                        <span class="banner-content_title">Check it now</span>
                                    </div>
                                </a>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <!-- Banner Widget End -->
                        <!-- Banner Widget End -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Section End -->

    <!-- Scroll Top Start -->
    <a href="#/" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->


    


    <div class="quickview-product-modal modal fade" id="exampleProductModal">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="container">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="lastudioicon lastudioicon-e-remove"></i>
                    </button>
                    <div class="modal-body" id='modal-single-product'>
                        <!-- Single Product Top Area Start -->
                        <div class="row">
                            <div class="col-lg-6 offset-lg-0 col-md-10 offset-md-1">

                                <!-- Product Details Image Start -->
                                <div class="product-details-img d-flex overflow-hidden flex-row">

                                    <!-- Single Product Image Start -->
                                    <div class="single-product-vertical-tab swiper-container order-2 product-item">

                                    <div class="swiper-wrapper" id="swiper-wrapper-dea913122338a79f" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-484px, 0px, 0px);">
                                            <a class="swiper-slide h-auto" href="#">
                                                <img class="w-100" src="#">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#">
                                                <img class="w-100" src="#">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#">
                                                <img class="w-100" src="#">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#">
                                                <img class="w-100" src="#">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#">
                                                <img class="w-100" src="#">
                                            </a>
                                            <a class="swiper-slide h-auto" href="#">
                                                <img class="w-100" src="#">
                                            </a>
                                            </div>

                                        <!-- Next Previous Button Start -->
                                        <div class="swiper-button-vertical-next swiper-button-next"><i class="lastudioicon-arrow-right"></i></div>
                                        <div class="swiper-button-vertical-prev swiper-button-prev"><i class="lastudioicon-arrow-left"></i></div>
                                        <!-- Next Previous Button End -->

                                    </div>
                                    <!-- Single Product Image End -->

                                    <!-- Single Product Thumb Start -->
                                    <div class="product-thumb-vertical overflow-hidden swiper-container order-1">

                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="#">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="#">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="#">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="#">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- Single Product Thumb End -->

                                </div>
                                <!-- Product Details Image End -->

                            </div>
                            <div class="col-lg-6">

                                <!-- Product Summery Start -->
                                <div class="product-summery position-relative">
                                <h3 class="product-head-name"></h3>
                                    <!-- Product Head Start -->
                                    <div class="product-head mb-3">
                                        <!-- Price Start -->
                                        <span class="product-head-price">
                                            <?php if($product->price != $product->getDiscountedPrice()): ?>
                                            <del ><?php echo e(formatPriceVND($product->price)); ?></del>
                                            <!-- Giá gốc -->
                                        
                                            <strong style="color: red;"
                                            >$<?php echo e(number_format($product->getDiscountedPrice(),2)); ?></strong
                                            >
                                            <!-- Giá sau khi giảm -->
                                            <?php else: ?> <span style="color: white;"><?php echo e(formatPriceVND($product->price)); ?></span>
                                            <!-- Giá không giảm -->
                                            <?php endif; ?>
                                        </span>
                                        <!-- Price End -->

                                    </div>
                                    <!-- Product Head End -->

                                    <!-- Description Start -->
                                    <p class="desc-content" style="margin-bottom: 0px !important;"><?php echo nl2br(e($product->describe)); ?></p>
                                    <!-- Description End -->

                                    <!-- Product Coler Variation Start -->
                                    <div class="product-color mb-2">

                                    </div>
                                    <!-- Product Coler Variation End -->

                                    <!-- Product Size Start -->
                                    <div class="product-size mb-5">
                                    </div>
                                    <!-- Product Size End -->

                                    <!-- Product Quantity, Cart Button, Wishlist and Compare Start -->
                                    <ul class="product-cta" style="margin-bottom: 15px !important;">
                                        <li>
                                            <!-- Cart Button Start -->
                                            <div class="cart-btn">
                                                <div class="add-to_cart product-item">
                                                    <a style="display: none;" href=""><img style="border: none !important; height: 287px !important;" width="350" height="350" src="" alt=""></a>
                                                    <a class="btn btn-dark btn-hover-primary add-to-cart"  data-product-id="<?php echo e($product->product_id); ?>">Add to cart</a>
                                                </div>
                                            </div>
                                            <!-- Cart Button End -->
                                        </li>
                                        <li>
                                            <!-- Action Button Start -->
                                            <!-- <div class="actions">
                                                <a href="compare.html" title="Compare" class="action compare"><i class="lastudioicon-heart-2"></i></a>
                                            </div> -->
                                            <!-- Action Button End -->
                                        </li>
                                    </ul>
                                    <!-- Product Quantity, Cart Button, Wishlist and Compare End -->

                                    <!-- Product Meta Start -->
                                    <ul class="product-meta">
                                        <li class="product-meta-wrapper inventory-meta">
                                            <span class="product-meta-name">Remaining quantity:</span>
                                            <span class="product-meta-detail"><?php echo e($product->inventory); ?></span>
                                        </li>
                                        <li class="product-meta-wrapper category-meta">
                                            <span class="product-meta-name">category:</span>
                                            <span class="product-meta-detail">
                                                
                                            </span>
                                        </li>
                                        <li class="product-meta-wrapper discount-meta">
                                            <span class="product-meta-name">Discount:</span>
                                            <span class="product-meta-detail">
                                                
                                            </span>
                                        </li>
                                    </ul>
                                    <!-- Product Meta End -->
                                </div>
                                <!-- Product Summery End -->

                            </div>
                        </div>
                        <!-- Single Product Top Area End -->
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <div class="quickview-product-modal modal fade" id="modalWishlist">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> Added To Wishlist Successfully!
                </div>
            </div>
        </div>
    </div>

    <div class="quickview-product-modal modal fade" id="modalCompare">
        <div class="modal-dialog modal-dialog-centered mw-100">
            <div class="custom-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="lastudioicon lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <i class="dlicon files_check"></i> Added To Compare Successfully!
                </div>
            </div>
        </div>
    </div><br><br>

    


    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>



<!-- Link tới CSS cho ionRangeSlider -->
<link href="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/css/ion.rangeSlider.min.css" rel="stylesheet" />

<!-- Script ionRangeSlider -->
<script src="https://cdn.jsdelivr.net/npm/ion-rangeslider@2.3.1/js/ion.rangeSlider.min.js"></script>

<!-- Script của bạn -->
<script>
    $(window).on("scroll", function (event) {
            var scroll = $(window).scrollTop();
            if (scroll <= 0) {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).removeClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "<?php echo e(asset('assets/images/logo-white.svg')); ?>"
                );
            } else {
                $(
                    ".header-sticky, .header-sticky-02, .header-sticky-03, header-sticky-4, .header-sticky-06"
                ).addClass("sticky");
                $(".header-sticky .header-logo img").attr(
                    "src",
                    "<?php echo e(asset('assets/images/logo.svg')); ?>"
                );
            }
        });

$(document).ready(function() {
    // Khởi tạo slider với khoảng giá từ 0 đến 100
    $("#price-range").ionRangeSlider({
        type: "double",
        min: 0,
        max: 50,
        from: 0,
        to: 50,
        prefix: "$",
        onChange: function (data) {
            // Cập nhật giá trị hiển thị khi thay đổi
            $("#price-range-value").text(data.from + " - " + data.to);
        }
    });

    // Bắt sự kiện khi nhấn nút Filter
    $('#filter-btn').click(function() {
        var range = $("#price-range").data("ionRangeSlider");
        var from = range.result.from;
        var to = range.result.to;

        // Redirect tới URL với các tham số lọc
        window.location.href = "?min_price=" + from + "&max_price=" + to;
    });
});

// Script cho QuickView


$(document).on('click', '.labtn-icon-quickview', function() {
    var productId = $(this).data('id');  // Lấy product_id từ thuộc tính data-id
    if (productId) {
        $.ajax({
            url: '/product/details/' + productId,  // Sử dụng productId trong URL
            type: 'GET',
            success: function(response) {
                // Cập nhật modal với thông tin sản phẩm
                $('#exampleProductModal .product-head-price').text('$' + response.price);
                $('#exampleProductModal .desc-content').text(response.description);
                $('#exampleProductModal .product-details-img img').attr('src', '/storage/products/' + response.image);
                $('#exampleProductModal').modal('show');
            },
            error: function(xhr, status, error) {
                console.log('Lỗi:', error);
            }
        });
    } else {
        console.log('Không tìm thấy product_id.');
    }
});
$('.quickview').on('click', function(e) {
            e.preventDefault();
            var productid = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id

            // Gọi AJAX để lấy dữ liệu sản phẩm
            $.ajax({
                url: "<?php echo e(route('product.details', ':id')); ?>".replace(':id', productid), // Thay :id bằng product ID
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        var product = response.product;  // Đối tượng product từ server
                        
                        // Đổ dữ liệu vào modal
                        $('#modal-single-product .product-head-price').text(product.price);  // Đổ giá sản phẩm
                        $('#modal-single-product .desc-content').html(product.describe);  // Đổ mô tả sản phẩm
                        
                        // Cập nhật hình ảnh sản phẩm
                        var imagesHtml = '';
                        var productImage = "<?php echo e(asset('storage/products/')); ?>/" + product.image; // Sử dụng asset() của Laravel để lấy đường dẫn tương đối

                        imagesHtml += '<div class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + productImage + '" alt="Product"></div>';
                        product.images.forEach(function(image) {
                            var imageUrl = "<?php echo e(asset('storage/products')); ?>/" + image.image; // Access the correct field inside image object
                            imagesHtml += '<div  class="swiper-slide"><img style="z-index: 1;"  class="w-100" src="' + imageUrl + '" alt="Product"></div>';
                        });

                        $('.single-product-vertical-tab .swiper-wrapper').html(imagesHtml);
                        $('.product-thumb-vertical .swiper-wrapper').html(imagesHtml);
                        
                        // Hiển thị modal
                        $('#exampleProductModal').modal('show');
                    } else {
                        alert(response.message); // Hiển thị thông báo lỗi nếu có
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error); // Xử lý lỗi
                }
            });
        });

        function updateonlineUser() {
                
            }

// Script cho QuickView
</script>


<script>
    $(document).on('click', '.labtn-icon-wishlist', function(e) {
    e.preventDefault();

    var productId = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id

    $.ajax({
        url: "<?php echo e(route('add.to.wishlist')); ?>",
        method: 'POST',
        data: {
            product_id: productId,
            _token: "<?php echo e(csrf_token()); ?>",  // Token bảo mật
        },
        success: function(response) {
            if (response.status === 'success') {
                var modalWishlist = new bootstrap.Modal(document.getElementById('modalWishlist'));
                modalWishlist.show();
            } else {
                var modalWishlist = new bootstrap.Modal(document.getElementById('modalWishlist'));
                modalWishlist.show();
            }
        },
        error: function(xhr) {
            console.error('Error:', xhr);
        }
    });
    });

    $('.quickview').on('click', function(e) {
            e.preventDefault();
            var productid = $(this).data('product-id');  // Lấy product ID từ thuộc tính data-product-id

            // Gọi AJAX để lấy dữ liệu sản phẩm
            $.ajax({
                url: "<?php echo e(route('product.details', ':id')); ?>".replace(':id', productid), // Thay :id bằng product ID
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // Hủy Swiper nếu đã tồn tại trước đó
                        
                        var product = response.product;  // Đối tượng product từ server
                        var catagories = response.getsimpCatagories;
                        // Đổ dữ liệu vào modal
                        $('#modal-single-product .product-head-price').text("$" + response.discounted_price);  // Đổ giá sản phẩm
                        
                        $('#modal-single-product .desc-content').html(product.describe.replace(/\n/g, '<br>'));
                        $('.product-meta .inventory-meta .product-meta-detail').text(product.inventory);
                        $('.product-meta .discount-meta .product-meta-detail').text(response.discounted_percent + " %");
                        $('.product-head-name').text(product.product_name);
                        var catalog ='';
                        if (Array.isArray(product.catalogs) && product.catalogs.length > 0) {
                            product.catalogs.forEach(function(getlist) {
                                catalog += "\r\n" + getlist.category_name;
                            });
                        }
                        $('.product-meta .category-meta .product-meta-detail').text(catalog);
                        // Cập nhật hình ảnh sản phẩm
                        
                        var slide = $('#swiper-wrapper-dea913122338a79f').find('.swiper-slide').eq(0);
                        var thumbslide = $('.product-thumb-vertical .swiper-wrapper').find('.swiper-slide').eq(0);
                        var hiddenimg = $('.cart-btn').find('.product-item');
                        var productImage = "<?php echo e(asset('storage/products/')); ?>/" + product.image; // Sử dụng asset() của Laravel để lấy đường dẫn tương đối
                        slide.find('img').attr('src', productImage);
                        hiddenimg.find('img').attr('src', productImage);
                        thumbslide.find('img').attr('src', productImage);
                        var count = 0;
                        var thumbcount = 0;
                        product.images.forEach(function(image) {
                            count++;
                            slide = $('#swiper-wrapper-dea913122338a79f').find('.swiper-slide').eq(count);
                            thumbslide = $('.product-thumb-vertical').find('.swiper-slide').eq(count);
                            var imageUrl = "<?php echo e(asset('storage/products')); ?>/" + image.image; // Access the correct field inside image object

                            slide.find('img').attr('src', imageUrl);
                            thumbslide.find('img').attr('src', imageUrl);
                            // imagesHtml += '<a class="swiper-slide h-auto" href="' + imageUrl + '"><img class="w-100" src="' + imageUrl + '" alt="<?php echo e($product->product_name); ?>"></a>'
                            // thumbImageHtml+= '<div class="swiper-slide"><img src="' + imageUrl + '" alt=""></div>';
                        });
                        var addCart = '<a class="btn btn-dark btn-hover-primary add-to-cart"  data-product-id="'+ product.product_id +'">Add to cart</a>';
                        // $('.single-product-vertical-tab .swiper-wrapper').html(imagesHtml);
                        // $('.product-thumb-vertical .swiper-wrapper').html(thumbImageHtml);
                        console.log("Product ID:" + product.product_id);
                        $('.add-to_cart .add-to-cart').replaceWith(addCart);
                        
                        // Hiển thị modal
                        $('#exampleProductModal').modal('show');
                    } else {
                        alert(response.message); // Hiển thị thông báo lỗi nếu có
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error); // Xử lý lỗi
                }
            });
            
        });
</script>

</html>
<?php /**PATH /var/www/html/resources/views/client/shop/shop_all.blade.php ENDPATH**/ ?>