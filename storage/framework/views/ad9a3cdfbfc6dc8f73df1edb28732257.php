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
        /* CSS nội bộ */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Đặt container thành flex và căn giữa */
        .container {
            flex-grow: 1;
            display: flex;
            justify-content: center; /* Căn giữa theo chiều ngang */
            align-items: flex-end;   /* Đặt ở dưới cùng */
        }

        /* Đảm bảo thẻ a không có định dạng mặc định */
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<?php if($comingSoon->count() > 0): ?>
    <?php $__currentLoopData = $comingSoon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Coming Soon Section Start -->
    <div class="coming">
        <div class="coming-col order-2 order-md-1">
            <div class="coming-content">
                <h1 class="coming-title">Coming soon</h1>
                <p class="coming-text"><?php echo e($soon->name); ?></p> <!-- Sử dụng $soon thay vì $comingSoon -->
                <div class="coming-wrapper" data-countdown="<?php echo e($soon->release_date); ?>"></div> <!-- Sử dụng $soon thay vì $comingSoon -->


                <div class="coming-social">
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
                </div>
            </div>
            <a href="<?php echo e(route('client.home')); ?>" style="margin-top: auto;" class="container">
                <button class="coming-form__btn btn btn-primary btn-hover-secondary">Back to homepage</button>
            </a>
        </div>

        <div class="coming-col coming-bg order-1 order-md-2" data-bg-image="<?php echo e(asset('storage/' . $soon->image)); ?>"> <!-- Sử dụng $soon thay vì $comingSoon -->

            <a href="<?php echo e(route('client.home')); ?>">
                <svg class="coming-bg__logo" xmlns="http://www.w3.org/2000/svg" width="63" height="67" fill="none" viewBox="0 0 63 67">
                    <path fill="#fff" d="M58.272 14.208c0 3.627-1.28 6.763-3.84 9.408-2.56 2.603-6.293 4.48-11.2 5.632 2.645.725 4.65 1.92 6.016 3.584 1.365 1.621 2.048 3.499 2.048 5.632 0 3.37-1.067 6.293-3.2 8.768-2.09 2.475-5.163 4.395-9.216 5.76-4.053 1.323-8.939 1.984-14.656 1.984-2.133 0-3.84-.064-5.12-.192-.043 1.195-.555 2.09-1.536 2.688-.981.597-2.24.896-3.776.896-1.536 0-2.603-.341-3.2-1.024-.555-.683-.79-1.685-.704-3.008.384-5.973 1.13-12.224 2.24-18.752a184.598 184.598 0 0 1 4.224-19.008c.299-1.067.896-1.813 1.792-2.24.896-.427 2.07-.64 3.52-.64 2.603 0 3.904.725 3.904 2.176 0 .597-.128 1.28-.384 2.048-1.11 3.328-2.219 7.85-3.328 13.568-1.11 5.675-1.899 11.093-2.368 16.256 2.048.17 3.712.256 4.992.256 5.973 0 10.347-.853 13.12-2.56 2.816-1.75 4.224-3.968 4.224-6.656 0-1.877-.81-3.456-2.432-4.736-1.579-1.28-4.245-1.984-8-2.112-.853-.043-1.45-.256-1.792-.64-.341-.384-.512-1.003-.512-1.856 0-1.237.256-2.24.768-3.008.512-.768 1.45-1.173 2.816-1.216 3.03-.085 5.76-.533 8.192-1.344 2.475-.81 4.416-1.941 5.824-3.392 1.408-1.493 2.112-3.221 2.112-5.184 0-2.475-1.216-4.416-3.648-5.824-2.432-1.45-6.165-2.176-11.2-2.176-4.565 0-8.981.597-13.248 1.792-4.267 1.152-7.893 2.624-10.88 4.416-1.365.81-2.517 1.216-3.456 1.216-.768 0-1.365-.256-1.792-.768C4.192 13.397 4 12.715 4 11.904c0-1.067.213-1.984.64-2.752.47-.768 1.557-1.643 3.264-2.624 3.584-2.048 7.787-3.648 12.608-4.8A63.393 63.393 0 0 1 35.296 0c7.723 0 13.483 1.301 17.28 3.904 3.797 2.603 5.696 6.037 5.696 10.304z" />
                </svg>
            </a>
        </div>

    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>



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
<?php /**PATH /var/www/html/resources/views/client/pages/coming-soon.blade.php ENDPATH**/ ?>