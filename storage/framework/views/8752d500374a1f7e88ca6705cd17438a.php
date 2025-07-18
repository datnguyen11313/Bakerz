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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/images/Frame1.png')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&family=Handlee&family=Inter:wght@300;400;500;600;700&family=Comfortaa:wght@300;400;500;600;700&family=Montaga&family=Pacifico&family=Fredericka+the+Great&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Yellowtail&display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/lastudioicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/vendor/dliconoutline.css')); ?>">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/swiper-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ion.rangeSlider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/lightgallery-bundle.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <style type="text/css">
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
    </style>

</head>
<body >
    <!-- Contact form section Start -->
    <div class="section-padding-03 contact-section contact-section_bg" data-bg-image="<?php echo e(asset('assets/images/bg/contact-bg.jpg')); ?>">
        <div class="container custom-container-five">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="contact-section_content">
                        <h2 class="contact-section__title">Our Contact</h2>
                        <ul class="contact-section_list">
                            <li>
                                <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-phone-2"></i></span>
                                <span class="contact-section_list__text">Phone Number : <span>1800 1779</span></span>
                            </li>
                            <li>
                                <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                                <span class="contact-section_list__text">Address : <span>35/6 đường D5, Q. Bình Thạnh, TP.HCM</span></span>
                            </li>
                            <li>
                                <span class="contact-section_list__icon"><i class="lastudioicon lastudioicon-mail"></i></span>
                                <span class="contact-section_list__text">Email Adress : <span>aptech2@aprotrain.com</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-section_formbg" data-bg-image="<?php echo e(asset('assets/images/bg/contact-form-bg.jpg')); ?>">
                        <h2 class="contact-section_form__title">Get in touch.</h2>
                        <?php if(session('success')): ?>
                            <div id="tbn" class="alert alert-success" id="message-success">
                                <?php echo e(session('success')); ?>

                            </div>
                        <?php endif; ?>

                        <?php if($errors->any()): ?>
                            <div id="tbn" class="alert alert-danger" id="message-error">
                                <ul>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <!-- <form class="contact-section_form" id="contact-form" action="<?php echo e(route('contact.store')); ?>" method="POST"> -->
                        <form action="<?php echo e(route('contact.store')); ?>" method="POST"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6 form-p pt-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 form-p pt-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6 form-p pt-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="phone" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 form-p pt-3">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-12 form-p pt-3">
                                    <div class="form-group">
                                        <textarea class="form-control text-area" name="comment" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-p">
                                    <div class="form-group mb-0 d-flex justify-content-center">
                                        <button id="btnSendMessage" class="slider-content__btn btn btn-primary btn-hover-black" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <!-- Message Notification -->
                        <div class="form-message"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-section_shape">
            <img src="<?php echo e(asset('assets/images/shape/shape-10.png')); ?>" alt="Shape-Image">
        </div>
    </div>
    <!-- Contact form section End -->

    <!-- Scroll Top Start -->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="lastudioicon-up-arrow"></i>
    </a>
    <!-- Scroll Top End -->

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
                                <a class="logo-dark" href="<?php echo e(route('client.home')); ?>"><img src="<?php echo e(asset('assets/images/logo.svg')); ?>" alt="Logo"></a>
                                <a class="logo-white d-none" href="index.html"><img src="<?php echo e(asset('assets/images/logo-white.svg')); ?>" alt="Logo"></a>
                            </div>
                            <div class="footer-widget__social">
                              <?php $__currentLoopData = $socialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <a href="<?php echo e($socialMedia->link); ?>" target="_blank">
                                      <!-- Tùy chỉnh icon dựa trên name hoặc thêm icon chung cho tất cả -->
                                      <?php if(strpos($socialMedia->name, 'Facebook') !== false): ?>
                                          <i class="lastudioicon-b-facebook"></i>
                                      <?php elseif(strpos($socialMedia->name, 'Twitter') !== false): ?>
                                          <i class="lastudioicon-b-twitter"></i>
                                      <?php elseif(strpos($socialMedia->name, 'Pinterest') !== false): ?>
                                          <i class="lastudioicon-b-pinterest"></i>
                                      <?php elseif(strpos($socialMedia->name, 'Instagram') !== false): ?>
                                          <i class="lastudioicon-b-instagram"></i>
                                      <?php else: ?>
                                          <i class="lastudioicon-b-globe"></i> <!-- Biểu tượng mặc định -->
                                      <?php endif; ?>
                                  </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              <b style="padding: 3px 0px;">
                                  <i class="fas fa-users"></i>
                                  <span id="onlineCount" style="padding: 2px 7px 2px 7px; border-radius: 99px;"></span>
                              </b>
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
                                  <?php $__currentLoopData = $categories->take(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a class="sub-item-link" href="<?php echo e(route('shop.filterByCategory', ['category_id' => $category->category_id])); ?>"><span><?php echo e($category->category_name); ?></span></a></li>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Services</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('checkout')); ?>">Payment</a></li>
                                </ul>
                            </div>
                            <!-- Footer Widget End -->

                            <!-- Footer Widget Strat -->
                            <div class="footer-widget flex-grow-1">
                                <h4 class="footer-widget__title">Information</h4>

                                <ul class="footer-widget__link">
                                    <li><a href="<?php echo e(route('about')); ?>">About Us</a></li>
                                    <li><a href="<?php echo e(route('contact')); ?>">Contact Us</a></li>
                                    <li><a href="<?php echo e(route('faq')); ?>">FAQs</a></li>
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
              <div class="row">
                <div class="col-md-2" style="margin-top: 4px;">
                  <!-- <b style="font-size: x-large;" class="footer-copyright-text" id="onlineCount"><i style="font-size: x-large;" class="fas fa-users"></i> </b> -->
                </div>
                <div class="col-md-8">
                  <div class="footer-copyright-text text-center">
                      <p >&copy; 2024 <strong> Bakerz Bite </strong> Made with <i class="lastudioicon-heart-1"></i> by <a href="https://aptechvietnam.com.vn/">Bakerz</a></p>
                  </div>
                </div>
                <div class="col-md-2"></div>
              </div>
            </div>
        </div>
        <!-- Footer Copyright End -->

    </div>
    <!-- Footer End -->
      <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Vendors JS -->
    <script src="<?php echo e(asset('assets/js/vendor/modernizr-3.11.7.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/jquery-migrate-3.3.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Plugins JS -->
    <script src="<?php echo e(asset('assets/js/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/countdown.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ion.rangeSlider.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/lightgallery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/ajax.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.validate.min.js')); ?>"></script>

    <!-- Activation JS -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      
      
      // Đặt session scrollToTBN khi nhấn nút gửi form
      document.getElementById('btnSendMessage').addEventListener('click', function() {
          sessionStorage.setItem('scrollToTBN', 'true');
      });

      // Kiểm tra nếu session scrollToTBN tồn tại sau khi trang được load
      window.addEventListener('load', function() {
          if (sessionStorage.getItem('scrollToTBN') === 'true') {
              // Cuộn tới form ở footer sau khi trang load
              document.getElementById('tbn').scrollIntoView({
                  behavior: 'smooth',
                  block: 'end'  // Cuộn xuống phía cuối trang (footer)
              });
              // Xóa session sau khi đã cuộn để tránh cuộn lại khi load trang tiếp
              sessionStorage.removeItem('scrollToTBN');
          }
      });
    </script>
    <!-- Vendors JS -->
</body>

</html>
<?php /**PATH /var/www/html/resources/views/layouts/footer.blade.php ENDPATH**/ ?>