jQuery(function($){
	var mql = window.matchMedia('screen and (max-width: 999px)');

  function checkBreakPoint(mql) {
    if (! mql.matches) {
      $('.menu-item-has-children').hover(function(){
				$('.menu-item-has-children').toggleClass('active');
				$(this).find('.sub-menu').fadeToggle(400);
			});
    }
  }

  mql.addListener(checkBreakPoint);
  
  checkBreakPoint(mql);
});