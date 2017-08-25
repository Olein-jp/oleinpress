jQuery(function($){
	$('.children').hide();
	$('.page_item_has_children').hover( function(){
		$('> .children', this).stop(true, true).fadeToggle(400);
		$('> a', this).toggleClass( 'active' );
	})
});
