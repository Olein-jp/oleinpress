jQuery(function($){
	$('.menu-item-has-children').hover(function(){
		$('.menu-item-has-children').toggleClass('active');
		$(this).find('.sub-menu').fadeToggle(400);
	});
});