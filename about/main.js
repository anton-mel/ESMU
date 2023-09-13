$(window).ready(function(){
  $cliked = false;
  $count_blocks = 1;
  $max = 4;

  	$(".hero").each(function(){
  		if($count_blocks>$max){
	  		$(this).removeClass("show-hero");
  			$(this).addClass("hide-hero");
  			$(this).hide();
  		}

  		$count_blocks++;
  	});

  	if($(".hero").length>$max){
  		$(".addbb").append("<div class='show-more'><button>більше</button></div>");
  	}

  $(".show-more").click(function(){
  	
  	$cliked = !$cliked;

  	if($cliked){
  		$(".hide-hero").each(function(){
  			$(this).show();
  			$(this).removeClass("hide-hero");
  			$(this).addClass("show-hero");
  		});

  		$('.show-more button').text("менше");
  	}else{
  		$count_blocks = 1;
  		
  		$(".hero").each(function(){

	  		if($count_blocks>$max){
		  		$(this).removeClass("show-hero");
		  		$(this).addClass("hide-hero");

		  		setTimeout(()=>$(this).hide(), 1000);
		  	}

		  	$count_blocks++;
	  	});

	  	

  		$('.show-more button').text("більше");
  	}

  	
  })

});