(function( $ ) {
	'use strict';

	// ie fix for placeholder attributes
	// see: http://kamikazemusic.com/quick-tips/jquery-html5-placeholder-fix/
	$.fn.modernizr_placeholder_fix = function() {
		// do we need this fix?
		if( ! Modernizr || Modernizr.input.placeholder ) {
			return;
		}

		var $el = $( this );

		$('input').each( function() {
			if( $el.val() === '' && $el.attr('placeholder') !== '' ) {
				$el.val( $el.attr('placeholder') );

				$el.focus(function() {
					if( $el.val() === $el.attr('placeholder') ) {
						$el.val('');
					}
				});

				$el.blur( function() {
					if( $el.val() === '' ) {
						$el.val( $el.attr('placeholder') );
					}
				});
			}//end if
		});
	}//end moderizr_placeholder_fix
}( jQuery ));
