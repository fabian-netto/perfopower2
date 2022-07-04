 <!-- FOOTER 1 -->
        <footer class="page-section text-center pt-100-b-80-cont">
          <div class="container">
                    
            <!-- Social Links -->
            <div class="footer-soc-a">
              <a href="https://1.envato.market/a1gQR" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://1.envato.market/a1gQR" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://1.envato.market/a1gQR" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
              <a href="https://1.envato.market/a1gQR" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a href="https://dribbble.com/abcgomel" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
            </div>

            <!-- Copyright -->
            <div class="footer-copy">
              <a href="http://themeforest.net/user/abcgomel/portfolio" target="_blank">&copy; HASWELL 2020</a>
            </div>
                    
          </div> 
        </footer>



<!-- JS begin -->

    <!-- jQuery  -->
    <script src="js/jquery-1.11.2.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>   

    <!-- MAGNIFIC POPUP -->
    <script src='js/jquery.magnific-popup.min.js'></script>
    
    <!-- PORTFOLIO SCRIPTS -->
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    
    <!-- COUNTER -->
    <script src="js/jquery.countTo.js"></script>
    
    <!-- APPEAR -->    
    <script src="js/jquery.appear.js"></script>
    
    <!-- OWL CAROUSEL -->    
    <script src="js/owl.carousel.min.js"></script>
    
    <!-- HEADER BELOW -->
    <script src="js/jquery.sticky.js"></script>
    
    <!-- GOOLE MAP --> 
    <script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
    <script src="js/gmap3.min.js"></script>
    
    <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]--> 
    
    <!-- FORMS VALIDATION -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/contact-form-validation.min.js"></script>
    
    <!-- ONE PAGE NAV -->
    <script src="js/jquery.nav.js"></script>
    <script>
      $(document).ready(function() {
        //ONE PAGE NAV  ---------------------------------------------------------------------------
          var top_offset = $('header').height() - 1;  // get height of fixed navbar

          $('#nav-onepage').onePageNav({
            currentClass: 'current',
            changeHash: false,
            scrollSpeed: 700,
            scrollOffset: top_offset,
            scrollThreshold: 0.5,
            filter: '',
            easing: 'swing',
            begin: function() {
              //I get fired when the animation is starting
            },
            end: function() {
              //I get fired when the animation is ending
            },
            scrollChange: function($currentListItem) {
              //I get fired when you enter a section and I pass the list item of the section
            }
          });
          
          $('.navbar-nav li a').click(function(event) {
            $('.navbar-collapse').collapse('hide');
            if ($('#nav').hasClass('transparent-fix')){
              $('#nav').removeClass('transparent-fix');  
            }
          });
          
          //HEADER BELOW  ---------------------------------------------------------------------
          $("#nav-below").sticky({topSpacing:0});  
          
      });//END document.ready 
    </script>
    
    <!-- MAIN SCRIPT -->
    <script src="js/main.js"></script>
    
    <!-- REVOSLIDER SCRIPTS  -->
    <script src="revo-slider-5/js/jquery.themepunch.tools.min.js" >
    </script>
    <script src="revo-slider-5/js/jquery.themepunch.revolution.min.js" >
    </script>
    
    <!-- PARTICLES ADD-ON FILES -->
    <script src="revo-slider-5/revolution-addons/particles/js/revolution.addon.particles.min.js?ver=1.0.3"></script>
    
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
    <script src="revo-slider-5/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="revo-slider-5/js/extensions/revolution.extension.video.min.js"></script>
      
    <!-- SLIDER REVOLUTION INITIALIZATION  -->
    <script>
    
      var tpj=jQuery;
      var revapi8;
      tpj(document).ready(function() {
        if(tpj("#rev_slider_280_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_280_1");
        }else{
          revapi8 = tpj("#rev_slider_280_1").show().revolution({
            sliderType:"hero",
            jsFileLocation:"revo-slider-5/js/",
            sliderLayout:"fullscreen",
            dottedOverlay:"none",
            delay:9000,
            particles: {startSlide: "first", endSlide: "last", zIndex: "1",
              particles: {
                number: {value: 90}, color: {value: "#fff"},
                shape: {
                  type: "circle", stroke: {width: 0, color: "#fff", opacity: 1},
                  image: {src: ""}
                },
                opacity: {value: 0.8, random: false, min: 0.25, anim: {enable: false, speed: 1, opacity_min: 0, sync: false}},
                size: {value: 2, random: true, min: 1, anim: {enable: false, speed: 40, size_min: 0.1, sync: false}},
                line_linked: {enable: true, distance: 150, color: "#fff", opacity: 0.5, width: 1},
                move: {enable: true, speed: 1, direction: "none", random: true, min_speed: 3, straight: false, out_mode: "out"}},
              interactivity: {
                events: {onhover: {enable: true, mode: "repulse"}, onclick: {enable: false, mode: "bubble"}},
                modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 40, opacity: 1}, repulse: {distance: 75}}
              }
            },
            navigation: {
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[868,768,960,720],
            lazyType:"none",
          parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
          },
            shadow:0,
            spinner:"spinner0",
            autoHeight:"off",
            fullScreenAutoWidth:"off",
            fullScreenAlignForce:"off",
            fullScreenOffsetContainer: "#nav-below",
            fullScreenOffset: "",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              disableFocusListener:false,
            }
          });
        }

                RsParticlesAddOn(revapi8);
      }); /*ready*/
    </script>

<!-- JS end --> 