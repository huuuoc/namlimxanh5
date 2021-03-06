(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		//Tab home
		$('.tab-link li,.tab-link-block li').click(function(){
			if (!$(this).hasClass('active')) {
				var id = $(this).attr('item');
				var tabLink = $(this).attr('tab-link');
				var tabContent = $(this).attr('tab-content');
				$('.'+tabLink+' li.active').removeClass('active');
				$('.'+tabContent+' > div.active').removeClass('active');
				$(this).addClass('active'); 
				$(this).parents('.title-tab').attr('class','title-tab '+id); 
				$('.'+tabContent+' #'+id).addClass('active'); 
			}
		});
	});
	
})(jQuery, this);
