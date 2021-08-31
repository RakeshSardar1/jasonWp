(function ($, root, undefined) {

	$(function () {

		'use strict';

		// DOM ready, take it away
		$(".indexFeatures").click(function(){
			$(".indexFeatures").removeClass('active');
			$(this).addClass("active");
		})

		var menuNav = $(".navbar-nav li").size();
		for(let i = 0; i<menuNav; i++){
			let current = $(`.navbar-nav li`).eq(i).children('a').html().trim();
			if($('.customPostType').html() == current){
				$(`.navbar-nav li`).eq(i).addClass('current_page_item');
			}
		}

		$(".sanwichBar").click(function(){
			$(".menuDrawer").addClass('active');
		})

		$(".closeBar").click(function(){
			$(".menuDrawer").removeClass('active');
		})


		// if($(".wp-block-columns").size()){
		// 	alert($(".wp-block-columns").size());
		// 	$(".wp-block-columns").children(".wp-block-column").eq(1).addClass('active');
		// }


		// if($(".customPostType").html()==$(".navbar-nav li")){
		// 	alert("hello")
		// }

	});

})(jQuery, this);
