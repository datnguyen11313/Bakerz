<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bakerz Bite</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="./assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">

</head>

<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Breadcrumb Section Start -->
<div class="breadcrumb breadcrumb-about" data-bg-image="assets/images/bg/breadcrumb-bg-3.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content">
                    <h1 class="breadcrumb_title">About Us</h1>
                    <p class="breadcrumb_text">At Bakerz Bite, we bring together the finest ingredients to craft delightful cakes and aromatic coffee, offering you moments of indulgence and connection with every bite and sip</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- About Section Start -->
<div class="section-padding-03 overflow-hidden">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="section-title-10 justify-content-start text-start align-items-start">
                    <span class="section-title-10__subtitle">We Are Bakerfresh</span>
                    <h1 class="section-title-10__title">we love cake</h1>
                    <p class="section-title-10__text">Since its launch, “Bakerz Bite” has developed into a reputable bakery &amp; café,
                    specializing in baked goods, passionately made from the finest ingredients.
                    Bakerz Bite offers a wide range of baked goods made fresh in-store every day. The
                    bakery chain offers more than 300 different kinds of baked goods, including artisan
                    pastries, gourmet cakes and desserts, and handcrafted beverages.</p>
                    <p class="section-title-10__text">The brand takes pride in sourcing and using carefully selected ingredients and promises
                    to bring freshness and quality to its customers. Bakerz Bite continues to expand and
                    embrace innovation in all markets.
                    We believe and are dedicated in delivering premium quality products. So we only use real
                    butter, cream and unbleached flour. We treat our Customers as our family and will not
                    use any ingredient which we will not want to feed ours.</p>
                    <img src="assets/images/singnecher-2.png" alt="Signature-Image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="aboutus-image">
                    <img src="assets/images/about/about.jpg" alt="About-Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Call to Action Section Strat -->
<div class="call-to-action callto-action-04" data-bg-image="assets/images/bg/call-to-action-bg-2.jpg">
    <div class="container">

        <div class="row align-items-center gy-8 gx-0">
            <div class="col-12">

                <!-- Call to Action box Start -->
                <div class="call-to-action-more text-center position-relative popup-video" id="popup-video">

                    <a class="call-to-action-more__arrow text-white lh-1 video-popup" href="https://www.youtube.com/watch?v=ad5_MXzibSM">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="none" viewBox="0 0 20 24">
                            <path fill="currentColor" d="M.417.5v23L19.583 12 .417.5z"></path>
                        </svg>
                    </a>

                    <div class="position-absolute top-50 start-50 translate-middle">
                        <img class="call-to-action-more__svg" src="assets/images/svg-text.svg" alt="Svg Text">
                    </div>

                </div>
                <!-- Call to Action box End -->

            </div>
        </div>

    </div>
</div>
<!-- Call to Action Section End -->

<!-- About Section Start -->
<div class="section-padding-03 overflow-hidden">
    <div class="container">
        <div class="row flex-md-row-reverse align-items-center">
            <div class="col-md-5">
                <div class="section-title-10 justify-content-start text-start align-items-start">
                    <span class="section-title-10__subtitle">Bakerfresh Time</span>
                    <h1 class="section-title-10__title">we are open</h1>
                    <p class="section-title-10__text">We’re delighted to have you here—where every cake and cup of coffee is crafted with love, just for you. Enjoy your time with us!</p>
                </div>
                <ul class="about-schedule">
                    <li>
                        <span class="about-schedule_name">Mon - Fri</span>
                        <span class="about-schedule_time">9:00 am - 9:00 pm</span>
                    </li>
                    <li>
                        <span class="about-schedule_name">Sat - Sun</span>
                        <span class="about-schedule_time">10:00 am - 10:00 pm</span>
                    </li>
                </ul>
            </div>
            <div class="col-md-7">
                <div class="aboutus-image-two">
                    <img src="assets/images/about/about-2.jpg" alt="About-Image">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->

