<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Lending - Yielda Capital</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('img/logos/yielda-icon.png') }}">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Roboto+Slab:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">

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
  @include('dark-header')
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <section class="wwd-section">
    <div class="container">
      <div class="wwd-title">
        <h2>Lending</h2>
      </div>
      <div class="wwd-content">
        <hr>
        <h4>We offer borrowers and owners in the middle market easy, 
            streamlined funding strategies that provide certainty.
            Our service provides direct benefits to both new and current customers. </h4>
      </div>
    </div>
  </section>

  <section class="wwd-subsection">
    <div class="container">
     <div class="row">
      <div class="col wwd-subsection-title">
          <img src="{{ asset('img/pages-images/lending.jpeg') }}" />
        </div>
        <div class="col">
          <div class="wwd-subsection-content">
              <p><b>Responsiveness and Creativity</b> We deliver clear, quick and thoughtful responses; we resolve issues quickly and make intelligent decisions. 
              Our diverse and experienced team of professionals develops creative solutions based on our internal assessment of risk and returns and avoids
               relying on traditional credit parameters or market conventions.</p>
            <hr>
              <p><b>Risk-Adjusted Return Investing</b> We measure and price risk across the entire capital structure, including standalone first lien, second lien, and junior capital investments, without depending on market conventions.
              In comparison to the current market, we may consider systems of incremental leverage or more flexible terms. </p>
            <hr>
              <p><b>Fully Underwritten Transactions</b> We have assurance.
              To minimise syndication risk for our borrowers, we try to completely underwrite our transactions.
              We don't rely on large syndications and can make commitments without relying on market flex. </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  @include('footer')
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Panel Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar u-unfold--css-animation u-unfold--hidden" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-sidebar--panel__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center border-bottom py-4 px-5">
            <h4 class="h5 mb-0">Account</h4>

            <button type="button" class="close u-sidebar__close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content py-5">
              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Menu label</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-5">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/finance-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Dashboard</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/touch-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Activity</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/team-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Team</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/email-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Mailbox</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/projects-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Projects</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->

              <!-- Title -->
              <div class="py-2 px-5">
                <h4 class="text-uppercase text-muted font-size-13 mb-0">Sub level</h4>
              </div>
              <!-- End Title -->

              <!-- List -->
              <ul class="list-unstyled font-size-14 mb-0">
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/calendar-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Calendar</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/cog-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Tools</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="media align-items-center u-sidebar--panel__link py-2 px-5" href="#">
                    <img class="max-width-4 mr-3" src="{{ asset('svg/components/archive-dark-icon.svg') }}" alt="Image Description">
                    <div class="media-body">
                      <span>Archive</span>
                    </div>
                  </a>
                </li>
              </ul>
              <!-- End List -->
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer class="u-sidebar__footer u-sidebar__footer--panel py-4 px-5">
          <!-- List -->
          <ul class="list-inline font-size-14 mb-0">
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pr-2" href="{{ url('/company/privacy-policy') }}">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link px-2" href="{{ url('/company/terms-conditions') }}">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar--panel__link pl-2" href="platethm/html/pages/help.html">
                <i class="fa fa-info-circle"></i>
              </a>
            </li>
          </ul>
          <!-- End List -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Panel Sidebar Navigation -->

  <!-- Signup Modal Window -->
  <div id="signupModal" class="js-signup-modal u-modal-window" style="width: 500px;">
    <!-- Modal Close Button -->
    <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button"
      onclick="Custombox.modal.close();">
      <span class="fas fa-times"></span>
    </button>
    <!-- End Modal Close Button -->

    <!-- Content -->
    <div class="p-5">
      <form class="js-validate">
        <!-- Signin -->
        <div id="signin" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign in</h2>
            <p>Signin to manage your account.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required placeholder="Email"
                aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error"
                data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" required placeholder="Password"
                aria-label="Password" data-msg="Your password is invalid. Please try again."
                data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="row mb-3">
            <div class="col-6">
              <!-- Checkbox -->
              <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                <label class="custom-control-label" for="rememberMeCheckbox">
                  Remember Me
                </label>
              </div>
              <!-- End Checkbox -->
            </div>

            <div class="col-6 text-right">
              <a class="js-animation-link float-right" href="javascript:;" data-target="#forgotPassword"
                data-link-group="idForm" data-animation-in="fadeIn">Forgot Password?</a>
            </div>
          </div>

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signin</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Do not have an account?
              <a class="js-animation-link" href="javascript:;" data-target="#signup" data-link-group="idForm"
                data-animation-in="fadeIn">Signup
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signin Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook text-nowrap">
                <span class="fab fa-facebook-f mr-2"></span>
                Signin with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <span class="fab fa-twitter mr-2"></span>
                Signin with Twitter
              </button>
            </div>
          </div>
          <!-- End Signin Social Buttons -->
        </div>
        <!-- End Signin -->

        <!-- Signup -->
        <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Please sign up</h2>
            <p>Fill out the form to get started.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required placeholder="Email"
                aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error"
                data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-lock form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="password" id="password" required
                placeholder="Password" aria-label="Password" data-msg="Your password is invalid. Please try again."
                data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-key form__text-inner"></span>
                </span>
              </div>
              <input type="password" class="form-control form__input" name="confirmPassword" required
                placeholder="Confirm Password" aria-label="Confirm Password"
                data-msg="Password does not match the confirm password." data-error-class="u-has-error"
                data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Signup</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;" data-target="#signin" data-link-group="idForm"
                data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>

          <!-- Divider -->
          <div class="text-center u-divider-wrapper my-3">
            <span class="u-divider u-divider--xs u-divider--text">OR</span>
          </div>
          <!-- End Divider -->

          <!-- Signup Social Buttons -->
          <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-facebook text-nowrap">
                <span class="fab fa-facebook-f mr-2"></span>
                Signup with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-twitter">
                <span class="fab fa-twitter mr-2"></span>
                Signup with Twitter
              </button>
            </div>
          </div>
          <!-- End Signup Social Buttons -->
        </div>
        <!-- End Signup -->

        <!-- Forgot Password -->
        <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
          <!-- Title -->
          <header class="text-center mb-5">
            <h2 class="h4 mb-0">Recover account</h2>
            <p>Enter your email address and an email with instructions will be sent to you.</p>
          </header>
          <!-- End Title -->

          <!-- Input -->
          <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <span class="fa fa-user form__text-inner"></span>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email" required placeholder="Email"
                aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error"
                data-success-class="u-has-success">
            </div>
          </div>
          <!-- End Input -->

          <div class="mb-3">
            <button type="submit" class="btn btn-block btn-primary">Recover Account</button>
          </div>

          <div class="text-center mb-3">
            <p class="text-muted">
              Have an account?
              <a class="js-animation-link" href="javascript:;" data-target="#signin" data-link-group="idForm"
                data-animation-in="fadeIn">Signin
              </a>
            </p>
          </div>
        </div>
        <!-- End Forgot Password -->
      </form>
    </div>
    <!-- End Content -->
  </div>
  <!-- End Signup Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="javascript:;" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
    data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="fa fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('vendor/popper.js/dist/umd/popper.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>

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
</body>

</html>