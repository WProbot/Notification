<?php
/**
 * Deprecated functions
 *
 * @package notificaiton
 */

use BracketSpace\Notification\Interfaces;

/**
 * Checks if notification post has been just started
 *
 * @deprecated [Next] Changed name for consistency.
 * @since  5.0.0
 * @since  [Next] We are using Notification Post object.
 * @param  mixed $post Post ID or WP_Post.
 * @return boolean     True if notification has been just started
 */
function notification_is_new_notification( $post ) {
	_deprecated_function( 'notification_is_new_notification', '[Next]', 'notification_post_is_new' );
	return notification_post_is_new( $post );
}

/**
 * Registers notification
 *
 * @deprecated [Next] Changed name for consistency.
 * @param  Interfaces\Sendable $notification Carrier object.
 * @return void
 */
function register_notification( Interfaces\Sendable $notification ) {
	_deprecated_function( 'register_notification', '[Next]', 'notification_register_carrier' );
	notification_register_carrier( $notification );
}

/**
 * Gets all registered notifications
 *
 * @deprecated [Next] Changed name for consistency.
 * @since  5.0.0
 * @return array notifications
 */
function notification_get_notifications() {
	_deprecated_function( 'notification_get_notifications', '[Next]', 'notification_get_carriers' );
	return notification_get_carriers();
}

/**
 * Gets single registered notification
 *
 * @deprecated [Next] Changed name for consistency.
 * @param  string $notification_slug notification slug.
 * @return mixed                     notification object or false
 */
function notification_get_single_notification( $notification_slug ) {
	_deprecated_function( 'notification_get_single_notification', '[Next]', 'notification_get_carrier' );
	return notification_get_carrier( $notification_slug );
}
