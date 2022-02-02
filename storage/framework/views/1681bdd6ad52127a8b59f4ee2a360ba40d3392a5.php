<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Deft Technologies limited</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('img/logos/deft-icon.png')); ?>">

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/all.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/hs-megamenu/src/hs.megamenu.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/custombox/dist/custombox.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/animate.css/animate.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/slick-carousel/slick/slick.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('vendor/fancybox/jquery.fancybox.css')); ?>">

  <!-- CSS Space Template -->
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
  <main id="content" role="main">
    <!-- Hero Section -->
    <div class="gradient-overlay-half-dark-v3 bg-img-hero" style="background-image: url('<?php echo e(asset('img/pages-images/449.jpg')); ?>');">
      <!-- Main Content -->
      <div class="d-lg-flex align-items-lg-center height-85vh--lg">
        <div class="container space-2 space-0--lg mt-lg-8">
          <div class="row justify-content-lg-between align-items-lg-center">
            <div class="col-lg-5 mb-7 mb-lg-0">
              <!-- Title -->
              <span class="d-block text-white font-size-40--md-down text-lowercase mb-2">Deft Technologies Limited</span>
              <h3 class="display-4 font-size-38--md-down text-white mb-0">It ha become appallingly obvious that our Technology has become our Humanity.</h3>
              <!-- End Title -->
            </div>

            <div class="col-lg-5">
              <!-- Signup Form -->
              <div class="bg-transparent shadow-sm rounded p-6">
                <form class="js-validate">
                  <div class="mb-4">
                    <h3 class="h4" style="color: forestgreen;"><em> </em></h3>
                  </div>

                
                  <div class="js-form-message mb-3">
                  
                  </div>
                  

                  <button type="submit" class="btn btn-block btn-default"><a href="<?php echo e(url('/started_form/get_started')); ?>"></a></button>
                </form>
              </div>
              <!-- End Signup Form -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Main Content -->
    </div>      
    <!-- End Hero Section -->

    <hr class="my-0">

    <!-- Features Section -->
    <div class="container space-2 space-3--lg">
      <div class="row justify-content-lg-between" style="background-color: lightblue;">
        <div class="col-md-4 col-lg-4 mb-7 mb-md-0">
          <div class="tab-vertical tab-vertical-md py-5 mr-lg-7">
            <div class="pr-md-7 mb-5">
              <h3 class="h4" style="color: forestgreen;">How Can Deft Technologies Limited Revolutionize the world through Technology?</h3>
            </div>

            <!-- Tab Nav -->
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active tab-vertical__nav-link" id="v-pills-features-tab" data-toggle="pill" href="#v-pills-features" role="tab" aria-controls="v-pills-features" aria-selected="true">
                i. Business Solutions
              </a>
              <a class="nav-link tab-vertical__nav-link" id="v-pills-key-benefits-tab" data-toggle="pill" href="#v-pills-key-benefits" role="tab" aria-controls="v-pills-key-benefits" aria-selected="false">
                ii. Organized Work
              </a>
              <a class="nav-link tab-vertical__nav-link" id="v-pills-company-tab" data-toggle="pill" href="#v-pills-company" role="tab" aria-controls="v-pills-company" aria-selected="false">
                iii. Colaborate
              </a>

              <a class="nav-link tab-vertical__nav-link" id="v-pills-key-remote-tab" data-toggle="pill" href="#v-pills-key-remote" role="tab" aria-controls="v-pills-key-remote" aria-selected="false">
                iv. Work Remotely
              </a>


              <a class="nav-link tab-vertical__nav-link" id="v-pills-key-security-tab" data-toggle="pill" href="#v-pills-key-security" role="tab" aria-controls="v-pills-key-security" aria-selected="false">
                v. Security
              </a>

            </div>
            <!-- End Tab Nav -->
          </div>
        </div>

        <div class="col-md-8" style="background-color: lightblue;">
          <!-- Tab Content -->
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-features" role="tabpanel" aria-labelledby="v-pills-features-tab">
              <div class="row">
                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4" style="color: white;">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/desk-with-mac-primary-icon.svg')); ?>" alt="Image Description">

                    <hr>

                    <h4 style="color: darkgreen;">Building Adaptive and Responsive Software</h4>
                    <p>We build Responsive websites that can be viewed uniquely and comfortably on any device of any screen size
                      The business solutions that we provide can greatly amplify a company's growth rate.</p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/careers-blue-icon.svg')); ?>" alt="Image Description">
                    <hr>
                    <h4 style="color: darkgreen;">Cloud Based Services</h4>
                    <p>Cloud services are very cost effective as compared to employing an IT department or investing in IT infrastructure.
                      Most of A company's services can be accessed remotely from anywhere without the need of a physical server
                      Employees and departments within a company can communicate with each other effectively boosting productivity 
                    </p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-0">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/consult-cyan-icon.svg')); ?>" alt="Image Description">

                    <hr>

                    <h4 style="color: darkgreen;">Intelligent Technologies</h4>

                    <p>Automate Business events and processes, make them more smart and satisfy your customer needs.</p>
                     <ul>
                       <li>Scale Up your business platform</li>
                       <li>Drive end-to-end Innovative services</li>
                       <li>Access Artificial Intelligence, Business Intelligence and Data driven cloud-based Applications.</li>
                     </ul>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/data-analysis-red-icon.svg')); ?>" alt="Image Description">
                    <hr>

                    <h4 style="color: darkgreen;">Data Management Solutions</h4>

                    <p>Deft Technologies Data management provides you with the neccessary tools needed to make available, gather and analyze the data throughout your business.
                      we enable complete control of your data landscape with an end-to-end view of all data through a single gateway.

                      <ul>
                        <li>Access data Remotely</li>
                        <li>Minimize  Repetition of data</li>
                        <li>Take control of your most important data</li>
                        <li>Understand your data</li>
                      </ul>
                    </p>
                  </div>
                  <!-- End Icon Block -->
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-key-benefits" role="tabpanel" aria-labelledby="v-pills-key-benefits-tab">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-7 mb-lg-0">
                  <img class="img-fluid" src="<?php echo e(asset('img/pages-images/deft2.jpg')); ?>" alt="Image Description">
                </div>

                <div class="col-lg-7">
                  <!-- Description -->
                  <div class="pl-lg-4">
                    <span class="u-label u-label--sm u-label--purple mb-3">Organization</span>
                    <h2 class="h3 mb-3" style="color: darkgreen;">Keep it fully organized</h2>
                    <hr>
                    <p>The Software we build helps in building , delegating, reviewing and assessing individual and organizational tasks.
                       They enable employers and managers to easily supervise workplace activities that help in keeping everything on track 
                       <br>
                       Our Software also helps People be responsible, accountable, efficient and keep time when delivering the tasks assigned to them.
                       <br>
                       Project Management Software helps to improve the quality and quantity of the work done over a given span of time.
                       Furthermore, helps in risk assessment by providing a red flag everytime a task gets off track that might lead to the failure of a project
                       Saves a lot on the workspace  since paperwork in minimized.
                    </p>
                  </div>
                  <!-- End Description -->
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-key-remote" role="tabpanel" aria-labelledby="v-pills-key-remote-tab">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-7 mb-lg-0">
                  <img class="img-fluid" src="<?php echo e(asset('img/pages-images/remote-work.jpeg')); ?>" alt="Image Description">
                </div>

                <div class="col-lg-7">
                  <!-- Description -->
                  <div class="pl-lg-4">
                    <span class="u-label u-label--sm u-label--purple mb-3">Work</span>
                    <h2 class="h3 mb-3" style="color: darkgreen;">Work From Anywhere</h2>
                    <hr>
                    <p>With the Emergence of Covid-19, Lots of people are highly advised to work from home so as to prevent the rapid spread 
                      of the Corona Virus. The technology that we provide gives room to all these.
                       <br>
                       
                       Mobile and cloud Technology that we provide allows instant and remote access with enabled Internet-Based service models.
                       <br>
                       Employees are Hinged together by virtual conferencing, complete end-to-end connection and Service Portability. 
                       Now, Employees can work from anywhere without affecting their productivity.
                    </p>
                  </div>
                  <!-- End Description -->
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-key-security" role="tabpanel" aria-labelledby="v-pills-key-security-tab">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 mb-7 mb-7 mb-lg-0">
                  <img class="img-fluid" src="<?php echo e(asset('img/pages-images/security-services.jpeg')); ?>" alt="Image Description">
                </div>

                <div class="col-lg-7">
                  <!-- Description -->
                  <div class="pl-lg-4">
                    <span class="u-label u-label--sm u-label--purple mb-3">Security</span>
                    <h2 class="h3 mb-3" style="color: darkgreen;">We assure security</h2>
                    <hr>
                    <p>
                      We ensure proper security measures in all Technology Services that we offer
                      
                    <br>
                      We make it more easy to keep track of the employee's online communication and activities to ensure that they 
                      don't involve themselves in any practise that is against the organization's Interest.

                    </p>
                  </div>
                  <!-- End Description -->
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-company" role="tabpanel" aria-labelledby="v-pills-company-tab">
              <div class="row">
                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/real-time-sync-icon.svg')); ?>" alt="Image Description">
                    <p>Technology Solutions that we provide help people to connect anywhere at any time.
                      This has lead to high levels of flexibility in communication that allows employees, co-wokers
                      and managers to connect with each other easily.</p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/services-dark-icon.svg')); ?>" alt="Image Description">
                    <p>We make it happen, we get all done for you, we make companies and our clients comfortable at their work places, we get you sorted.</p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-md-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/team-red-icon.svg')); ?>" alt="Image Description">
                    <p>Teamwork, Mutual Understanding and bonding between the employees is highly encouraged by our software projects since employees can connect and communicate no matter 
                      where they are located.</p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/seo-white-icon.svg')); ?>" alt="Image Description">
                    <p>Increased Collaboration on projects has enabled the companies to keep their cliens up to date on how they are progressing and the performance of the projects.</p>               
                  </div>
                  <!-- End Icon Block -->
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab Content -->


          

        </div>
      </div>
    </div>
    <!-- End Features Section -->

    <!-- Mockup Section -->
    <div class="bg-gray-100">
      <div class="container space-2-top space-3-top--lg">
        <!-- Title -->
        <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
          <div class="mb-5">
            <h2 class="h1" style="color: forestgreen;">What we do</h2>
            <p class="lead" style="color: teal;">At Deft Technologies Limited, clients come first. We help individuals, families, institutions and governments raise, manage and distribute the capital they need to achieve their goals. We also provide the implementation of new technology according to the clients’ requirement or upgrading, enhancing the existing facilities in the clients end with the new technology integrated with the existing one. We offer among others the following services:</p>
          </div>



          <div class="row">
                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/real-time-sync-icon.svg')); ?>" alt="Image Description">
                    <hr>

                    <h4 style="color: forestgreen;">Technology Solutions</h4>
                    <p style="color: darkblue;">Technology Solutions that we provide help people to connect anywhere at any time.
                      This has lead to high levels of flexibility in communication that allows employees, co-wokers
                      and managers to connect with each other easily.</p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-sm-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/team-red-icon.svg')); ?>" alt="Image Description">
                    <hr>
                    <h4 style="color: forestgreen;">Web Development</h4>
                    <p style="color: darkblue;">We develope very responsive websites that can be viewed from any device of any screen size. Be it a mobile phone, tablet or a laptop
                      <br>
                      The websites we develope are very user friendly and easy to use.
                    </p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6 mb-7 mb-md-9">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/team-red-icon.svg')); ?>" alt="Image Description">

                    <hr>
                    <h4 style="color: forestgreen;">Mobile Application</h4>
                    <p style="color: darkblue;">We develope Mobile applications that are very user friendly with a beautiful User Interface. Also, interactivity is key in all apps that we develope</p>
                  </div>
                  <!-- End Icon Block -->
                </div>

                <div class="col-sm-6">
                  <!-- Icon Block -->
                  <div class="pr-lg-4">
                    <img class="max-width-9 mb-2" src="<?php echo e(asset('svg/components/desk-with-mac-primary-icon.svg')); ?>" alt="Image Description">
                    <hr>

                    <h4 style="color: forestgreen;">Desktop Applications</h4>
                    <p style="color:darkblue">We also develope desktop applications that are very user friendly with Beautiful user Interface</p>               
                  </div>
                  <!-- End Icon Block -->
                </div>
              </div>
        </div>
        
      </div>
    </div>
    <!-- End Mockup Section -->

    <!-- Divider -->
    <div class="w-50 w-lg-35 mx-auto">
      <hr class="my-0">
    </div>
    <!-- End Divider -->

    <!-- Testimonials Section -->
    <div class="container space-2 space-3--lg">
      <div class="row justify-content-lg-center">
        <div class="col-md-6 col-lg-5 mb-7 mb-md-0">
          <!-- Testimonials -->
          <div class="text-center px-lg-4">
            <div class="mb-2">
              <img class="u-avatar rounded-circle mx-auto mb-2" src="<?php echo e(asset('img/pages-images/brian.jpg')); ?>" alt="Image Description">
              <h4 class="h6">Muchere Brian</h4>
            </div>
            <blockquote class="text-secondary mb-0">"The situation at hand, Covid-19 has Openned our minds. Technology is the way to go."</blockquote>
          </div>
          <!-- End Testimonials -->
        </div>

        <div class="col-md-6 col-lg-5">
          <!-- Testimonials -->
          <div class="text-center px-lg-4">
            <div class="mb-2">
              <img class="u-avatar rounded-circle mx-auto mb-4" src="<?php echo e(asset('img/pages-images/kevin.jpg')); ?>" alt="Image Description">
              <h4 class="h6">Kevin Mwiti</h4>
            </div>
            <blockquote class="text-secondary mb-0">"Deft Technologies is committed to providing any of the answer that you need in this World of Technology."</blockquote>
          </div>
          <!-- End Testimonials -->
        </div>
      </div>
    </div>
    <!-- End Testimonials Section -->

  
  </main>
  <!-- ==================================== END MAIN CONTENT================================== -->

  <!-- ========================================= FOOTER ===================================== -->
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
</body>
</html><?php /**PATH C:\xampp\htdocs\deftTechnologies\resources\views/index.blade.php ENDPATH**/ ?>