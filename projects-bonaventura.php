<?php
   require_once("include/header.php");
   $menu="Projects";
   ?>
<!-- app -->
<div class="art-app">
   <!-- mobile top bar -->
   <div class="art-mobile-top-bar"></div>
   <!-- app wrapper -->
   <div class="art-app-wrapper">
      <!-- app container end -->
      <div class="art-app-container">
         <!-- info bar -->
         <?php require_once('include/info.php'); ?>
         <!-- info bar end -->
         <!-- content -->
         <div class="art-content">
            <!-- curtain -->
            <div class="art-curtain"></div>
            <!-- top background -->
            <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
               <!-- overlay -->
               <div class="art-top-bg-overlay"></div>
               <!-- overlay end -->
            </div>
            <!-- top background end -->
            <!-- swup container -->
            <div class="transition-fade" id="swup">
               <!-- scroll frame -->
               <div id="scrollbar" class="art-scroll-frame">
                  <div class="container-fluid">
                     <!-- row -->
                     <div class="row p-30-0">
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- section title -->
                           <div class="art-section-title">
                              <!-- title frame -->
                              <div class="art-title-frame">
                                 <!-- title -->
                                 <h4>Project title</h4>
                              </div>
                              <!-- title frame end -->
                              <!-- right frame -->
                              <div class="art-right-frame">
                                 <div class="art-project-category">Ui Design, Graphic</div>
                              </div>
                              <!-- right frame end -->
                           </div>
                           <!-- section title end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- slider container -->
                           <div class="swiper-container art-works-slider swiper-container-horizontal" style="overflow: visible">
                              <!-- slider wrapper -->
                              <div class="swiper-wrapper" style="transform: translate3d(-406px, 0px, 0px); transition-duration: 1400ms;">
                                 <!-- slide -->
                                 <div class="swiper-slide swiper-slide-prev" style="width: 376px; margin-right: 30px;">
                                    <!-- item frame -->
                                    <a data-fancybox="gallery" href="img/works/original-size/1.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                       <!-- img -->
                                       <img src="img/works/thumbnail/1.jpg" alt="item">
                                       <!-- zoom icon -->
                                       <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                    </a>
                                    <!-- item end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide swiper-slide-active" style="width: 376px; margin-right: 30px;">
                                    <!-- item frame -->
                                    <a data-fancybox="gallery" href="img/works/original-size/7.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                       <!-- img -->
                                       <img src="img/works/thumbnail/7.jpg" alt="item">
                                       <!-- zoom icon -->
                                       <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                    </a>
                                    <!-- item end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide swiper-slide-next" style="width: 376px; margin-right: 30px;">
                                    <!-- item frame -->
                                    <a data-fancybox="gallery" href="img/works/original-size/4.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                       <!-- img -->
                                       <img src="img/works/thumbnail/4.jpg" alt="item">
                                       <!-- zoom icon -->
                                       <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                    </a>
                                    <!-- item end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide" style="width: 376px; margin-right: 30px;">
                                    <!-- item frame -->
                                    <a data-fancybox="gallery" href="img/works/original-size/5.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                       <!-- img -->
                                       <img src="img/works/thumbnail/5.jpg" alt="item">
                                       <!-- zoom icon -->
                                       <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                    </a>
                                    <!-- item end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide" style="width: 376px; margin-right: 30px;">
                                    <!-- item frame -->
                                    <a data-fancybox="gallery" href="img/works/original-size/4.jpg" class="art-a art-portfolio-item-frame art-horizontal">
                                       <!-- img -->
                                       <img src="img/works/thumbnail/4.jpg" alt="item">
                                       <!-- zoom icon -->
                                       <span class="art-item-hover"><i class="fas fa-expand"></i></span>
                                    </a>
                                    <!-- item end -->
                                 </div>
                                 <!-- slide end -->
                              </div>
                              <!-- slider wrapper end -->
                              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                           </div>
                           <!-- slider container end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- slider navigation -->
                           <div class="art-slider-navigation">
                              <!-- left side -->
                              <div class="art-sn-left">
                                 <!-- slider pagination -->
                                 <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                              </div>
                              <!-- left side end -->
                              <!-- right side -->
                              <div class="art-sn-right">
                                 <!-- slider navigation -->
                                 <div class="art-slider-nav-frame">
                                    <!-- prev -->
                                    <div class="art-slider-nav art-works-swiper-prev" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="false"><i class="fas fa-chevron-left"></i></div>
                                    <!-- next -->
                                    <div class="art-slider-nav art-works-swiper-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-chevron-right"></i></div>
                                 </div>
                                 <!-- slider navigation -->
                              </div>
                              <!-- right side end -->
                           </div>
                           <!-- slider navigation end -->
                        </div>
                        <!-- col end -->
                     </div>
                     <!-- row end -->
                  </div>
                  <div class="container-fluid">
                     <!-- row -->
                     <div class="row p-30-0">
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- section title -->
                           <div class="art-section-title">
                              <!-- title frame -->
                              <div class="art-title-frame">
                                 <!-- title -->
                                 <h4>Project details</h4>
                              </div>
                              <!-- title frame end -->
                           </div>
                           <!-- section title end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-8">
                           <div class="art-a art-card art-fluid-card">
                              <h5 class="mb-15">Description</h5>
                              <div class="mb-15">Perferendis modi tempora, minus facere! Animi ipsam explicabo beatae soluta qui repellat minus perspiciatis placeat
                                 doloribus praesentium laborum debitis error sed ex nisi, ipsum ad obcaecati assumenda ut recusandae. Vero, voluptate, magni unde accusantium vel ducimus expedita!
                              </div>
                              <!-- button -->
                              <div class="art-buttons-frame"><a href="https://www.behance.net/gallery/83236527/VIE" class="art-link art-color-link art-w-chevron" target="_blank">Read More</a></div>
                           </div>
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-4">
                           <div class="art-a art-card">
                              <!-- table -->
                              <div class="art-table p-15-15">
                                 <ul>
                                    <li>
                                       <h6>Order Date:</h6>
                                       <span>24.12.2019</span>
                                    </li>
                                    <li>
                                       <h6>Final Date:</h6>
                                       <span>12.03.2020</span>
                                    </li>
                                    <li>
                                       <h6>Status:</h6>
                                       <span>Completed</span>
                                    </li>
                                    <li>
                                       <h6>Client:</h6>
                                       <span>Envato Market</span>
                                    </li>
                                    <li>
                                       <h6>Location:</h6>
                                       <span><a href="https://goo.gl/maps/b4w13Zuk9iWCsLMX7" target="_blank">Ukraine, Lviv</a></span>
                                    </li>
                                 </ul>
                              </div>
                              <!-- table end -->
                           </div>
                        </div>
                        <!-- col end -->
                     </div>
                     <!-- row end -->
                  </div>
                  <div class="container-fluid">
                     <!-- row -->
                     <div class="row">
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- section title -->
                           <div class="art-section-title">
                              <!-- title frame -->
                              <div class="art-title-frame">
                                 <!-- title -->
                                 <h4>Client reviews</h4>
                              </div>
                              <!-- title frame end -->
                           </div>
                           <!-- section title end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- slider container -->
                           <div class="swiper-container art-testimonial-slider swiper-container-horizontal" style="overflow: visible">
                              <!-- slider wrapper -->
                              <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                 <!-- slide -->
                                 <div class="swiper-slide swiper-slide-active" style="width: 376px; margin-right: 30px;">
                                    <!-- testimonial -->
                                    <div class="art-a art-testimonial">
                                       <!-- testimonial body -->
                                       <div class="testimonial-body">
                                          <!-- photo -->
                                          <img class="art-testimonial-face" src="img/testimonials/face-1.jpg" alt="face">
                                          <!-- name -->
                                          <h5>Paul Trueman</h5>
                                          <div class="art-el-suptitle mb-15">Template author</div>
                                          <!-- text -->
                                          <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
                                             This is easily a 5 star freelancer.
                                          </div>
                                       </div>
                                       <!-- testimonial body end -->
                                       <!-- testimonial footer -->
                                       <div class="art-testimonial-footer">
                                          <div class="art-left-side">
                                             <!-- star rate -->
                                             <ul class="art-star-rate">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                             <!-- star rate end -->
                                          </div>
                                          <div class="art-right-side">
                                          </div>
                                       </div>
                                       <!-- testimonial footer end -->
                                    </div>
                                    <!-- testimonial end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide swiper-slide-next" style="width: 376px; margin-right: 30px;">
                                    <!-- testimonial -->
                                    <div class="art-a art-testimonial">
                                       <!-- testimonial body -->
                                       <div class="testimonial-body">
                                          <!-- photo -->
                                          <img class="art-testimonial-face" src="img/testimonials/face-2.jpg" alt="face">
                                          <!-- name -->
                                          <h5>Paul Trueman</h5>
                                          <div class="art-el-suptitle mb-15">Template author</div>
                                          <!-- text -->
                                          <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
                                             This is easily a 5 star freelancer.
                                          </div>
                                       </div>
                                       <!-- testimonial body end -->
                                       <!-- testimonial footer -->
                                       <div class="art-testimonial-footer">
                                          <div class="art-left-side">
                                             <!-- star rate -->
                                             <ul class="art-star-rate">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li class="art-empty-item"><i class="fas fa-star"></i></li>
                                             </ul>
                                             <!-- star rate end -->
                                          </div>
                                          <div class="art-right-side">
                                          </div>
                                       </div>
                                       <!-- testimonial footer end -->
                                    </div>
                                    <!-- testimonial end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide" style="width: 376px; margin-right: 30px;">
                                    <!-- testimonial -->
                                    <div class="art-a art-testimonial">
                                       <!-- testimonial body -->
                                       <div class="testimonial-body">
                                          <!-- photo -->
                                          <img class="art-testimonial-face" src="img/testimonials/face-3.jpg" alt="face">
                                          <!-- name -->
                                          <h5>Paul Trueman</h5>
                                          <div class="art-el-suptitle mb-15">Template author</div>
                                          <!-- text -->
                                          <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
                                             This is easily a 5 star freelancer.
                                          </div>
                                       </div>
                                       <!-- testimonial body end -->
                                       <!-- testimonial footer -->
                                       <div class="art-testimonial-footer">
                                          <div class="art-left-side">
                                             <!-- star rate -->
                                             <ul class="art-star-rate">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                             <!-- star rate end -->
                                          </div>
                                          <div class="art-right-side">
                                          </div>
                                       </div>
                                       <!-- testimonial footer end -->
                                    </div>
                                    <!-- testimonial end -->
                                 </div>
                                 <!-- slide end -->
                                 <!-- slide -->
                                 <div class="swiper-slide" style="width: 376px; margin-right: 30px;">
                                    <!-- testimonial -->
                                    <div class="art-a art-testimonial">
                                       <!-- testimonial body -->
                                       <div class="testimonial-body">
                                          <!-- photo -->
                                          <img class="art-testimonial-face" src="img/testimonials/face-4.jpg" alt="face">
                                          <!-- name -->
                                          <h5>Paul Trueman</h5>
                                          <div class="art-el-suptitle mb-15">Template author</div>
                                          <!-- text -->
                                          <div class="mb-15">Working with Artur has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you Artur!
                                             This is easily a 5 star freelancer.
                                          </div>
                                       </div>
                                       <!-- testimonial body end -->
                                       <!-- testimonial footer -->
                                       <div class="art-testimonial-footer">
                                          <div class="art-left-side">
                                             <!-- star rate -->
                                             <ul class="art-star-rate">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                             </ul>
                                             <!-- star rate end -->
                                          </div>
                                          <div class="art-right-side">
                                          </div>
                                       </div>
                                       <!-- testimonial footer end -->
                                    </div>
                                    <!-- testimonial end -->
                                 </div>
                                 <!-- slide end -->
                              </div>
                              <!-- slider wrapper end -->
                              <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                           </div>
                           <!-- slider container end -->
                        </div>
                        <!-- col end -->
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- slider navigation -->
                           <div class="art-slider-navigation">
                              <!-- left side -->
                              <div class="art-sn-left">
                                 <!-- slider pagination -->
                                 <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                              </div>
                              <!-- left side end -->
                              <!-- right side -->
                              <div class="art-sn-right">
                                 <!-- slider navigation -->
                                 <div class="art-slider-nav-frame">
                                    <!-- prev -->
                                    <div class="art-slider-nav art-testi-swiper-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><i class="fas fa-chevron-left"></i></div>
                                    <!-- next -->
                                    <div class="art-slider-nav art-testi-swiper-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><i class="fas fa-chevron-right"></i></div>
                                 </div>
                                 <!-- slider navigation -->
                              </div>
                              <!-- right side end -->
                           </div>
                           <!-- slider navigation end -->
                        </div>
                        <!-- col end -->
                     </div>
                     <!-- row end -->
                  </div>
                  <?php require_once('sections/counts.php'); ?>

                  <div class="container-fluid">
                     <!-- row -->
                     <div class="row">
                        <!-- col -->
                        <div class="col-lg-12">
                           <!-- call to action -->
                           <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
                              <!-- overlay -->
                              <div class="art-banner-overlay">
                                 <!-- main title -->
                                 <div class="art-banner-title text-center">
                                    <!-- title -->
                                    <h1 class="mb-15">Ready to order your project?</h1>
                                    <!-- suptitle -->
                                    <div class="art-lg-text art-code mb-25">Let's work together!</div>
                                    <!-- button -->
                                    <a href="contact.php" class="art-btn art-btn-md"><span>Contact me</span></a>
                                 </div>
                                 <!-- main title end -->
                              </div>
                              <!-- overlay end -->
                           </div>
                           <!-- call to action end  -->
                           <!-- projects navigation -->
                           <div class="art-a art-pagination">
                              <!-- button -->
                              <a href="portfolio-single-2.html" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous project</span></a>
                              <div class="art-pagination-center art-m-hidden">
                                 <a class="art-link" href="projects.php">All projects</a>
                              </div>
                              <!-- button -->
                              <a href="portfolio-single-2.html" class="art-link art-color-link art-w-chevron"><span>Next project</span></a>
                           </div>
                           <!-- projects navigation end -->
                        </div>
                        <!-- col end -->
                     </div>
                     <!-- row end -->
                  </div>
                  <?php require_once('sections/brand.php'); ?>
                  <?php include("include/copyright.php"); ?>
               </div>
               <!-- scroll frame end -->
            </div>
            <!-- swup container end -->
         </div>
         <!-- content end -->
         <!-- menu bar -->
         <div class="art-menu-bar">
            <!-- menu bar frame -->
            <div class="art-menu-bar-frame">
               <!-- menu bar header -->
               <div class="art-menu-bar-header">
                  <!-- menu bar button -->
                  <a class="art-menu-bar-btn" href="#.">
                     <!-- icon -->
                     <span></span>
                  </a>
                  <!-- menu bar button end -->
               </div>
               <!-- menu bar header end -->
               <!-- current page title -->
               <div class="art-current-page"></div>
               <!-- current page title end -->
               <!-- scroll frame -->
               <div class="art-scroll-frame">
                  <!-- menu -->
                  <?php include('include/nav.php'); ?>
                  <!-- menu end -->
                  <?php include('include/language.php'); ?>

               </div>
               <!-- scroll frame end -->
            </div>
            <!-- menu bar frame -->
         </div>
         <!-- menu bar end -->
      </div>
      <!-- app container end -->
   </div>
   <!-- app wrapper end -->
   <!-- preloader -->
   <div class="art-preloader">
      <!-- preloader content -->
      <div class="art-preloader-content">
         <!-- title -->
         <h4>Loading...</h4>
         <!-- progressbar -->
         <div id="preloader" class="art-preloader-load"></div>
      </div>
      <!-- preloader content end -->
   </div>
   <!-- preloader end -->
</div>
<!-- app end -->
<?php require_once('include/footer.php'); ?>