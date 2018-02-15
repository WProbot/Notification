<?php
/**
 * User ID merge tag
 *
 * @package notification
 */

namespace underDEV\Notification\Defaults\MergeTag\User;

use underDEV\Notification\Defaults\MergeTag\IntegerTag;

/**
 * User ID merge tag class
 */
class UserID extends IntegerTag {

    /**
     * Constructor
     */
    public function __construct() {

    	parent::__construct( array(
			'slug'        => 'user_ID',
			'name'        => __( 'User ID' ),
			'description' => __( '25' ),
			'resolver'    => function() {
				return $this->trigger->user_object->ID;
			}
        ) );

    }

    /**
     * Function for checking requirements
     *
     * @return boolean
     */
    public function check_requirements( ) {
        return isset( $this->trigger->user_object->ID );
    }

}
