<?php
/**
 * Privacy ereased trigger
 *
 * @package notification
 */

namespace BracketSpace\Notification\Defaults\Trigger\Privacy;

/**
 * Data erase request trigger class
 */
class DataEraseRequest extends PrivacyTrigger {

	/**
	 * Constructor
	 */
	public function __construct() {

		parent::__construct( 'privacy/data-erase-request', __( 'Privacy Data Erase Request', 'notification' ) );

		$this->add_action( 'user_request_action_confirmed', 10, 1 );
		$this->set_group( __( 'Privacy', 'notification' ) );
		$this->set_description( __( 'Fires when user requests privacy data erase', 'notification' ) );
	}

	/**
	 * Assigns action callback args to object
	 *
	 * @param integer $request_id Request id.
	 */
	public function action( $request_id ) {
		$this->request = get_post( $request_id );

		if ( 'remove_personal_data' !== $this->request->post_name ) {
			return;
		}

		$this->user_object         = get_userdata( $this->request->post_author );
		$this->data_operation_time = $this->cache( 'timestamp', time() );

	}
}
