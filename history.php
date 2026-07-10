<?php
require_once("include/header.php");
$menu="History";
?>

  <!-- app -->
  <div class="art-app">

    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">

        <?php require_once('include/info.php'); ?>

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
        <br/>
        <?php require_once('sections/history.php'); ?>


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

                <?php include('include/nav.php'); ?>

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