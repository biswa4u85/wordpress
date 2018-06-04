var controller = new ScrollMagic.Controller();
    var s1 = new ScrollMagic.Scene({ triggerElement: "#s1"})
    .on("enter leave", function (e) {
        // jQuery(".animated").css(e.type == "enter" ? {"visibility": "visible"} : {"visibility": "hidden"});
        if(e.type === "enter"){
          jQuery(".animated.l").addClass('fadeInLeft v');
          jQuery(".animated.r").addClass('fadeInRight v');
        } else {
          jQuery(".animated.l").removeClass('fadeInLeft v');
          jQuery(".animated.r").removeClass('fadeInRight v');
        }
    })    
    .addTo(controller);

    var s2 = new ScrollMagic.Scene({ triggerElement: "#s2"})
    .setTween(".t-box", 0.8, {scale: 1})
    .addTo(controller);

    var c_card = new ScrollMagic.Scene({ triggerElement: "#c-card"})
    .on("enter leave", function (e) {
         //jQuery(".animated").css(e.type == "enter" ? {"visibility": "hidden"} : {"visibility": "visible"});
        if(e.type === "enter"){
          jQuery(".animated.cl").addClass('fadeInLeft v');
          jQuery(".animated.cr").addClass('fadeInRight v');
        } else {
          jQuery(".animated.cl").removeClass('fadeInLeft v');
          jQuery(".animated.cr").removeClass('fadeInRight v');
        }
    })    
    .addTo(controller);

    var s3 = new ScrollMagic.Scene({ triggerElement: "#s3"})
    .on("enter leave", function (e) {
        // jQuery(".animated").css(e.type == "enter" ? {"visibility": "visible"} : {"visibility": "hidden"});
        if(e.type === "enter"){
          jQuery(".animated.ml").addClass('fadeInLeft v');
          jQuery(".animated.mr").addClass('fadeInRight v');
        } else {
          jQuery(".animated.ml").removeClass('fadeInLeft v');
          jQuery(".animated.mr").removeClass('fadeInRight v');
        }
    })    
    .addTo(controller);

    // var tweenIcon = TweenMax.to("#target", 1, {rotation:360, ease:Linear.easeIn});

    // var icon8 = new ScrollMagic.Scene({ triggerElement: "#icon8", duration:500})
    // .setTween(tweenIcon)
    // .addTo(controller);

    // var tweenIcon = TweenMax.to("#icon8-text", 1, {x: '-5'});
    // var icon8_text = new ScrollMagic.Scene({ triggerElement: "#icon8", duration: 300, offset: 0, reverse: true})
    // .setTween(tweenIcon)
    // .addTo(controller);

        jQuery(window).load(function(){
            jQuery('#preloader').fadeOut('slow',function(){jQuery(this).remove();});
          });
      jQuery(document).ready(function(){
          
      });