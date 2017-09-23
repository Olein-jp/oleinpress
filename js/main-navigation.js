jQuery(function($){
	if ( window.matchMedia( '(min-width: 766px)' ).matches){
		$('.sub-menu').hide();
		$('.menu-item-has-children').hover( function(){
			$('> .sub-menu', this).stop(true, true).fadeToggle(400);
			$('> a', this).toggleClass( 'active' );
		})
	} else {
		$('.menu-toggle').click( function(){
			$(this).toggleClass( 'open' );
			$('.main-navigation').toggleClass( 'menu-open' );
		});
	}
});
