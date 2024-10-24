$(function() {
    "use strict";
    setTimeout(function() {
 

  // page loading
  $(document).ready(function() {
    anime({
      targets: '.art-preloader .art-preloader-content',
      opacity: [0, 1],
      delay: 200,
      duration: 600,
      easing: 'linear',
      complete: function(anim) {

      }
    });
    anime({
      targets: '.art-preloader',
      opacity: [1, 0],
      delay: 2200,
      duration: 400,
      easing: 'linear',
      complete: function(anim) {
        $('.art-preloader').css('display', 'none');
      }
    });
  });
  

    var bar = new ProgressBar.Line(preloader, {
      strokeWidth: 1.7,
      easing: 'easeInOut',
      duration: 1400,
      delay: 750,
      trailWidth: 1.7,
      svgStyle: {
        width: '100%',
        height: '100%'
      },
      step: (state, bar) => {
        bar.setText(Math.round(bar.value() * 100) + ' %');
      }
    });
  
    bar.animate(1);
  
    /* -------------------------------------------
  
    demo
  
    ------------------------------------------- */
    var demo = '<style>.color-change{top: 30vh; right: -50px; padding: 5px 5px 0; background-color: rgba(250,250,252,1); position: fixed; z-index: 99999999999999999999999999999999; border-radius: 0 0 2px 0; -webkit-transition: .3s ease-in-out; transition: .3s ease-in-out;}.active-changer{right: 0;}.swapColor{height: 40px; width: 40px; display: block; margin-bottom: 5px; border-radius: 1px; filter: brightness(100%); -webkit-transition: .3s ease-in-out; transition: .3s ease-in-out;}.swapColor:hover{filter: brightness(110%);}.swapOverlay{height: 40px; width: 40px; display: block; margin-bottom: 10px; border-radius: 1px;}.green{background-color: #4CAF50;}.red{background-color: #f44336;}.blue{background-color: #64B5F6;}.orange{background-color: #FFC107;}.open-changer{cursor: pointer; position: absolute; background-color: rgba(250,250,252,1); height: 40px; width: 40px; top: 0; left: -40px; color: rgba(32,32,42,1); display: flex; justify-content: center;}.open-changer i{align-self: center; animation: rotate 2s infinite linear;}@keyframes rotate{0%{transform: rotate(0);}100%{transform: rotate(360deg);}}.demo-card{width: 100%;}.demo-frame{margin: 0;}@media (max-width: 768px){.demo-frame{margin-left: -15px; margin-right: -15px;}}</style> <div class="color-change"> <div class="open-changer"><i class="fas fa-cog"></i></div><a href="javascript:void(0)" class="swapColor orange" data-theme="orange"></a> <a href="javascript:void(0)" class="swapColor red" data-theme="red"></a> <a href="javascript:void(0)" class="swapColor green" data-theme="green"></a> <a href="javascript:void(0)" class="swapColor blue" data-theme="blue"></a></div>';
    demo="";
    $('body').prepend(demo);  
    /* -------------------------------------------
  
    demo end
  
    
  
    ------------------------------------------- */
  });
  });
  