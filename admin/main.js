





/*DRAGGING HEROES ADMIN*/
$ch = false;
$(".drag-hero").click(function(){
	$ch = !$ch;
	if($ch==true){
		var X, Y, dx, dy, co;
		$(this).text("SAVE");
		$(".drug-eff").css({"display":"flex"});
		var heroes = [];
		$n = 0;

		$(".admin-ch-bl").each(function(){
			heroes.push({
				"id" : $n,
				"x" : $(this).offset().left,
				"y" : $(this).offset().top
			});
			$n++;

			$isDragging = false;

			$(this).mouseover(()=> {
				$isDragging = false;

				$(this).find(".drug-eff").css({
					"opacity":".5",
					"transition":".5s"
				});
			});

			$(this).mouseleave(()=> {
				$isDragging = false;

				$(this).find(".drug-eff").css({
					"opacity":"0",
					"transition":".5s"
				});
			});

			// DRUGGING DOWN
			$(this).mousedown(function(event) {
				$isDragging = true;
				X = $(this).offset().left;
				Y = $(this).offset().top;
				dy = event.clientY - Y;
				dx = event.clientX - X;

				$(this).css({
					"z-index":10,
					"top": Y,
					"left": X,
					"position":"absolute",
					"width": $(".admin-ch-bl").first().width(),
					"height": $(".admin-ch-bl").first().height()
				});
			});

			// DRUGGING UP
			$(this).mouseup(function(e) {
				$isDragging = false;
			});

			// MOVE
			$(this).mousemove(function(event) {
				if($isDragging){
					
						$(this).offset({ top: event.clientY - dy, left: event.clientX - dx });

						$i = 0;
						while($i < heroes.length){
							if( $(this).offset().left >= heroes[$i]['x'] + $(this).width()/4 && $(this).offset().left <= heroes[$i]['x'] - $(this).width()/4*3 && $(this).offset().top < heroes[$i]['y'] + $(this).height() && $(this).offset().top > heroes[$i]['y'])
								alert("put");
							$i++;
						}

				}
			});

		});
			console.log(heroes[1]['x']);

	}else if($ch==false){
		$(this).text("DRAG");
		$(".drug-eff").css({"display":"none"});
	}
});

/*FIXED IMG SCROLL*/
$top = $(".img-photo-block-hero").offset().top;
$(window).scroll(function(){
	if($(window).scrollTop()>$top-20){
		$(".img-photo-block-hero").css("margin-top",$(window).scrollTop()-$top+20+"px");
	}else{
		$(".img-photo-block-hero").css("margin-top","0px");
	}
});

/*AUTO HEIGHT TEXTAREA SCRIPT*/
$(".textarea").each(function(){
	$(this).height($(this).prop('scrollHeight'));
	$(this).on("input", function(){
		$(this).height(0);
		$(this).height($(this).prop('scrollHeight'));
	});
});

/*START CHECKING CKECKBOXES*/
$(window).ready(function(){
	$(".ch_ch").each(function(){
		if($(this).is(':checked')){
			$(this).parent().css({
				"transform":"translateY(3px)",
				"margin-bottom":"3px"
			});
			$(this).parent().find(".ch-st-hero").css({
				"background":"var(--color)",
				"color": "#fff",
				"transform":"translateY(-1px)"
			});
			$(this).parent().find(".ch-st-hero").append('<i class="fa fa-check" aria-hidden="true"></i>');
		}
	});
});

/*CHECKBOX STYLE*/
$(".ch_ch").each(function(){
	$(this).on("change", function(){
		if($(this).prop('checked')){
			$(this).parent().css({
				"transform":"translateY(3px)",
				"margin-bottom":"3px"
			});
			$(this).parent().find(".ch-st-hero").css({
				"background":"var(--color)",
				"color": "#f0f0f0",
				"transform":"translateY(-1px)"
			});
			$(this).parent().find(".ch-st-hero").append('<i class="fa fa-check" aria-hidden="true"></i>');
		}else{
			$(this).parent().css({
				"transform":"translateY(0px)",
				"margin-bottom":"0px"
			});
			$(this).parent().find(".ch-st-hero").css({
				"background":"#f0f0f0",
				"transform":"translateY(3px)"
			});
			$(this).parent().find(".ch-st-hero").text("");
		}
	});
});