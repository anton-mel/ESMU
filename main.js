/*remove loader class*/
  jQuery('#loader').removeClass('loaded');
    jQuery('#loader-wrapper').removeClass('loaded');
    jQuery('#loader').removeClass('delete');
    jQuery('#loader-wrapper').removeClass('delete');

/*loader*/
jQuery(document).ready(function sh_loader_timeout() {

  setTimeout(function(){
    jQuery('#loader').addClass('loaded');
      jQuery('#loader-wrapper').addClass('loaded');
  }, 1000);

  setTimeout(function(){
    jQuery('#loader').addClass('delete');
      jQuery('#loader-wrapper').addClass('delete');
  }, 3000);
});
/*end loader*/

//FRONT-END///////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////
$(window).ready(function(){

  $(".form-change-project-admin form button").css({
    "height":$(".form-change-project-admin").height(),
    "width":$(".form-change-project-admin").width()
  });
  $(".form-delete-project-admin form button").css({
    "height":$(".form-delete-project-admin").height(),
    "width":$(".form-delete-project-admin").width()
  });

  $(".top-container").height($(".menu-header-main").height()+90);

  $(".menu-phone").click(function(){
    $("body, html").css({
      "overflow-y":"hidden"
    });
    $(".fixed-phone-rihgt-menu").css({
      "display":"flex"
    });
    setTimeout(function(){
      $(".fixed-phone-rihgt-menu").css({
        "transform":"translateX(0)",
        "transition":"1s"
      });
    },1)
  });
  $(".fixed-phone-rihgt-menu-tools span").click(function(){
    $("body, html").css({
      "overflow-y":"auto"
    });
    $(".fixed-phone-rihgt-menu").css({
      "transform":"translateX(100%)",
      "transition":"1s"
    });
    setTimeout(function(){
      $(".fixed-phone-rihgt-menu").css({
        "display":"none"
      });
    },1000);
  });



  $(".send_email").click(function(){
    $("body, html").css({
      "overflow-y":"hidden"
    });
    $(".subscribe-window").css("display","flex");
    setTimeout(function(){
      $(".subscribe-window").removeClass("animated fadeOut");
      $(".subscribe-window").addClass("animated fadeIn");
    },1)

  });
  $(".close-subscribe-window").click(function(){
    $("body, html").css({
        "overflow-y":"auto"
    });
    $(".subscribe-window").removeClass("animated fadeIn");
    $(".subscribe-window").addClass("animated fadeOut");
    setTimeout(function(){
      $(".subscribe-window").css("display","none");
    },1000);
  });

  $(".but-copy-all-mails").click(function(){
    var copied = document.getElementById("copy-mail");
    copied.select();
    document.execCommand("copy");

    $(this).text("copied");
  });


  $(".ul-list-menu-fixed ul li a, .fixed-phone-rihgt-menu ul li a").each(function(){
    $(this).hover(function(){

      $(this).find("span:nth-child(1)").css({

        "opacity":"0"

      });

      $(this).find("span:nth-child(2)").css({

        "opacity":"1",
        "display":"block"

      });

      $(this).find("span:nth-child(1)").removeClass("animated slideInDown");
      $(this).find("span:nth-child(1)").addClass("animated slideOutUp");

      setTimeout(function(){

        $(this).find("span:nth-child(1)").css({
          "display":"none"
        });

        $(this).find("span:nth-child(1)").removeClass("mouseeventsnone");
        $(this).find("span:nth-child(2)").addClass("mouseeventsnone");

      }, 900);

      $(this).find("span:nth-child(2)").removeClass("animated slideOutDown");
      $(this).find("span:nth-child(2)").addClass("animated slideInUp");


    },function(){

      $(this).find("span:nth-child(2)").removeClass("mouseeventsnone");
      $(this).find("span:nth-child(1)").addClass("mouseeventsnone");

      $(this).find("span:nth-child(1)").css({

        "opacity":".7",
        "display":"block"

      });

      $(this).find("span:nth-child(2)").css({

        "opacity":"0"

      });

      $(this).find("span:nth-child(1)").removeClass("animated slideOutUp");
      $(this).find("span:nth-child(1)").addClass("animated slideInDown");

      setTimeout(function(){

        $(this).find("span:nth-child(2)").css({
          "display":"none"
        });

      }, 900);

      $(this).find("span:nth-child(2)").removeClass("animated slideInUp");
      $(this).find("span:nth-child(2)").addClass("animated slideOutDown");

    });
  });


  $(".ul-list-menu ul li a").each(function(){
    $(this).hover(function(){

      $(this).find("span:nth-child(1)").css({

        "opacity":"0"

      });

      $(this).find("span:nth-child(2)").css({

        "opacity":"1",
        "display":"block"

      });

      $(this).find("span:nth-child(1)").removeClass("animated slideInDown");
      $(this).find("span:nth-child(1)").addClass("animated slideOutUp");

      setTimeout(function(){

        $(this).find("span:nth-child(1)").css({
          "display":"none"
        });

        $(this).find("span:nth-child(1)").removeClass("mouseeventsnone");
        $(this).find("span:nth-child(2)").addClass("mouseeventsnone");

      }, 900);

      $(this).find("span:nth-child(2)").removeClass("animated slideOutDown");
      $(this).find("span:nth-child(2)").addClass("animated slideInUp");


    },function(){

      $(this).find("span:nth-child(2)").removeClass("mouseeventsnone");
      $(this).find("span:nth-child(1)").addClass("mouseeventsnone");

      $(this).find("span:nth-child(1)").css({

        "opacity":".7",
        "display":"block"

      });

      $(this).find("span:nth-child(2)").css({

        "opacity":"0"

      });

      $(this).find("span:nth-child(1)").removeClass("animated slideOutUp");
      $(this).find("span:nth-child(1)").addClass("animated slideInDown");

      setTimeout(function(){

        $(this).find("span:nth-child(2)").css({
          "display":"none"
        });

      }, 900);

      $(this).find("span:nth-child(2)").removeClass("animated slideInUp");
      $(this).find("span:nth-child(2)").addClass("animated slideOutDown");

    });
  });

  setInterval(function(){
    $(".container").css("padding-top",$(".menu").innerHeight()+20);
    $(".pad-top-block-content-container-center").css("top",$(".menu").innerHeight());
    $(".scroll-down-header i").removeClass("animated fadeOutDown");
    $(".scroll-down-header i").addClass("animated fadeInDown");
    $(".right-around-scroll").css("margin-top",$(".menu").innerHeight()-17);
    setTimeout(function(){$(".scroll-down-header i").removeClass("animated fadeInDown"); $(".scroll-down-header i").addClass("animated fadeOutDown");}, 1700);
  },2000);

  $(".scroll-down-header").click(function(){

    $(window).scrollTop($(window).height()+100);

  });

  var scrt = $(window).scrollTop();
  $(".bot-scr-sect").click(function(){
    
    $(window).scrollTop($(window).height());
  });

  $(".top-scr-sect").click(function(){
    $(window).scrollTop(scrt$(window).height());
  });

});