<!-- Team Section Start -->
<div class="team section-padding-03">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mb-n25">
            <?php $__currentLoopData = $chefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chef): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!-- Single Team start -->
            <div class="col mb-25">
                <div class="team-3-wrapper">
                <div class="team-3-thumb">
                    <img src="<?php echo e(asset('storage/' . $chef->image)); ?>" alt="<?php echo e($chef->name); ?>">
                </div>

                    <div class="team-3-content">
                        <div class="team-3-head">
                            <span class="team-3-name"><?php echo e($chef->name); ?></span>
                            <span class="team-3-designation"><?php echo e($chef->position); ?></span>
                        </div>
                        <p class="team-3-text"><?php echo nl2br(e($chef->description)); ?></p>

                    </div>
                </div>
            </div>
            <!-- Single Team end -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<!-- Team Section End -->

<!-- Testimonial Section Strat -->
<div class="testimonial-section section-padding-03" data-bg-color="#F9F9F9">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Title Strat -->
                <div class="section-title-10 text-center mb-8">
                    <h2 class="section-title-10__title mb-0 mb-lg-5 mb-md-3">Customers Review</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
    </div>
    <!-- Testimonial Active Strat -->
    <div class="testimonial-active-two my-0 mx-auto">
        <div class="swiper">
            <div class="swiper-wrapper">
            <?php if(isset($fiveStarReviews) && $fiveStarReviews->count() > 0): ?>
             <?php $__currentLoopData = $fiveStarReviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="swiper-slide">
                            <div class="testimonial-two text-center">
                                <div class="testimonial-two_quote">
                                <svg width="30" height="30" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.203 16c2.034 0 3.594-1.7 3.594-3.752 0-2.124-1.356-3.61-3.255-3.61-.339 0-.813.07-.881.07C3.864 6.442 5.831 3.611 8 2.124L5.492 0C2.372 2.336 0 6.3 0 10.62 0 14.087 1.966 16 4.203 16zm11 0c2.034 0 3.661-1.7 3.661-3.752 0-2.124-1.423-3.61-3.322-3.61-.339 0-.813.07-.881.07.271-2.266 2.17-5.097 4.339-6.584L16.492 0C13.372 2.336 11 6.3 11 10.62c0 3.468 1.966 5.38 4.203 5.38z" fill="currentColor" fill-rule="nonzero"></path>
                                </svg>
                                </div>
                                <p class="testimonial-two_text"><?php echo nl2br(e($review->comment)); ?></p>
                                <div class="testimonial-two_image">
                                    <img width="56" height="56" src="<?php echo e(asset('storage/avatars/' . $review->avatar)); ?>" alt="Author"> <!-- Thay đổi đường dẫn avatar -->
                                </div>
                                <span class="testimonial-two_name"><?php echo e($review->name); ?></span>
                                <span class="testimonial-two_position"><?php echo e($review->address); ?></span> <!-- Nếu có thêm địa chỉ -->
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <p>Không có đánh giá 5 sao nào.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!-- Testimonial Active End -->
</div>
<!-- Testimonial Section End -->


<!-- Brand Section Strat -->
<div class="brand-section">
    <div class="container">

        <!-- Brand Action Strat -->
        <div class="brand-active">
            <div class="swiper">
                <div class="swiper-wrapper align-items-center">

                    <!-- Brand Item Strat -->
                    <div class="swiper-slide brand-item">
                        <img src="assets/images/brand/partner-1.png" alt="Brand">
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Strat -->
                    <div class="swiper-slide brand-item">
                        <img src="assets/images/brand/partner-2.png" alt="Brand">
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Strat -->
                    <div class="swiper-slide brand-item">
                        <img src="assets/images/brand/partner-3.png" alt="Brand">
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Strat -->
                    <div class="swiper-slide brand-item">
                        <img src="assets/images/brand/partner-4.png" alt="Brand">
                    </div>
                    <!-- Brand Item End -->

                    <!-- Brand Item Strat -->
                    <div class="swiper-slide brand-item">
                        <img src="assets/images/brand/partner-5.png" alt="Brand">
                    </div>
                    <!-- Brand Item End -->

                </div>
            </div>
        </div>
        <!-- Brand Action End -->

    </div>
</div><br><br><br>
<!-- Brand Section End -->

<!-- Scroll Top Start -->
<a href="#/" class="scroll-top" id="scroll-top">
    <i class="lastudioicon-up-arrow"></i>
</a>
<!-- Scroll Top End -->

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="./assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="./assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="./assets/js/main.js"></script>
</body>
</html><?php /**PATH /var/www/html/resources/views/client/pages/about.blade.php ENDPATH**/ ?>