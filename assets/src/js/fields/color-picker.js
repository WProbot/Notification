(function($) {

	$( document ).ready( function() {
		$( '.notification-color-picker:visible' ).wpColorPicker();
	} );

	notification.hooks.addAction( 'notification.carrier.repeater.row.added', function( $cloned, $repeater ) {
		$cloned.find( '.notification-color-picker' ).wpColorPicker();
	} );

})(jQuery);