//SCROLL EFECTS //////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////

$(window).scroll(function(){
  $(".text-bg-abot-anim").css({
    "transform":'translateY(-'+$(window).scrollTop()/2+'px)'
  });
  $(".title-bg-contmainblock1").css({
    "transform":'translateY('+$(window).scrollTop()/5+'px)'
  });

  $(".bg-text-slide-main").css({
    "transform":'translateY('+$(window).scrollTop()/5+'px)',
    "opacity": (1-$(window).scrollTop()/($(window).height()))/10
  });
  $(".photo-hart-center h1").css("padding-bottom",$(window).scrollTop());
  if($(window).scrollTop()<=$(window).height()/3){
    $(".photo-hart-center h1").css("opacity",1-$(window).scrollTop()/($(window).height()/3));
  }else{
    $(".photo-hart-center h1").css("opacity",0);
  }

  $(".be-eco").css("padding-top",$(window).scrollTop()/10);
  $(".count-main-center h1:nth-child(4)").css("margin-bottom",$(window).scrollTop()/2);

if($(window).width()>=1080){

    if($(window).scrollTop()+70+70>= $.windowHeight()){
      //menu effect
      $(".menu-header-main-container2").css("display","flex");
      $(".menu-fixed").css("background","var(--color)");
      $(".top-bg-hp-men-fix").css("opacity","1");
      $(".menu-fixed").css("transition", "0s");
      $(".menu-fixed-main-cont").css("margin-bottom","20px");
      $(".scroller-sections").removeClass("animated fadeOutDown");
      $(".scroller-sections").addClass("animated fadeInUp");
      $(".hide-header-bottom-side").css("opacity","1");
    }else{
      //menu effect
      $(".menu-header-main-container2").css("display","none");
      $(".menu-header-main-container").css("box-shadow", "none");
      $(".menu-fixed").css("background","none");
      $(".menu-fixed").css("transition", "0s");
      $(".menu-fixed-main-cont").css("margin-bottom","0px");
      $(".top-bg-hp-men-fix").css("opacity","0");
      $(".menu-fixed").css("box-shadow","none");
      $(".scroller-sections").removeClass("animated fadeInUp");
      $(".scroller-sections").addClass("animated fadeOutDown");
      $(".hide-header-bottom-side").css("opacity","0");
    }
  

    if($(window).scrollTop()+200>$(".left-block-text-project2").offset().top && $(window).scrollTop() + 200 < $(".right-block-text-project2").offset().top - $(".right-block-text-project2").height() + $(".left-block-text-project2").height() && $(".block-text-project2").height() > 400){
      $(".right-block-text-project2").css("padding-top", $(window).scrollTop()-$(".right-block-text-project2").offset().top+200);
    }else if($(window).scrollTop()+200<$(".left-block-text-project2").offset().top){
      $(".right-block-text-project2").css("padding-top", 0);
    }else if($(window).scrollTop() + 200 > $(".right-block-text-project2").offset().top - $(".right-block-text-project2").height() + $(".left-block-text-project2").height()){
      $(".right-block-text-project2").css("padding-top", $(".left-block-text-project2").height() - $(".right-block-text-project2").height());
    }

    if($(window).scrollTop()+200>$(".right-block-text-project3").offset().top && $(window).scrollTop() + 200 < $(".left-block-text-project3").offset().top - $(".left-block-text-project3").height() + $(".right-block-text-project3").height() && $(".block-text-project3").height() > 400){
      $(".left-block-text-project3").css("padding-top", $(window).scrollTop()-$(".left-block-text-project3").offset().top+200);
    }else if($(window).scrollTop()+200<$(".right-block-text-project3").offset().top){
      $(".left-block-text-project3").css("padding-top", 0);
    }else if($(window).scrollTop() + 200 > $(".left-block-text-project3").offset().top - $(".left-block-text-project3").height() + $(".right-block-text-project3").height()){
      $(".left-block-text-project3").css("padding-top", $(".right-block-text-project3").height() - $(".left-block-text-project3").height());
    }

}else if($(window).width()<1080 && $(window).width()>=960){  

    if($(window).scrollTop()+70+70>= $.windowHeight()){
      //menu effect
      $(".menu-header-main-container2").css("display","flex");
      $(".menu-fixed").css("background","var(--color)");
      $(".top-bg-hp-men-fix").css("opacity","1");
      $(".menu-fixed").css("transition", "0s");
      $(".menu-fixed-main-cont").css("margin-bottom","20px");
      $(".scroller-sections").removeClass("animated fadeOutDown");
      $(".scroller-sections").addClass("animated fadeInUp");
      $(".hide-header-bottom-side").css("opacity","1");
    }else{
      //menu effect
      $(".menu-header-main-container2").css("display","none");
      $(".menu-header-main-container").css("box-shadow", "none");
      $(".menu-fixed").css("background","none");
      $(".menu-fixed").css("transition", "0s");
      $(".top-bg-hp-men-fix").css("opacity","0");
      $(".menu-fixed-main-cont").css("margin-bottom","0px");
      $(".menu-fixed").css("box-shadow","none");
      $(".scroller-sections").removeClass("animated fadeInUp");
      $(".scroller-sections").addClass("animated fadeOutDown");
      $(".hide-header-bottom-side").css("opacity","0");
    }

    if($(window).scrollTop()+200>$(".left-block-text-project2").offset().top && $(window).scrollTop() + 200 < $(".right-block-text-project2").offset().top - $(".right-block-text-project2").height() + $(".left-block-text-project2").height() && $(".block-text-project2").height() > 400){
      $(".right-block-text-project2").css("padding-top", $(window).scrollTop()-$(".right-block-text-project2").offset().top+200);
    }else if($(window).scrollTop()+200<$(".left-block-text-project2").offset().top){
      $(".right-block-text-project2").css("padding-top", 0);
    }else if($(window).scrollTop() + 200 > $(".right-block-text-project2").offset().top - $(".right-block-text-project2").height() + $(".left-block-text-project2").height()){
      $(".right-block-text-project2").css("padding-top", $(".left-block-text-project2").height() - $(".right-block-text-project2").height());
    }

    if($(window).scrollTop()+200>$(".right-block-text-project3").offset().top && $(window).scrollTop() + 200 < $(".left-block-text-project3").offset().top - $(".left-block-text-project3").height() + $(".right-block-text-project3").height() && $(".block-text-project3").height() > 400){
      $(".left-block-text-project3").css("padding-top", $(window).scrollTop()-$(".left-block-text-project3").offset().top+200);
    }else if($(window).scrollTop()+200<$(".right-block-text-project3").offset().top){
      $(".left-block-text-project3").css("padding-top", 0);
    }else if($(window).scrollTop() + 200 > $(".left-block-text-project3").offset().top - $(".left-block-text-project3").height() + $(".right-block-text-project3").height()){
      $(".left-block-text-project3").css("padding-top", $(".right-block-text-project3").height() - $(".left-block-text-project3").height());
    }

}else if($(window).width()<960 && $(window).width()>=740){

  if($(window).scrollTop()+50+70>= $.windowHeight()){
    //menu effect
    $(".menu-header-main-container2").css("display","flex");
    $(".menu-fixed").css("background","var(--color)");
    $(".top-bg-hp-men-fix").css("opacity","1");
    $(".menu-fixed-main-cont").css("margin-bottom","0px");
    $(".menu-fixed").css("transition", "0s");
    $(".scroller-sections").removeClass("animated fadeOutDown");
    $(".scroller-sections").addClass("animated fadeInUp");
    $(".hide-header-bottom-side").css("opacity","1");
  }else{
    //menu effect
    $(".menu-header-main-container2").css("display","none");
    $(".menu-header-main-container").css("box-shadow", "none");
    $(".menu-fixed").css("background","none");
    $(".menu-fixed").css("transition", "0s");
    $(".top-bg-hp-men-fix").css("opacity","0");
    $(".menu-fixed-main-cont").css("margin-bottom","0px");
    $(".menu-fixed").css("box-shadow","none");
    $(".scroller-sections").removeClass("animated fadeInUp");
    $(".scroller-sections").addClass("animated fadeOutDown");
    $(".hide-header-bottom-side").css("opacity","0");
  }


}else if($(window).width()<740 && $(window).width()>500){

  if($(window).scrollTop()+50+70>= $.windowHeight()){
    //menu effect
    $(".menu-header-main-container2").css("display","flex");
    $(".menu-fixed").css("background","var(--color)");
    $(".top-bg-hp-men-fix").css("opacity","1");
    $(".menu-fixed").css("transition", "0s");
    $(".scroller-sections").removeClass("animated fadeOutDown");
    $(".menu-fixed-main-cont").css("margin-bottom","0px");
    $(".scroller-sections").addClass("animated fadeInUp");
    $(".hide-header-bottom-side").css("opacity","1");
  }else{
    //menu effect
    $(".menu-header-main-container2").css("display","none");
    $(".menu-header-main-container").css("box-shadow", "none");
    $(".menu-fixed").css("background","none");
    $(".menu-fixed").css("transition", "0s");
    $(".top-bg-hp-men-fix").css("opacity","0");
    $(".menu-fixed").css("box-shadow","none");
    $(".scroller-sections").removeClass("animated fadeInUp");
    $(".scroller-sections").addClass("animated fadeOutDown");
    $(".menu-fixed-main-cont").css("margin-bottom","0px");
    $(".hide-header-bottom-side").css("opacity","0");
  }

}else if($(window).width()<=500){

  if($(window).scrollTop()+50+70>= $.windowHeight()){
    //menu effect
    $(".menu-header-main-container2").css("display","flex");
    $(".menu-fixed").css("background","var(--color)");
    $(".top-bg-hp-men-fix").css("opacity","1");
    $(".menu-fixed").css("transition", "0s");
    $(".menu-fixed-main-cont").css("margin-bottom","0px");
    $(".scroller-sections").removeClass("animated fadeOutDown");
    $(".scroller-sections").addClass("animated fadeInUp");
    $(".hide-header-bottom-side").css("opacity","1");
  }else{
    //menu effect
    $(".menu-header-main-container2").css("display","none");
    $(".menu-header-main-container").css("box-shadow", "none");
    $(".menu-fixed").css("background","none");
    $(".menu-fixed").css("transition", "0s");
    $(".menu-fixed-main-cont").css("margin-bottom","0px");
    $(".top-bg-hp-men-fix").css("opacity","0");
    $(".menu-fixed").css("box-shadow","none");
    $(".scroller-sections").removeClass("animated fadeInUp");
    $(".scroller-sections").addClass("animated fadeOutDown");
    $(".hide-header-bottom-side").css("opacity","0");
  }



}



  //OPACITY TITLE SECTION
  $top = $(window).scrollTop();

  ////////////////title opacity at start
  //setings
  $start = $(window).height()-250;
  $end = $(window).height()+50;

  //make fade out and fade in
  $duration  = ($end - $start);
  $opacity = ($top - $start)/$duration;

  if($top > $start && $top <= $end){
    $(".title-body-scroll").css("opacity",$opacity);
  }else if($top <= $start){
    $(".title-body-scroll").css("opacity","0");
  }else{
    $(".title-body-scroll").css("opacity","1");
  }


});

//SCROLL PROGRESS BARS
$(document).scroll(function (e) {
  var scrollAmount = $(window).scrollTop();
  var documentHeight = $(document).height();
  var windowHeight = $(window).height();
  var scrollPercent = (scrollAmount / (documentHeight - windowHeight)) * 100;
  var roundScroll = Math.round(scrollPercent);
  
  $(".scrollBar2").css("width", scrollPercent + "%");

  if($(window).scrollTop()>windowHeight-$(".menu-fixed").height()-40){
    // For scrollbar
    $(".scrollBar1").css("opacity", "1");
    $(".scrollBar1").css("background", "var(--color)");
    $(".scrollBar1").css("transition", ".1s");
    $(".scrollBar1").css("width", scrollPercent + "%");
  }else if($(window).scrollTop()<=windowHeight-$(".menu-fixed").height()-40){
    $(".scrollBar1").css("opacity", "0");
    $(".scrollBar1").css("background", "rgba(0,0,0,0)");
    $(".scrollBar1").css("transition", ".1s");
  }
  
});
