<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Deft Technologies Limited</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('img/logos/deft-icon.png')); ?>">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto+Slab:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/hs-megamenu/src/hs.megamenu.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/custombox/dist/custombox.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/animate.css/animate.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/slick-carousel/slick/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/fancybox/jquery.fancybox.css')); ?>">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>">
</head>

<body>
  <!-- Skippy -->
  <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
    <div class="container">
      <span class="u-skiplink-text">Skip to main content</span>
    </div>
  </a>
  <!-- End Skippy -->

  <!-- ========== HEADER ========== -->
  <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <section class="about-section">
      <div class="container">
          <div class="about-section-title">
              <h4 style="color: darkblue;">Get to know a lot in the TECH world here</h4>
              <p style="color: forestgreen;">At Deft Technologies Limited, we make sure that you are up to date of what is happenning in the world of Technology.</p>
          </div>
      </div>
  </section>

  <section class="about-subsection">
      <div class="container">
          <hr style="margin: 0 auto 2rem">
          <div class="row">
              <div class="col">
                  <div class="about-boxes">
                      <div class="about-title">
                          <h3 style="background-color: black; color: skyblue;">Machine Learning and Artificial Intelligence</h3>
                          
                      </div>
                      <div class="about-content">
                          <p style="background-color:lightgreen; color: slateblue;">The world is becoming smart, everything is becoming updated
                        We are here to make sure that nothing passes you and making sure that you are upto date</p>
                        <p style="background-color:lightgreen; color: slateblue;">Power up with the latest tech news, 
                        including personal technology, electronics, gaming. Breaking news and analysis on computing,
                         the web, blogs, games, gadgets, social media. See Gallery. View Posts. Highlights: Photo Gallery 
                         Available, Non-For-Profit Organization
                        
                         <h2>
                           Here is the list of Top 9 trending new technologies
                         </h2>
                         <ul>  
                        <li>Artificial Intelligence (AI) and Machine Learning.</li>
                        <li>Robotic Process Automation (RPA)</li>
                        <li>Edge Computing.</li>
                        <li>Quantum Computing.</li>
                        <li>Virtual Reality and Augmented Reality.</li>
                        <li>Blockchain.</li>
                        <li>Internet of Things (IoT)</li>
                        <li>5G.</li>
                      </ul>
              
                       </p>
                      </div>
                  </div>
              </div>
              <div class="col">
              <div class="about-boxes">
                      <div class="about-title">
                          <h3 style="background-color: black; color: skyblue; ">Digitization.</h3>
                          
                      </div>
                      <div class="about-content">
                      <p>Developments in digital technologies, from advancement in data, robotics, 
                        3D printing and artificial intelligence, is at the core of Sandvik.
                         Read about we use technology and digitalization to secure innovation for the 21st century.</p>
                         <img src="<?php echo e(asset('img/pages-images/dormerp.jpg')); ?>" />

                         <p>Digital technologies such as artificial intelligence, 
                           big data and machine learning are increasingly important to the manufacturing industry. 
                           Sandvik has partnered with IBM on several digital key projects</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- ========== END FOOTER ========== -->

  
  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="javascript:;"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="<?php echo e(asset('vendor/jquery/dist/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery-migrate/dist/jquery-migrate.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/popper.js/dist/umd/popper.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/bootstrap/bootstrap.min.js')); ?>"></script>

  <!-- JS Implementing Plugins -->
  <script src="<?php echo e(asset('vendor/hs-megamenu/src/hs.megamenu.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery-validation/dist/jquery.validate.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/custombox/dist/custombox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/custombox/dist/custombox.legacy.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/slick-carousel/slick/slick.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/fancybox/jquery.fancybox.min.js')); ?>"></script>

  <!-- JS Space -->
  <script src="<?php echo e(asset('js/hs.core.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.header.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.unfold.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.validation.js')); ?>"></script>
  <script src="<?php echo e(asset('js/helpers/hs.focus-state.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.malihu-scrollbar.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.modal-window.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.show-animation.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.slick-carousel.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.fancybox.js')); ?>"></script>
  <script src="<?php echo e(asset('js/components/hs.go-to.js')); ?>"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
  <script>
    $(document).ready(function() {

    $('.counter').each(function () {
    $(this).prop('Counter',0).animate({
    Counter: $(this).text()
    }, {
    duration: 4000,
    easing: 'swing',
    step: function (now) {
    $(this).text(Math.ceil(now));
    }
    });
    });

    });
  </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\deftTechnologies\resources\views//insights/brief.blade.php ENDPATH**/ ?>