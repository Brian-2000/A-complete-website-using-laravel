<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Our Clients - Deft Technologies Limited</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/logos/deft-icon.png') }}">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto+Slab:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/hs-megamenu/src/hs.megamenu.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/custombox/dist/custombox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/animate.css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('vendor/fancybox/jquery.fancybox.css') }}">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
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
  @include('header')
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <section class="section-1-section">
    <div class="container">
      <div class="section-1-title-section">
        <h4>Our Clients our pride</h4>
        <hr>
        <h6>Our Clients remains the focal point of our Technological Solutions. They are our pride and we value them the most.</h6>
        <p>There's no denying the fact that customer service is important to any given business. The quality of that service 
          will either enhance or degrade customer loyalty to your brand and your business. With the economy in recession, customers have
           more alternatives than ever. The business that proves to be responsive to customer questions,
            complaints, or other needs can gain a clear competitive advantage. That's why it's so important
             to understand how new technologies can help you anticipate customer needs, tailor business 
             processes to best serve customers, and ultimately improve the efficiency of your business – the
              latter of which can keep costs down</p>
      </div>
    </div>
  </section>

  <section class="section-1-subsection-1">
    <div class="container">
      <div class="row">
        <div class="col">
          <img src="{{ asset('img/pages-images/corporate-finance.jpeg') }}"/>
        </div>
        <div class="col">
          <div class="section-1-subsection-1-content">
            <h6>There are a few major areas in which technology now is able to help provide 
              key advantages to businesses in engendering customer loyalty by improving customer service.</h6>

              <ul>
                <li>Websites. Providing areas on your website where customers can answer their own questions or seek answers from others</li>
                <li>E-mail. Using e-mail as a way to improve customer service and more quickly respond to certain needs or help requests</li>
                <li>Communications. Unifying communications so that you know that the customer who left a voice mail also sent an e-mail with the same request a few days ago.</li>
                <li>Software. Better managing customer relationships with more sophisticated data-gathering tools, such as customer relationship management software.</li>
              </ul>
              <div class="people-subsection-2">
                  <h4><a href="{{ url('/our-firm/leadership') }}">Leadership ></a></h4>
                </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  @include('footer')
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
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/wow.min.js') }}"></script>

  <!-- JS Implementing Plugins -->
  <script src="{{ asset('vendor/hs-megamenu/src/hs.megamenu.js') }}"></script>
  <script src="{{ asset('vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>
  <script src="{{ asset('vendor/custombox/dist/custombox.min.js') }}"></script>
  <script src="{{ asset('vendor/custombox/dist/custombox.legacy.min.js') }}"></script>
  <script src="{{ asset('vendor/slick-carousel/slick/slick.js') }}"></script>
  <script src="{{ asset('vendor/fancybox/jquery.fancybox.min.js') }}"></script>

  <!-- JS Space -->
  <script src="{{ asset('js/hs.core.js') }}"></script>
  <script src="{{ asset('js/components/hs.header.js') }}"></script>
  <script src="{{ asset('js/components/hs.unfold.js') }}"></script>
  <script src="{{ asset('js/components/hs.validation.js') }}"></script>
  <script src="{{ asset('js/helpers/hs.focus-state.js') }}"></script>
  <script src="{{ asset('js/components/hs.malihu-scrollbar.js') }}"></script>
  <script src="{{ asset('js/components/hs.modal-window.js') }}"></script>
  <script src="{{ asset('js/components/hs.show-animation.js') }}"></script>
  <script src="{{ asset('js/components/hs.slick-carousel.js') }}"></script>
  <script src="{{ asset('js/components/hs.fancybox.js') }}"></script>
  <script src="{{ asset('js/components/hs.go-to.js') }}"></script>

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
   <script>
        new WOW().init();
    </script>
</body>
</html>